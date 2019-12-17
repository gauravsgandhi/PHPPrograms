<?php

echo $a=5;
echo "<br/>";
echo $b=6;

list($a,$b)=array($b,$a);
echo "<br/>";
echo "After swaping two no";
echo "<br/>";
echo $a;
echo "<br/>";
echo $b;



?>