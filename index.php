<?php
$arr = [
    array(1, 2, 3),
    array(3, 11, 5),
    array(6, 8, 9)
];
$index1 = 0;
$index2 = 0;
$max = $arr[0][0];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
            $index1 = $i;
            $index2 = $j;
        }
    }
}
echo("Max: " . $max . " Row: " . $index1 . " Collum: " . $index2);