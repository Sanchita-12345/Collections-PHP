<?php
$x = array("ram" => 19, "sam" => 16, "mira" => 34);
print_r($x);//print the array
echo "<br>";

echo($x["ram"]) . "<br>";//get values

$x["ram"]=28; // modify an entry
$x["rima"]=25; // add an entry
print_r($x);//print the new array
echo "<br>";

unset($x["sam"]);//delete an entry
print_r($x);//print the new array
echo "<br>";

echo array_key_exists("mira",$x);//check if a key exist
echo "<br>";

print_r(array_keys($x)); //get just the keys
echo "<br>";

print_r(array_values($x))//get just the values







?>