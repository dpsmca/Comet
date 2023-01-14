### Comet releases 2015.01

Documentation for parameters for release 2015.01 [can be found
here](http://comet-ms.sourceforge.net/parameters/parameters_201501/).
Download release [here](https://sourceforge.net/projects/comet-ms/files/).

#### release 2015.01 rev. 2 (2015.01.2), release date 2015/04/28
- Change decoy generation for E-value calculation when a small number of
candidate peptides are searched. The E-value histogram now includes 3000
decoys, up from hundreds. Decoys fragments are generated from actual peptides
vs. previously "rotating" fragment ions from the database candidates that were
scored. This should improve E-value calculation for high-res MS/MS searches.
- Modified how the xcorr histogram tail is defined for the E-value calculation.
- Remove low xcorr + low E-value exception. Previously, any peptide with a
xcorr less than 1.0 could not receive a low E-value.
- Fix protein c-terminal modification searches which were not functioning
properly.
- Fix cms2 file support which was broken in 2015.01.1.
- Add modification column to text output. The encoding includes position,
static or variable modification, and mass change for each modification in the
peptide. Requested by Noble lab.
- Fix terminal modification reporting in pep.xml header. Reported by D.
Hernandez.
- Update MSToolkit to address progress percentage that could go beyond 100%.
Reported by M. Askenazi.

#### release 2015.01 rev. 1 (2015.01.1), release date 2015/03/06
- Remove some error status checks, implemented for upcoming Windows GUI, that
were severely impacting search performance.
- For direct Thermo .raw file support, update how MSFile Reader library is
referenced. Thanks to C. Grant.
- Extend "override_charge" parameter. A value of "2" for this parameter will
have Comet ignore all charge states except for those specified in the
"precursor_charge" parameter range.
- Known bug: cms2 files not properly supported. Let me know if you need a
binary that supports this input file type.

#### release 2015.01 rev. 0 (2015.01.0), release date 2015/02/23
- A new the sparse matrix data format implementation ("use_sparse_matrix") to
improve performance. This provides memory savings with no negative impact on
search performance so it's recommended that this parameter should always be set
on. In the next release, this parameter option will likely go away and the
sparse matrix data representation will be on by default going forward.
Implemented by M. Hoopmann.
- For variable modifications, the optional distance constraint can now be
applied to N- and C-termini of peptides in addition to N- and C-termini of
proteins. This allows for proper specification of peptide terminal mods such as
N-terminal glutamine or glutamic acid to pyroglutamate.
- Also, an additional field is present in the variable modification parameters,
for example "variable_mod01" to allow the user to be able to force each
modification to be present in analyzed peptides.
- A new parameter "require_variable_mod" allows one to force analyzed peptides
to contain at least one variable modification. This is different than the field
described in the previous bullet point where any particular variable
modification can be forced to be present. So this new parameter will force the
peptide to be modified with any variable modification whereas the additional
field in the variable modification parameters would force that particular
variable modification) to be present.
- In the Percolator output ("output_percolatorfile"), the peptide will now use
modification characters to denote variable modifications instead of bracketed
masses. For example, "K.M*DLR.T" instead of "K.M[147.1]DLR.T". Implemented by
J. Egertson.
- When using "output_txtfile", Comet will now report up to "num_output_lines"
number of hits per spectrum query. Previously Comet would only report the top
hit for the text output. The text output modifications are now denoted by a
mass string (M[147.1]) instead of modification characters (M*). Note that Comet
compiled with the Crux flag turned on already had this behavior.
- The search progress reporting now goes from 0% to 100% across batches for the
entire search. Previously it reported search progress of 0% to 100% within each
batch which made it difficult to track overall search progress.
- When reporting the protein name for a peptide, Comet will now report the
protein accession for the first protein in the database that contains that
peptide. Previously, this was not guaranteed when multiple threads were used in
a search.
- In final output, results are sorted by xcorr and then peptide sequence.
Previously, results were only sorted by xcorr. With previous implementation,
searches that had two peptides with the same top xcorr scores could randomly
report either of the two peptides as the top hit. Now the alphabetical first
peptide will always be reported in this scenario (not that the alphabetical
first peptide is any better than the same scoring next peptide).
- Change deltaCn reporting. In previous pep.xml output, the deltaCn value was
set to 1.0 for a peptide if "num_output_lines = 1" as there is no second hit
peptide being reported. This behavior is changed to calculated the deltaCn
against the next best scoring peptide even though it is not being reported in
the output.
- Replaced a constant check in a while loop with a semaphore when checking
queue status for loading sequences to search. Before this change, some search
conditions would cause the CPU usage to be very low due to the contant while
loop check. Implemented by T. Jahan.
- Ability to now search Thermo .raw files directly in Windows. This requires
Thermo's freely available MSFileReader library to be installed. Implemented by
T. Jahan. Unfortunately you will need to copy the XRawfile2.dll or
XRawfile2_x64.dll to c:\Windows\MSFileReader.XRawfile2.dll for this to work.
Note this is no longer needed with release 2015.01 rev. 1.
- Change "scannr" to "ScanNr" in the column header line of Percolator output
("output_percolator").
- Update to MSToolkit version r76: mz5 support removed.
- Known bug: in some (relatively rate) instances of variable modification
searches, the number of duplicate proteins will not be correctly reported.
- Known issue: just ran performance tests (2/25/2015) and discovered that
releases after 2013.02 are slower and do not scale well with the thread count.
Looking into addressing this ASAP.