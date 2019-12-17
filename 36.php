<?php
function familyName($fname) {
    echo "$fname<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>


<?php
function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");
?>
