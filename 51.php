<?php

$a=array('hello','world','india');

for($x=0;$x<count($a);$x++)
{
if($a[$x=="world"]){
continue;
echo $a[$x];
echo "<br/>";
}
}


?>