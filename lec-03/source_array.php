<?php
$scores = [];
$scores[0] = 81;
$scores[1] = 79;
$scores[2] = 78;
$scores[3] = 74;
$scores[4] = 80;
$total = $scores[0];
$total += $scores[1];
$total += $scores[2];
$total += $scores[3];
$total += $scores[4];
$average = $total / count($scores);
echo "合計:{$total}点<br>";
echo "平均点:{$average}点<br>"
?>