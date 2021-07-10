--TEST--
Test if function aliases still exist.
--EXTENSIONS--
oci8
--FILE--
<?php
var_dump(function_exists('ocifreecursor'));
var_dump(function_exists('ocibindbyname'));
var_dump(function_exists('ocidefinebyname'));
var_dump(function_exists('ocicolumnisnull'));
var_dump(function_exists('ocicolumnname'));
var_dump(function_exists('ocicolumnsize'));
var_dump(function_exists('ocicolumnscale'));
var_dump(function_exists('ocicolumnprecision'));
var_dump(function_exists('ocicolumntype'));
var_dump(function_exists('ocicolumntyperaw'));
var_dump(function_exists('ociexecute'));
var_dump(function_exists('ocicancel'));
var_dump(function_exists('ocifetch'));
var_dump(function_exists('ocifetchstatement'));
var_dump(function_exists('ocifreestatement'));
var_dump(function_exists('ocinumcols'));
var_dump(function_exists('ociparse'));
var_dump(function_exists('ocinewcursor'));
var_dump(function_exists('ociresult'));
var_dump(function_exists('ociserverversion'));
var_dump(function_exists('ocistatementtype'));
var_dump(function_exists('ocirowcount'));
var_dump(function_exists('ocilogoff'));
var_dump(function_exists('ocilogon'));
var_dump(function_exists('ocinlogon'));
var_dump(function_exists('ociplogon'));
var_dump(function_exists('ocierror'));
var_dump(function_exists('ocifreedesc'));
var_dump(function_exists('ocisavelob'));
var_dump(function_exists('ocisavelobfile'));
var_dump(function_exists('ociwritelobtofile'));
var_dump(function_exists('ociloadlob'));
var_dump(function_exists('ocicommit'));
var_dump(function_exists('ocirollback'));
var_dump(function_exists('ocinewdescriptor'));
var_dump(function_exists('ocisetprefetch'));
var_dump(function_exists('ocipasswordchange'));
var_dump(function_exists('ocifreecollection'));
var_dump(function_exists('ocinewcollection'));
var_dump(function_exists('ocicollappend'));
var_dump(function_exists('ocicollgetelem'));
var_dump(function_exists('ocicollassignelem'));
var_dump(function_exists('ocicollsize'));
var_dump(function_exists('ocicollmax'));
var_dump(function_exists('ocicolltrim'));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
