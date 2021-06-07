<?php
$scores = [];
$scores[] = 81;
$scores[] = 79;
$scores[] = 78;
$scores[] = 74;
$scores[] = 80;
if ($scores[2] >= 80){
    echo "たいへんよくできました";
}elseif ($scores[2] >= 60){
    echo "よくできました";
}else{
    echo "がんばりましょう";
}
?>