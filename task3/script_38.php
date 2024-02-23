<?php
$array=array("abc",56,"pqr",89.89);
print_r($array);
print_r(array_shift($array));
echo "<br>";
echo "<br>";
print_r(array_unshift($array,"yellow"));
print_r($array);
?>