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
///////////////////
//////////////////
echo "<br>";
$Aberon=-5;
$vape=abs($Aberon);
echo $vape;
echo "<br>";
$val=2.3433443;
$foo=round($val);
echo $foo;
echo "<br>";
$AberonthesameGod=5.7;
$Aberon=ceil($AberonthesameGod);
echo $Aberon;
echo "<br>";
$Aberon=5.5;
$AberonthesameGod=floor($Aberon);
echo $AberonthesameGod;
echo "<br>";
?>
