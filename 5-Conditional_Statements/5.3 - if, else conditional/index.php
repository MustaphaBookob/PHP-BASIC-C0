<?php

$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}
else {
    echo "ongelijk";
}

if($test1 != $test2) {
    echo "ongelijk";
}
else {
    echo "gelijk";
}

echo "<br>";


if($test1 === $test2) {
    echo "identiek";
}
else {
    echo "niet identiek";
}
 
echo  "<br>";

if($test1 > $test2) {
    echo "test1 is groter dan test2";
}
else {
    echo "test1 is kleiner dan test2";
}

echo "<br>";

if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
}
else {
    echo "test1 is groter dan test2";
}

echo "<br>";

if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
}
else { 
    echo "test1 is kleiner of gelijk aan test2";
}

echo "<br>";

if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}
else { 
    echo "test1 is groter of gelijk aan test2";
}

?>