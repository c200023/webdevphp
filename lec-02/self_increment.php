<?php
//前置加算演算子を実行する
$a = 1;
$b = ++$a;
print "前置加算演算子<br>";
print "a = {$a}<br>";    //a=2
print "b = {$b}<br>";    //b=2
//後置加算演算子を実行する
$a = 1;
$b = $a++;
print "後置加算演算子<br>";
print "a = {$a}<br>";    //a=2
print "b = {$b}<br>";    //b=1
?>