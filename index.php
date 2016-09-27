<?php
$Aberon=array(
"one"=>"1",
"two"=>"2",
"three"=>"3",
"foo"=>"4",
"five"=>"5",
);
$dno= array_flip( $Aberon);
print_r($dno);
echo "<br>";
$vape=array_keys($Aberon);
print_r($vape);
echo "<br>";
print_r(array_values ($Aberon));
echo "<br>";
$AberonthesameGod=array_count_values($Aberon);
print_r($AberonthesameGod);
echo "<br>";
print_r(array_slice($Aberon,3));
?>