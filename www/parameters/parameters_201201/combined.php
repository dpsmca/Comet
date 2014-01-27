<?php include "head.php" ; ?>
<html>
<body>
<?php include "topmenu.php" ; ?>
<?php include "imgbar.php" ; ?>

<div id="page">
   <div id="content_full">
      <div class="post hr">
         <h1>Search parameters (2012.01)</h1>
         <p><strong>Comet</strong> search parameters are defined here.  These are valid for Comet version 2012.01.X.
      </div>
      <div class="post hr">

         <h2>Comet parameter: activation_method</h2>

         <ul>
         <li>This parameter specifies which scan types are searched.
         <li>If "ALL" is specified, no filtering based on the activation method
         is applied.
         <li>If any other allowed entry is chosen, only spectra with activation
         method matching the specified entry are searched.
         <li>This parameter is valid only for mzXML, mzML and mz5 input.
         <li>Allowed values are: ALL, CID, ECD, ETD, PQD, HCD, IRMPD
         </ul>

         <p>Example:
         <br><tt>activation_method = ALL</tt>
         <br><tt>activation_method = CID</tt>
         <br><tt>activation_method = ETD</tt>
         <br><tt>activation_method = HCD</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_A_alanine</h2>

         <ul>
         <li>Specify a static modification to the residue A.
         <li>The specified mass is added to the unmodified mass of A.
         </ul>

         <p>Example:
         <br><tt>add_A_alanine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_B_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'B' in the input FASTA file and specify its mass here.
         <li>The letter 'B' has no default mass.  So the mass entered here will
             be its residue mass.
         </ul>

         <p>Example:
         <br><tt>add_B_user_amino_acid = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_C_cysteine</h2>

         <ul>
         <li>Specify a static modification to the residue C.
         <li>The specified mass is added to the unmodified mass of C.
         </ul>

         <p>Example:
         <br><tt>add_C_cysteine = 57.02</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Cterm_peptide</h2>

         <ul>
         <li>Specify a static modification to the c-terminus of all peptides.
         <li>The specified mass is added to the unmodified c-terminal mass (mass of OH or 17.0).
         </ul>

         <p>Example:
         <br><tt>add_Cterm_peptide = 14.01</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Cterm_protein</h2>

         <ul>
         <li>Specify a static modification to the c-terminal peptide of each protein entry.
         <li>The specified mass is added to the unmodified c-terminal mass (mass of OH or 17.0).
         </ul>

         <p>Example:
         <br><tt>add_Cterm_protein = 14.01</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_D_aspartic_acid</h2>

         <ul>
         <li>Specify a static modification to the residue D.
         <li>The specified mass is added to the unmodified mass of D.
         </ul>

         <p>Example:
         <br><tt>add_D_cysteine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_E_glutamic_acid</h2>

         <ul>
         <li>Specify a static modification to the residue E.
         <li>The specified mass is added to the unmodified mass of E.
         </ul>

         <p>Example:
         <br><tt>add_E_cysteine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_F_phenylalanine</h2>

         <ul>
         <li>Specify a static modification to the residue F.
         <li>The specified mass is added to the unmodified mass of F.
         </ul>

         <p>Example:
         <br><tt>add_F_phenylalanine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_G_glycine</h2>

         <ul>
         <li>Specify a static modification to the residue G.
         <li>The specified mass is added to the unmodified mass of G.
         </ul>

         <p>Example:
         <br><tt>add_G_cysteine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_H_histidine</h2>

         <ul>
         <li>Specify a static modification to the residue H.
         <li>The specified mass is added to the unmodified mass of H.
         </ul>

         <p>Example:
         <br><tt>add_H_histidine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_I_isoleucine</h2>

         <ul>
         <li>Specify a static modification to the residue I.
         <li>The specified mass is added to the unmodified mass of I.
         </ul>

         <p>Example:
         <br><tt>add_I_isoleucine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_J_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'J' in the input FASTA file and specify its mass here.
         <li>The letter 'J' has no default mass.  So the mass entered here will
             be its residue mass.
         </ul>

         <p>Example:
         <br><tt>add_J_user_amino_acid = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_K_lysine</h2>

         <ul>
         <li>Specify a static modification to the residue K.
         <li>The specified mass is added to the unmodified mass of K.
         </ul>

         <p>Example:
         <br><tt>add_K_lysine = 14.01</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_L_leucine</h2>

         <ul>
         <li>Specify a static modification to the residue L.
         <li>The specified mass is added to the unmodified mass of L.
         </ul>

         <p>Example:
         <br><tt>add_L_leucine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_M_methionine</h2>

         <ul>
         <li>Specify a static modification to the residue M.
         <li>The specified mass is added to the unmodified mass of M.
         </ul>

         <p>Example:
         <br><tt>add_M_methionine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_N_asparagine</h2>

         <ul>
         <li>Specify a static modification to the residue N.
         <li>The specified mass is added to the unmodified mass of N.
         </ul>

         <p>Example:
         <br><tt>add_N_cysteine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Nterm_peptide</h2>

         <ul>
         <li>Specify a static modification to the n-terminus of all peptides.
         <li>The specified mass is added to the unmodified n-terminal mass (mass of H or 1.007825).
         </ul>

         <p>Example:
         <br><tt>add_Nterm_peptide = 14.01</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Nterm_protein</h2>

         <ul>
         <li>Specify a static modification to the n-terminal peptide of each protein entry.
         <li>The specified mass is added to the unmodified n-terminal mass (mass of H or 1.007825).
         </ul>

         <p>Example:
         <br><tt>add_Nterm_protein = 14.01</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_O_ornithine</h2>

         <ul>
         <li>Specify a static modification to the residue O.
         <li>The specified mass is added to the unmodified mass of O.
         </ul>

         <p>Example:
         <br><tt>add_O_ornithine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_P_proline</h2>

         <ul>
         <li>Specify a static modification to the residue P.
         <li>The specified mass is added to the unmodified mass of P.
         </ul>

         <p>Example:
         <br><tt>add_P_proline = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Q_glutamine</h2>

         <ul>
         <li>Specify a static modification to the residue Q.
         <li>The specified mass is added to the unmodified mass of Q.
         </ul>

         <p>Example:
         <br><tt>add_Q_glutamine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_R_arginine</h2>

         <ul>
         <li>Specify a static modification to the residue R.
         <li>The specified mass is added to the unmodified mass of R.
         </ul>

         <p>Example:
         <br><tt>add_R_arginine = 28.03</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_S_serine</h2>

         <ul>
         <li>Specify a static modification to the residue S.
         <li>The specified mass is added to the unmodified mass of s.
         </ul>

         <p>Example:
         <br><tt>add_S_serine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_T_threonine</h2>

         <ul>
         <li>Specify a static modification to the residue T.
         <li>The specified mass is added to the unmodified mass of T.
         </ul>

         <p>Example:
         <br><tt>add_T_threonine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_U_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'U' in the input FASTA file and specify its mass here.
         <li>The letter 'U' has no default mass.  So the mass entered here will
             be its residue mass.
         </ul>

         <p>Example:
         <br><tt>add_U_user_amino_acid = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_V_valine</h2>

         <ul>
         <li>Specify a static modification to the residue V.
         <li>The specified mass is added to the unmodified mass of V.
         </ul>

         <p>Example:
         <br><tt>add_V_valine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_W_tryptophan</h2>

         <ul>
         <li>Specify a static modification to the residue W.
         <li>The specified mass is added to the unmodified mass of W.
         </ul>

         <p>Example:
         <br><tt>add_W_tryptophan = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_X_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'X' in the input FASTA file and specify its mass here.
         <li>The letter 'X' has no default mass.  So the mass entered here will
             be its residue mass.
         </ul>

         <p>Example:
         <br><tt>add_X_user_amino_acid = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Y_tyrosine</h2>

         <ul>
         <li>Specify a static modification to the residue Y.
         <li>The specified mass is added to the unmodified mass of Y.
         </ul>

         <p>Example:
         <br><tt>add_Y_tyrosine = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: add_Z_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'Z' in the input FASTA file and specify its mass here.
         <li>The letter 'Z' has no default mass.  So the mass entered here will
             be its residue mass.
         </ul>

         <p>Example:
         <br><tt>add_Z_user_amino_acid = 100.8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: allowed_missed_cleage</h2>

         <ul>
         <li>Number of allowed missed enzyme cleavages in a peptide.
         <li>Parameter is not applied of the no-enzyme option is specified
         in the <a href="search_enzyme_number.php">search_enzyme_number</a>
         parameter.
         </ul>

         <p>Example:
         <br><tt>allowed_missed_cleavage = 0</tt> &nbsp; &nbsp; <i>for no missed cleavages</i>
         <br><tt>allowed_missed_cleavage = 2</tt> &nbsp; &nbsp; <i>allow two missed cleavages</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: clip_nterm_methionine</h2>

         <ul>
         <li>This parameter controls whether Comet will automatically remove
         the N-terminal methionine from a sequence entry.
         <li>If set to 0, the sequence is analyzed as-is.
         <li>If set to 1, any sequence with an N-terminal methionine will be
         analyzed as-is as well as with the methionine removed.  This means
         that any N-terminal modifications will also apply (if appropriate)
         to the peptide that is generated after the removal of the methionine.
         <li>Valid values are 0 and 1.
         </ul>

         <p>Example:
         <br><tt>clip_nterm_methionine = 0</tt>
         <br><tt>clip_nterm_methionine = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: database_name</h2>

         <ul>
         <li>A full or relative path to the sequence database, in FASTA format, to search. Example databases
         include RefSeq or UniProt.
         <li>Database can contain amino acid sequences or nucleic acid sequences.  If sequences are amino acid
         sequences, set the parameter "nucleotide_reading_frame = 0".  If the sequences are nucleic acid
         sequences, you must instruct Comet to translate these to amino acid sequences.  Do this by setting
         "nucleotide_reading_frame" to a value between 1 and 9.
         </ul>

         <p>Example:
         <br><tt>database_name = /usr/local/db/yeast.fasta</tt>
         <br><tt>database_name = c:\local\db\yeast.fasta</tt>
         <br><tt>database_name = yeast.fasta</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: decoy_search</h2>

         <ul>
         <li>This parameter controls whether or not an internal decoy search is performed.
         <li>Valid parameter values are 0, 1, or 2:
            <ul>
            <li>0 = no decoy search (default)
            <li>1 = concatenated decoy search.  Target and decoy entries will be scored against
            each other and a single result is performed for each spectrum query.
            <li>2 = separate decoy search.  Target and decoy entries will be scored separately
            and separate target and decoy search results will be reported.
            </ul>
         </ul>

         <p>Example:
         <br><tt>decoy_search = 0</tt>
         <br><tt>decoy_search = 1</tt>
         <br><tt>decoy_search = 2</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: digest_mass_range</h2>

         <ul>
         <li>Defines the mass range of peptides to search (based on MH+ or the singly
         protonated mass).
         <li>This parameter has two decimal values.
         <li>The first value is the lower mass cutoff and the second value is
         the high mass cutoff.
         <li>Only spectra with experimental MH+ masses in within the defined
         mass ranges are searched.
         <li>Valid values are two decimal numbers where the first number must
         be less or equal to the second number.
         </ul>

         <p>Example:
         <br><tt>digest_mass_range = 0.0 10000.0</tt> &nbsp; &nbsp; <i>search all spectra with peptide masses between 0.0 and 10000.0</i>
         <br><tt>digest_mass_range = 600.0 5000.0</tt> &nbsp; &nbsp; <i>search only 600.0 to 5000.0 mass range</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: fragment_bin_offset</h2>

         <ul>
         <li>This parameter controls how each fragment bin of size <a href="fragment_bin_tol.php">fragment_bin_tol</a>
         is defined in terms of where each bin starts.
         <li>For example, assume a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 1.0.  Most intuitively,
         the fragment bins would be 0.0 to 1.0, 1.0 to 2.0, 2.0 to 3.0, etc.
         This set of bins corresponds to a fragment_bin_offset of 0.0.  However,
         consider if we set fragment_bin_offset to 0.5; this would cause the
         bins to be 0.5 to 1.5, 1.5 to 2.5, 2.5 to 3.5, etc.
         <li>So this fragment_bin_offset gives one a mechanism to define
         where each bin starts and is centered.
         <li>For ion trap data with a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 0.36,
         it is recommended to set fragment_bin_offset to 0.11.  This is based
         on a brute force analysis of a yeast dataset.
         <li>For high-res MS/MS data, one might use a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 0.03
         and a corresponding fragment_bin_offset of 0.0.
         <li>Allowed values are positive decimal numbers (that must be
         less than the <a href="fragment_bin_tol.php">fragment_bin_tol</a> value).
         </ul>

         <p>Example:
         <br><tt>fragment_bin_offset = 0.11</tt>
         <br><tt>fragment_bin_offset = 0.0</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: fragment_bin_tol</h2>

         <ul>
         <li>This parameter controls the bin size associated with fragment ions.
         <li>The bin size defines the mass width associated with a single MS/MS peak
         as it is stored internally in an array element.
         <li>Although it's not explicitly a fragment ion tolerance, it's probably
         easiest to think of it as such.
         <li>Note, there is a direct correlation between the value selected for
         the fragment_bin_tol and the memory used in a search.  The lower the
         fragment_bin_tol setting, the more memory a search will use.  A test of
         4,515 query spectra used 724MB RAM with a 0.36 fragment_bin_tol value,
         1.4GB RAM with a 0.10 value, and 9.6GB RAM with a 0.01 value.
         </ul>

         <p>Example:
         <br><tt>fragment_bin_tol = 0.36</tt>
         <br><tt>fragment_bin_tol = 0.03</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: isotope_error</h2>

         <ul>
         <li>This parameter controls whether the <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a>
         takes into account possible isotope errors in the precursor mass measurement.
         <li>It is possible that an accurately read precursor mass is not measured on the monoisotopic
         peak of a precursor isotopic pattern. In these cases, the precursor mass is measured on the
         first isotope peak (one C13 atom) or possibly even the second or third isotope peak. To address
         this problem, this "isotope_error" parameter allows you to perform an accurate mass search
         (say 10 ppm) even if the precursor mass measurement is off by one or more C13 offsets.
         <li>Valid values are 0, 1, and 2:
            <ul>
            <li>0 performs no isotope error searches
            <li>1 searches -1, 0, +1, +2, and +3 isotope offsets
            <li>2 searches -8, -4, 0, +4, +8 isotope offsets (for +4/+8 stable isotope labeling)
            </ul>
         </ul>

         <p>Example:
         <br><tt>isotope_error = 0</tt>
         <br><tt>isotope_error = 1</tt>
         <br><tt>isotope_error = 2</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: mass_type_fragment</h2>

         <ul>
         <li>Controls the mass type, average or monoisotopic, applied to fragment ion calculations.
         <li>Valid values are 0 or 1:
            <ul>
            <li>0 for average masses
            <li>1 for monoisotopic masses
            </ul>


         </ul>

         <p>Example:
         <br><tt>mass_type_fragment = 0</tt>
         <br><tt>mass_type_fragment = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: mass_type_parent</h2>

         <ul>
         <li>Controls the mass type, average or monoisotopic, applied to peptide mass calculations.
         <li>Valid values are 0 or 1:
            <ul>
            <li>0 for average masses
            <li>1 for monoisotopic masses
            </ul>


         </ul>

         <p>Example:
         <br><tt>mass_type_parent = 0</tt>
         <br><tt>mass_type_parent = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: max_fragment_charge</h2>

         <ul>
         <li>This parameter sets the maximum fragment charge state that will
         be considered in the analysis.
         <li>Typically, the fragment charge state range that is analyzed is
         from 1+ to one charge less than the precursor charge state.
         <li>For high precursor charge states (i.e. 6+), the default behavior
         would analyze fragment ions with 1+ through 5+ charges on them.  This
         parameter is a mechanism to limit the fragment charge range that is
         analyzed.
         <li>For example, if max_fragment_charge is set to 3 then the maximum
         fragment charge state that will be analyzed is 3+.  However, the default
         rule will still limit 1+ and 2+ precursor ions to only have 
         1+ fragments considered.  And similarly 3+ precursors will still only
         have 1+ and 2+ fragments considered.
         <li>Valid values are any non-zero integer.
         </ul>

         <p>Example:
         <br><tt>max_fragment_charge = 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: max_precursor_charge</h2>

         <ul>
         <li>This parameter defines the maximum precursor charge state that
         will be analyzed.
         <li>Only spectra with this number of precursor charges or less will be searched.
         <li>Valid values are any integer greater than 1.
         </ul>

         <p>Example:
         <br><tt>max_precursor_charge = 5</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: max_variable_mods_in_peptide</h2>

         <ul>
         <li>Specifies the total/maximum number of residues that can be modified in a peptide.
         <li>As opposed to specifying the maximum number of variable modifications for each
             of the 6 possible variable modifications, this entry limits the global number
             of variable mods possible in each peptide.
         </ul>

         <p>Example:
         <br><tt>max_variable_mods_in_peptide = 6</tt>
         <br><tt>max_variable_mods_in_peptide = 10</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: minimum_intensity</h2>

         <ul>
         <li>A floating point number indicating the minimum intensity value
         for input the input peaks.
         <li>If an experimental MS/MS peak intensity is less than this value,
         it will not be read in and used in the analysis.
         <li>This is one mechanism to get rid of systemmatic background noise
         that has a near contant peak intensity.
         <li>If a peak does not pass this minimum intensity threshold, it will
         also not be counted towards the <a href="minimum_peaks.php">minimum_peaks</a>
         parameter.
         <li>Valid values are any floating point number.
         </ul>

         <p>Example:
         <br><tt>minimum_intensity = 1000.0</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: minimum_peaks</h2>

         <ul>
         <li>An integer value indicating the minimum number of m/z-intensity pairs
         that must be present in a spectrum before it is searched.
         <li>This parameter can be used to avoid searching nearly sparse spectra
         that will not likely yield an indentification.
         <li>Valid values are any integer number.
         </ul>

         <p>Example:
         <br><tt>minimum_peaks = 20</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: ms_level</h2>

         <ul>
         <li>This parameter specifies which scans are searched.
         <li>An input value of 2 will search MS/MS scans.
         <li>An input value of 3 will search MS^3 scans.
         <li>This parameter is only valid for mzXML, mzML, and mz5 input files.
         <li>Allowed values are 2 or 3.
         </ul>

         <p>Example:
         <br><tt>ms_level = 2</tt>
         <br><tt>ms_level = 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: nucleotide_reading_frame</h2>

         <ul>
         <li>This parameter is used to search nucleotide sequence databases.
         <li>It controls how the nucleotides are translated specifically
         which sets of reading frames are translated.
         <li>Set this parameter to 0 for a protein sequence database.
         <li>Set this parameter to 1 to search the 1st forward reading frame.
         <li>Set this parameter to 2 to search the 2nd forward reading frame.
         <li>Set this parameter to 3 to search the 3rd forward reading frame.
         <li>Set this parameter to 4 to search the 1st reverse reading frame.
         <li>Set this parameter to 5 to search the 2nd reverse reading frame.
         <li>Set this parameter to 6 to search the 3rd reverse reading frame.
         <li>Set this parameter to 7 to search all 3 forward reading frames.
         <li>Set this parameter to 8 to search all 3 reverse reading frames.
         <li>Set this parameter to 9 to search all 6 reading frames.
         <li>Valid values are 0 through 9.
         </ul>

         <p>Example:
         <br><tt>nucleotide_reading_frame = 0</tt>
         <br><tt>nucleotide_reading_frame = 9</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: num_enzyme_termini</h2>

         <ul>
         <li>This parameter specifies the number of enzyme termini a peptide must
         have.
         <li>For example, if trypsin were specified as the search enzyme, only 
         fully tryptic peptides would be analyzed if "num_enzyme_termini = 2"
         whereas semi-tryptic peptides would be analyzed if "num_enzyme_termini = 1".
         <li>This parameter is unused if a no-enzyme search is specified.
         <li>Valid values are 1 and 2.


         <p>Example:
         <br><tt>num_enzyme_termini = 1</tt>
         <br><tt>num_enzyme_termini = 2</tt> 

      </div>
      <div class="post hr">

         <h2>Comet parameter: num_output_lines</h2>

         <ul>
         <li>This parameter controls the number of search result
         hits (peptides) that are reported for each spectrum query.
         <li>If you are only interested in seeing one top each per
         query, set this value to 1.
         <li>The maximum possible number of reported hits is hardcoded
         into each binary and that value is currently set to 100.
         <li>Valid values are any positive integer 1 or greater.
         </ul>

         <p>Example:
         <br><tt>num_output_lines = 1</tt>
         <br><tt>num_output_lines = 10</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: num_results</h2>

         <ul>
         <li>This parameter controls the number of peptide search results that
         are stored internally.
         <li>Depending on what post-processing tools are used, one may want to
         set this to the same value as <a href="num_output_lines.php">num_output_lines</a>.
         <li>When this parameter is set to a value greater than
         <a href="num_output_lines.php">num_output_lines</a>, it allows
         the SpRank value to span a larger range which may be helpful for
         tools like PeptideProphet or Percolator (not likely though).
         <li>The maximum num_results value possible is hardcoded into Comet and
         is currently 100.
         <li>Valid values are any integer greater than zero.
         </ul>

         <p>Example:
         <br><tt>num_results = 10</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: num_threads</h2>

         <ul>
         <li>This parameter controls the number of processing threads that will be spawned for a search.
         Ideally the number of threads is set to the same value as the number of CPU cores available.
         <li>Valid values range for this parameter are numbers ranging from 0 to 32.
         <li>A value of 0 will cause Comet to poll the system and launch the same number of threads
         as CPU cores.  This is the default setting.
         <li>To set an explicit thread count, enter any value between 1 and 32.
         </ul>

         <p>Example:
         <br><tt>num_threads = 0</tt>
         <br><tt>num_threads = 8</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: output_outfiles</h2>

         <ul>
         <li>Controls whether to output search results as individual .out files.
         <li>Valid values are 0 (do not output) or 1 (output).
         </ul>

         <p>Example:
         <br><tt>output_outfiles= 0</tt>
         <br><tt>output_outfiles= 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: output_pepxmlfile</h2>

         <ul>
         <li>Controls whether to output search results in a pepXML file.
         <li>Valid values are 0 (do not output) or 1 (output).
         </ul>

         <p>Example:
         <br><tt>output_pepxmlfile= 0</tt>
         <br><tt>output_pepxmlfile= 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: output_sqt_file</h2>

         <ul>
         <li>Controls whether to output search results into an SQT file (.sqt).
         <li>Valid values are 0 (do not output) or 1 (output).
         </ul>

         <p>Example:
         <br><tt>output_sqt_file= 0</tt>
         <br><tt>output_sqt_file= 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: output_sqt_stream</h2>

         <ul>
         <li>Controls whether to output search results to standard out
         (i.e. to the screen unless otherwise directed) in SQT format.
         <li>Just the search results (M and L lines and not any H lines)
         are output to standard out.
         <li>Valid values are 0 (do not output) or 1 (output).
         </ul>

         <p>Example:
         <br><tt>output_sqt_stream = 0</tt>
         <br><tt>output_sqt_stream = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: peptide_mass_tolerance</h2>

         <ul>
         <li>This parameter controls the mass tolerance value.
         <li>The mass tolerance is set at +/- the specified number i.e. an entered value of "1.0" applies a -1.0 to +1.0 tolerance.
         <li>The units of the mass tolerance is controlled by the parameter "<a href="peptide_mass_units.php">peptide_mass_units</a>".
         </ul>

         <p>Example:
         <br><tt>peptide_mass_tolerance = 3.0</tt>
         <br><tt>peptide_mass_tolerance = 10.0</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: peptide_mass_units</h2>

         <ul>
         <li>This parameter controls the units applied to the <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a> parameter.
         <li>Valid values are 0, 1, and 2:
            <ul>
            <li>0 for amu
            <li>1 for mmu
            <li>2 for ppm
            </ul>
         </ul>

         <p>Example:
         <br><tt>peptide_mass_units = 0</tt>
         <br><tt>peptide_mass_units = 1</tt>
         <br><tt>peptide_mass_units = 2</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: precursor_charge</h2>

         <ul>
         <li>This parameter specifies the precursor charge range to search.
         <li>This parameter expects to integer values as input.
         <li>If the first input value is 0 then this parameter is ignored and all charge
         states are searched
         <li>If the first input value is not 0 then all charge states between (and inclusive of)
         the first and second input values are searched.
         </ul>

         <p>Example:
         <br><tt>precursor_charge = 0 0</tt> &nbsp; &nbsp; <i>search all charge ranges</i>
         <br><tt>precursor_charge = 0 2</tt> &nbsp; &nbsp; <i>search all charge ranges (because first entry is 0)</i>
         <br><tt>precursor_charge = 2 6</tt> &nbsp; &nbsp; <i>search 2+ to 6+ precursors</i>
         <br><tt>precursor_charge = 3 3</tt> &nbsp; &nbsp; <i>search 3+ precursors</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: precursor_tolerance_type</h2>

         <ul>
         <li>This parameter controls how the <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a>
         parameter is applied.  That tolerance can be applied to the singly charged peptide mass or it can
         be applied to the precursor m/z.
         <li>Valid values are 0 or 1:
            <ul>
            <li>0 applied to singly charged mass (MH+)
            <li>1 applied to m/z
            </ul>
         </ul>

         <p>Example:
         <br><tt>precursor_tolerance_type = 0</tt>
         <br><tt>precursor_tolerance_type = 1</tt>

         <p>For example, assume a 2.1 Da <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a> was
         specified.  If "precursor_tolerance_type = 0" then a peptide with MH+ mass of 1250.4 will be queried
         against peptide sequences with MH+ masses between 1248.3 to 1252.5.

         <p>If "precursor_tolerance_type = 1" for a 10 ppm
         <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a>, then the 10 ppm tolerance
         is applied at the precursor m/z level.  Assuming the precursor charge is 3+ for the 1320.8 MH+ mass,
         this means the precursor m/z is 440.93855.  +/- 10 ppm on 440.93855 gives the
         range 440.9341 to 440.94296.  This range corresponds to peptides with MH+ masses between
         1320.7868 and 1320.8132.

      </div>
      <div class="post hr">

         <h2>Comet parameter: print_expect_score</h2>

         <ul>
         <li>A boolean flag this determines whether or not the expectation
         score (E-value) is reported in .out and SQT formats.  Note that the
         E-value is always reported in pepXML output.
         <li>This parameter is only pertinant for results reported in .out and SQT formats.
         <li>If expect scores are chosen to be reported, they will replace
         the number reported for the traditional "spscore" i.e. "spscore" will
         be replaced by an E-value.  Also an expectation value histogram will
         be output at the end of each .out file; this histogram is not present
         for SQT output.
         <li>Valid values are 0 and 1.
         </ul>

         <p>Example:
         <br><tt>print_expect_score = 0</tt>
         <br><tt>print_expect_score = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: remove_precursor_peak</h2>

         <ul>
         <li>This parameter controls excluding/removing any precursor signals
         from the input MS/MS spectrum.
         <li>An input value of 0 will not perform any precursor removal.
         <li>An input value of 1 will remove all peaks around the precursor m/z.
         of the precursor m/z.
         <li>An input value of 2 will remove all charge reduced precursor peaks
         as expected to be present for ETD/ECD spectra.
         <li>This parameter works in conjuction with
         <a href="remove_precursor_tolerance.php">remove_precursor_tolerance</a>
         to specify the tolerance around each precuror m/z that will be removed.
         <li>Valid values are 0, 1, and 2.
         </ul>

         <p>Example:
         <br><tt>remove_precursor_peak = 0</tt>
         <br><tt>remove_precursor_peak = 1</tt>
         <br><tt>remove_precursor_peak = 2</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: remove_precursor_tolerance</h2>

         <ul>
         <li>This parameter specifies the mass tolerance around each precursor m/z
         that would be removed when the <a href="remove_precursor_peak.php">remove_precursor_peak</a>
         option is invoked.
         <li>The mass tolerance units is in Da (or Th if you prefer).
         <li>Any non-negative, non-zero floating point number is valid.
         </ul>

        <p>Example:
         <br><tt>remove_precursor_tolerance = 0.75</tt>
         <br><tt>remove_precursor_tolerance = 1.5</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: sample_enzyme_number</h2>

         <ul>
         <li>This parameter is relevant only for pepXML output i.e. when
         <a href="output_pepxmlfile.php">output_pepxmlfile</a> is set to 1.
         <li>The pepXML format encodes the enzyme that is applied to the sample
         i.e. trypsin.  This enzyme is written to the "sample_enzyme" element.
         <li>The sample enzyme could be different from the search enzyme i.e.
         the sample enzyme is "trypsin" yet the search enzyme is "No-enzyme"
         for a non-specific search.  Hence the need for this separate parameter.
         <li>Valid values are any integer represented in the enzyme list.
         </ul>

         <p>Example:
         <br><tt>sample_enzyme_number = 1</tt>
         <br><tt>sample_enzyme_number = 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: scan_range</h2>

         <ul>
         <li>Defines the scan range to search.  Only spectra within (and inclusive) of the specified
         scan range are searched.
         <li>This parameter works only with mzXML and mzML inputs files.
         <li>Two digits are specified for this parameter.  The first digit is the start scan and the
         second digit is the end scan.
         <li>When the start scan is set to 0, this parameter setting is ignored irrespective of what
         the end scan is set to.
         <li>When the end scan is less than the start scan, this parameter setting is ignored.
         </ul>

         <p>Example:
         <br><tt>scan_range = 0 0</tt> &nbsp; &nbsp; <i>search all scans</i>
         <br><tt>scan_range = 0 1000</tt> &nbsp; &nbsp; <i>search all scans (because first entry is 0)</i>
         <br><tt>scan_range = 1000 1500</tt> &nbsp; &nbsp; <i>search only scans 1000 to 1500</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: search_enzyme_number</h2>

         <ul>
         <li>The search enzyme is specified by this parameter.
         <li>The list of search enzymes is specified at the end of the comet.params file
         beginning with the line <tt>[COMET_ENZYME_INFO]</tt>.  The actual enzyme list and
         digestion parameters are read here.  So one can edit/add/delete enzyme definitions
         simply be changing the enzyme information.
         <li>This parameter works in conjection with the <a href="num_enzyme_termini.php">num_enzyme_termini</a>
         parameter to define the cleavage rule for fully-digested vs. semi-digested search options.
         <li>This parameter works in conjection with the <a href="allowed_missed_cleavage.php">allowed_missed_cleavage</a>
         parameter to define the miss cleavage rule.


         <p>Example:
         <br><tt>search_enzyme_number = 0</tt> &nbsp; &nbsp; <i>typically no-enzyme</i>
         <br><tt>search_enzyme_number = 1</tt> &nbsp; &nbsp; <i>typically trypsin</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: show_fragment_ions</h2>

         <ul>
         <li>This parameter affects .out files only i.e.
         <a href="output_outfiles.php">output_outfiles</a> set to 1.
         <li>This parameter controls whether or not the theoretical
         fragment ion masses for the top peptide hit are calculated
         and dislayed at the end of an .out file.
         <li>Valid values are 0 and 1.
         </ul>

         <p>Example:
         <br><tt>show_fragment_ions = 0</tt>
         <br><tt>show_fragment_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: skip_researching</h2>

         <ul>
         <li>This parameter is valid only when <a href="output_outfiles.php">output_outfiles</a> is set
         to 1 and each of
         <a href="output_pepxmlfile.php">output_pepxmlfile</a>,
         <a href="output_sqtfile.php">output_sqtfile</a>, and
         <a href="output_sqtstream.php">output_sqtstream</a>  are set to 0.
         <li>When .out files only are set to be exported, this parameter will look to see if
         an .out file already exists for each query spectrum.  If so, it will not re-search
         that particular spectrum.
         <li>Valid values are 0 and 1.
         </ul>

         <p>Example:
         <br><tt>skip_researching = 0</tt>
         <br><tt>skip_researching = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: theoretical_fragment_ions</h2>

         <ul>
         <li>This parameter specifies how theoretical fragment ion peaks are
         represented.
         <li>Even though Comet does not generate/store a theoretical spectrum,
         it does calculate fragment ion masses and this parameter controls how
         the acquired spectrum intensities at these theoretical mass locations
         contribute to the correlation score.
         <li>A value of 0 indicates that the fast correlation score will be
         a sum of the intensities at each theortical fragment mass bin and half
         the intensity of each flanking bin.
         <li>A value of 1 indicates that the fast correlation score will be
         the sum of the intensities at each theoretical fragment mass bin.
         <li>For extremely coarse <a href="fragment_bin_tol.php">fragment_bin_tol</a>
         values such as the historical ~1 Da bins, a theoretical_fragment_ions
         value of 1 is optimal.
         <li>But for narrower bins, such as ~0.3 for ion trap data or ~0.03 for
         high-res MS/MS spectra, a value of 0 is optimal to incorporate
         intensities from the flanking bins.
         <li>Allowed values are 0 or 1.
         </ul>

         <p>Example:
         <br><tt>theoretical_fragment_ions = 0</tt>
         <br><tt>theoretical_fragment_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_A_ions</h2>

         <ul>
         <li>Controls whether or not A-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use A-ions, set the value to 0.
         <li>To use A-ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_A_ions = 0</tt>
         <br><tt>use_A_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_B_ions</h2>

         <ul>
         <li>Controls whether or not B-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use B-ions, set the value to 0.
         <li>To use B-ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_B_ions = 0</tt>
         <br><tt>use_B_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_C_ions</h2>

         <ul>
         <li>Controls whether or not C-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use C-ions, set the value to 0.
         <li>To use C-ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_C_ions = 0</tt>
         <br><tt>use_C_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_NL_ions</h2>

         <ul>
         <li>Controls whether or not neutral loss ions (-NH3 and -H2O from b- and y-ions) are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use neutral loss ions, set the value to 0.
         <li>To use neutral loss ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_NL_ions = 0</tt>
         <br><tt>use_NL_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_X_ions</h2>

         <ul>
         <li>Controls whether or not X-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use X-ions, set the value to 0.
         <li>To use X-ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_X_ions = 0</tt>
         <br><tt>use_X_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_Y_ions</h2>

         <ul>
         <li>Controls whether or not Y-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use Y-ions, set the value to 0.
         <li>To use Y-ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_Y_ions = 0</tt>
         <br><tt>use_Y_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: use_Z_ions</h2>

         <ul>
         <li>Controls whether or not Z-dot ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use Z-dot ions, set the value to 0.
         <li>To use Z-dot ions, set the value to 1.
         </ul>

         <p>Example:
         <br><tt>use_Z_ions = 0</tt>
         <br><tt>use_Z_ions = 1</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_C_terminus_distance</h2>

         <ul>
         <li>This parameter affects how the <a href="variable_C_terminus.php">variable_C_terminus</a>
             parameter is applied.
         <li>The variable modification on the c-terminus can be applied to
            <ul>
            <li>all peptides analyzed by entering a value of -1
            <li>only peptides containing the protein's c-terminus by entering a value of 0
            <li>any positive interger <i>N</i> will have the program consider modifications on
                the c-terminus and next <i>N</i> residues (effectively N+1 residues).
            </ul>
         </ul>

         <p>Example:
         <br><tt>variable_C_terminus_distance = -1</tt> &nbsp; <i>Applied to all peptides</i>
         <br><tt>variable_C_terminus_distance = 0</tt>  &nbsp; &nbsp; <i>Applied only to peptides containing protein's c-terminus</i>
         <br><tt>variable_C_terminus_distance = 3</tt>  &nbsp; &nbsp; <i>Applied on any peptide who's c-terminus is one of last 4 residues (c-term &amp; next 3)</i>
         <br><tt>variable_C_terminus_distance = 20</tt> &nbsp; <i>Applied on any peptide who's c-terminus is one of last 21 residues (c-term &amp; next 20)</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_C_terminus</h2>

         <ul>
         <li>Specify a variable modification to peptide's c-terminus.
         <li>Works in conjunction with <a href="variable_C_terminus_distance.php">variable_C_terminus_distance</a>
             to specify scope of which peptides this parameter is applied to.
         </ul>

         <p>Example:
         <br><tt>variable_C_terminus = 14.0</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod1</h2>

         <ul>
         <li>This parameter specifies the 1st of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '*' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod1 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod1 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod2</h2>

         <ul>
         <li>This parameter specifies the 2nd of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter.
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '#' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod2 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod2 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod3</h2>

         <ul>
         <li>This parameter specifies the 3rd of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter.
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '@' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod3 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod3 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod4</h2>

         <ul>
         <li>This parameter specifies the 4th of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter.
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '^' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod4 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod4 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod5</h2>

         <ul>
         <li>This parameter specifies the 5th of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter.
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '~' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod5 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod5 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_mod6</h2>

         <ul>
         <li>This parameter specifies the 6th of 6 variable modifications.
         <li>There are 4 entries that are associated with this parameter.
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>A variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            </ul>
         <li>In the output, this first modification is encoded with the character '$' in the peptide string.
         </ul>

         <p>Example:
         <br><tt>variable_mod6 = 15.9949 M 0 3</tt>
         <br><tt>variable_mod6 = 79.966331 STY 0 3</tt>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_N_terminus_distance</h2>

         <ul>
         <li>This parameter affects how the <a href="variable_N_terminus.php">variable_N_terminus</a>
             parameter is applied.
         <li>The variable modification on the n-terminus can be applied to
            <ul>
            <li>all peptides analyzed by entering a value of -1
            <li>only peptides containing the protein's n-terminus by entering a value of 0
            <li>any positive integer <i>N</i> will have the program consider modifications on the n-terminus and the next <i>N</i> residues
                (effectively the first N+1 residues).
            </ul>
         </ul>

         <p>Example:
         <br><tt>variable_N_terminus_distance = -1</tt> &nbsp; <i>Applied to all peptides</i>
         <br><tt>variable_N_terminus_distance = 0</tt>  &nbsp; &nbsp; <i>Applied only to peptides containing protein's n-terminus</i>
         <br><tt>variable_N_terminus_distance = 1</tt>  &nbsp; &nbsp; <i>Applied on any peptide who's n-terminus is one of first 2 residues (n-term &amp; next 1)</i>
         <br><tt>variable_N_terminus_distance = 12</tt> &nbsp; <i>Applied on any peptide who's n-terminus is one of first 13 residues (n-term &amp; next 12)</i>

      </div>
      <div class="post hr">

         <h2>Comet parameter: variable_N_terminus</h2>

         <ul>
         <li>Specify a variable modification to peptide's n-terminus.
         <li>Works in conjunction with <a href="variable_N_terminus_distance.php">variable_N_terminus_distance</a>
             to specify scope of which peptides this parameter is applied to.
         </ul>

         <p>Example:
         <br><tt>variable_N_terminus = 14.0</tt>

      </div>
   </div>
   <div style="clear: both;">&nbsp;</div>
</div>

<?php include "footer.php" ; ?>
</html>
