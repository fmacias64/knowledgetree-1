<?php

require_once("../../../config/dmsDefaults.php");
require_once(KT_LIB_DIR . "/util/ktutil.inc");

$aSource = array(
);

$aResults = KTUtil::whereToString($aSource);

$aExpectedResults = null;

if ($aResults === $aExpectedResults) {
    print "Success!\n";
} else {
    print "Failure!\n";
    print "Received: " . print_r($aResults, true) . "\n";
    print "Expected: " . print_r($aExpectedResults, true) . "\n";
}

?>
