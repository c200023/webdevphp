<?php
$language = 81;
$math = 79;
$english = 78;
$society = 74;
$sience = 80;
$total = $language;
$total += $math;
$total += $english;
$total += $society;
$total += $sience;
$average = $total / 5;
echo "合計:{$total}点<br>";
echo "平均点:{$average}点<br>";
?>