/*
   Copyright 2012 University of Washington

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

#include "Common.h"
#include "CometData.h"
#include "CometMassSpecUtils.h"
#include "CometWriteSqt.h"


CometWriteSqt::CometWriteSqt()
{
}


CometWriteSqt::~CometWriteSqt()
{
}


void CometWriteSqt::WriteSqt(FILE *fpout,
                             FILE *fpoutd,
                             char *szOutput,
                             char *szOutputDecoy,
                             char *szParamsFile)
{
   int i;

   if (g_StaticParams.options.bOutputSqtFile)
   {
      PrintSqtHeader(fpout, szParamsFile);

      if (g_StaticParams.options.iDecoySearch == 2)
      {
         // Print this header only if separate decoy search is also run.
         fprintf(fpout, "H\tTargetSearchResults\nH\n");

         PrintSqtHeader(fpoutd, szParamsFile);
         fprintf(fpoutd, "H\tDecoySearchResults\nH\n");
      }
   }

   // Print results.
   for (i=0; i<(int)g_pvQuery.size(); i++)
   {
      PrintResults(i, 0, fpout, szOutput);
   }

   // Print out the separate decoy hits.
   if (g_StaticParams.options.iDecoySearch == 2)
   {
      for (i=0; i<(int)g_pvQuery.size(); i++)
      {
         PrintResults(i, 1, fpoutd, szOutputDecoy);
      }
   }
}


void CometWriteSqt::PrintSqtHeader(FILE *fpout,
                                   char *szParamsFile)
{
   char szParamBuf[SIZE_BUF];
   char szEndDate[28];
   time_t tTime;
   FILE *fp;

   fprintf(fpout, "H\tSQTGenerator Comet\n");
   fprintf(fpout, "H\tComment\tCometVersion %s\n", comet_version);
   fprintf(fpout, "H\n");
   fprintf(fpout, "H\tStartTime\t%s\n", g_StaticParams._dtInfoStart.szDate);
   time(&tTime);
   strftime(szEndDate, 26, "%m/%d/%Y, %I:%M:%S %p", localtime(&tTime));
   fprintf(fpout, "H\tEndTime\t%s\n", szEndDate);
   fprintf(fpout, "H\n");

   // write out entire parameters file to SQT header
   if ((fp=fopen(szParamsFile, "r")) == NULL)
   {
      fprintf(stderr, " Error - cannot open parameter file %s.\n\n", szParamsFile);
      exit(1);
   }

   fprintf(fpout, "H\tDBSeqLength\t%lu\n", g_StaticParams.databaseInfo.liTotAACount);
   fprintf(fpout, "H\tDBLocusCount\t%d\n", g_StaticParams.databaseInfo.iTotalNumProteins);

   fprintf(fpout, "H\tFragmentMassMode\tAMU\n");
   fprintf(fpout, "H\tPrecursorMassMode\t%s\n",
         (g_StaticParams.tolerances.iMassToleranceUnits==0?"AMU":
          (g_StaticParams.tolerances.iMassToleranceUnits==1?"MMU":"PPM")));
   fprintf(fpout, "H\tSQTGeneratorVersion\tN/A\n");
   fprintf(fpout, "H\tDatabase\t%s\n", g_StaticParams.databaseInfo.szDatabase );
   fprintf(fpout, "H\tFragmentMasses\t%s\n", g_StaticParams.massUtility.bMonoMassesFragment?"MONO":"AVG");
   fprintf(fpout, "H\tPrecursorMasses\t%s\n", g_StaticParams.massUtility.bMonoMassesParent?"MONO":"AVG");
   fprintf(fpout, "H\tPrecursorMassTolerance\t%0.6f\n", g_StaticParams.tolerances.dInputTolerance);
   fprintf(fpout, "H\tFragmentMassTolerance\t%0.6f\n", g_StaticParams.tolerances.dFragmentBinSize);
   fprintf(fpout, "H\tEnzymeName\t%s\n", g_StaticParams.enzymeInformation.szSearchEnzymeName);
   fprintf(fpout, "H\tAlgo-IonSeries\t 0 0 0 %0.1f %0.1f %0.1f 0.0 0.0 0.0 %0.1f %0.1f %0.1f\n",
         (double)g_StaticParams.ionInformation.iIonVal[0],
         (double)g_StaticParams.ionInformation.iIonVal[1],
         (double)g_StaticParams.ionInformation.iIonVal[2],
         (double)g_StaticParams.ionInformation.iIonVal[3],
         (double)g_StaticParams.ionInformation.iIonVal[4],
         (double)g_StaticParams.ionInformation.iIonVal[5]);


   for (int i=0; i<VMODS; i++)
   {
      if ((g_StaticParams.variableModParameters.varModList[i].dVarModMass != 0.0)
            && (g_StaticParams.variableModParameters.varModList[i].szVarModChar[0]!='\0'))
      {
         for (unsigned int ii=0; ii<strlen(g_StaticParams.variableModParameters.varModList[i].szVarModChar); ii++)
         {
            fprintf(fpout, "H\tDiffMod\t%c%c=%+0.6f\n",
                  g_StaticParams.variableModParameters.varModList[i].szVarModChar[ii],
                  g_StaticParams.variableModParameters.cModCode[i],
                  g_StaticParams.variableModParameters.varModList[i].dVarModMass);
         }
      }
   }
   if (g_StaticParams.variableModParameters.dVarModMassN != 0.0)
   {
      fprintf(fpout, "H\tDiffMod\tnt]=%+0.6f\n",
            g_StaticParams.variableModParameters.dVarModMassN);
   }
   if (g_StaticParams.variableModParameters.dVarModMassC != 0.0)
   {
      fprintf(fpout, "H\tDiffMod\tct[=%+0.6f\n",
            g_StaticParams.variableModParameters.dVarModMassC);
   }

   char *pStr;
   while ((pStr = strrchr(g_StaticParams.szMod, '='))!=NULL)
   {
      char szTmp[48];
      while (*pStr != ' ')
         (*pStr)--;
      sscanf(pStr+1, "%48s", szTmp);

      fprintf(fpout, "H\tStaticMod\t%s\n", szTmp);

      *pStr = '\0';
   }

   fprintf(fpout, "H\n");
   while (fgets(szParamBuf, SIZE_BUF, fp))
      fprintf(fpout, "H\tCometParams\t%s", szParamBuf);
   fprintf(fpout, "H\n");

   fclose(fp);
}


void CometWriteSqt::PrintResults(int iWhichQuery,
                                 bool bDecoy,
                                 FILE *fpout,
                                 char *szOutput)
{
   int  i,
        iDoXcorrCount,
        iRankXcorr;
   char szBuf[SIZE_BUF],
        scan1[32],
        scan2[32];

   Query* pQuery = g_pvQuery.at(iWhichQuery);

   strcpy(scan1, "0");
   strcpy(scan2, "0");

   if (bDecoy)
   {
      sprintf(szBuf, "S\t%d\t%d\t%d\t%d\t%s\t%0.6f\t%0.2E\t%0.1f\t%lu\n",
            pQuery->_spectrumInfoInternal.iScanNumber, 
            pQuery->_spectrumInfoInternal.iScanNumber,
            pQuery->_spectrumInfoInternal.iChargeState, 
            g_StaticParams.iElapseTime, 
            g_StaticParams.szHostName, 
            pQuery->_pepMassInfo.dExpPepMass,
            pQuery->_spectrumInfoInternal.dTotalIntensity, 
            pQuery->fLowestDecoySpScore, 
            pQuery->_liNumMatchedDecoyPeptides);
   }
   else
   {
      sprintf(szBuf, "S\t%d\t%d\t%d\t%d\t%s\t%0.6f\t%0.2E\t%0.1f\t%lu\n",
            pQuery->_spectrumInfoInternal.iScanNumber, 
            pQuery->_spectrumInfoInternal.iScanNumber,
            pQuery->_spectrumInfoInternal.iChargeState, 
            g_StaticParams.iElapseTime, 
            g_StaticParams.szHostName, 
            pQuery->_pepMassInfo.dExpPepMass,
            pQuery->_spectrumInfoInternal.dTotalIntensity, 
            pQuery->fLowestSpScore, 
            pQuery->_liNumMatchedPeptides);
   }

   if (g_StaticParams.options.bOutputSqtStream)
      fprintf(stdout, "%s", szBuf); 
   else
      fprintf(fpout, "%s", szBuf);

   if (bDecoy)
      iDoXcorrCount = pQuery->iDoDecoyXcorrCount;
   else
      iDoXcorrCount = pQuery->iDoXcorrCount;

   // Print out each sequence line.
   if (iDoXcorrCount > (g_StaticParams.options.iNumPeptideOutputLines))
      iDoXcorrCount = (g_StaticParams.options.iNumPeptideOutputLines);

   Results *pOutput;

   if (bDecoy)
      pOutput = pQuery->_pDecoys;
   else
      pOutput = pQuery->_pResults;

   iRankXcorr = 1;

   for (i=0; i<iDoXcorrCount; i++)
   {
      if ((i > 0) && (pOutput[i].fXcorr != pOutput[i-1].fXcorr))
         iRankXcorr++;

      if (pOutput[i].fXcorr > 0)
         PrintSqtLine(iWhichQuery, iRankXcorr, i, bDecoy, pOutput, fpout);
   } 
}


void CometWriteSqt::PrintSqtLine(int iWhichQuery,
                                 int iRankXcorr,
                                 int iWhichResult,
                                 bool bDecoy,
                                 Results *pOutput,
                                 FILE *fpout)
{
   int  i;
   char szBuf[SIZE_BUF];

   sprintf(szBuf, "M\t%d\t%d\t%0.4f\t%0.4f\t%0.4f\t",
         iRankXcorr,
         pOutput[iWhichResult].iRankSp,
         pOutput[iWhichResult].dPepMass,
         1.000000 - pOutput[iWhichResult].fXcorr/pOutput[0].fXcorr,
         pOutput[iWhichResult].fXcorr);

   if (g_StaticParams.options.bPrintExpectScore)
      sprintf(szBuf+strlen(szBuf), "%0.2E", pOutput[iWhichResult].dExpect);
   else
      sprintf(szBuf+strlen(szBuf), "%0.1f", pOutput[iWhichResult].fScoreSp);

   sprintf(szBuf + strlen(szBuf), "\t%d\t%d\t",
         pOutput[iWhichResult].iMatchedIons, 
         pOutput[iWhichResult].iTotalIons);

   sprintf(szBuf+strlen(szBuf), "%c", pOutput[iWhichResult].szPrevNextAA[0]);

   if (g_StaticParams.variableModParameters.bVarModSearch
         && pOutput[iWhichResult].pcVarModSites[pOutput[iWhichResult].iLenPeptide] == 1)
   {
      sprintf(szBuf+strlen(szBuf), "]");
   }
   else
      sprintf(szBuf+strlen(szBuf), ".");

   // Print peptide sequence.
   for (i=0; i<pOutput[iWhichResult].iLenPeptide; i++)
   {
      sprintf(szBuf+strlen(szBuf), "%c", pOutput[iWhichResult].szPeptide[i]);

      if (g_StaticParams.variableModParameters.bVarModSearch
            && 0.0 != g_StaticParams.variableModParameters.varModList[pOutput[iWhichResult].pcVarModSites[i]-1].dVarModMass)
      {
         sprintf(szBuf+strlen(szBuf), "%c",
               g_StaticParams.variableModParameters.cModCode[pOutput[iWhichResult].pcVarModSites[i]-1]);
      }
   }

   if (g_StaticParams.variableModParameters.bVarModSearch
         && pOutput[iWhichResult].pcVarModSites[pOutput[iWhichResult].iLenPeptide+1] == 1)
   {
      sprintf(szBuf+strlen(szBuf), "[");
   }
   else
      sprintf(szBuf+strlen(szBuf), ".");

   sprintf(szBuf+strlen(szBuf), "%c", pOutput[iWhichResult].szPrevNextAA[1]);

   if (g_StaticParams.options.bOutputSqtStream)
   {
      fprintf(stdout, "%s\tU\n", szBuf);

      // Print protein reference/accession.
      fprintf(stdout, "L\t%s", pOutput[iWhichResult].szProtein);

      if (pOutput[iWhichResult].iDuplicateCount > 0)
         fprintf(stdout, "\t%+u", pOutput[iWhichResult].iDuplicateCount); 

      fprintf(stdout, "\n");
   }
   else // OutputSqtFile
   {
      fprintf(fpout, "%s\tU\n", szBuf);

      // Print protein reference/accession.
      fprintf(fpout, "L\t%s", pOutput[iWhichResult].szProtein);

      if (pOutput[iWhichResult].iDuplicateCount > 0)
         fprintf(fpout, "\t%+u", pOutput[iWhichResult].iDuplicateCount); 

      fprintf(fpout, "\n");
   }
}