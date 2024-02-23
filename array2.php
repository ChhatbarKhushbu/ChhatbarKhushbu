<?php
#associative array
$st=array("name"=>"khushbu","rollno"=>13,"class"=>"b1","course"=>"bca","regno"=>15612422121,"enrolno"=>220801059,"mobno"=>7778087604,
"sub"=>"php","city"=>"gondal","department"=>"IT");
foreach($st as $val)
{
print_r($val);
echo "<br>";
}
echo "<br>";
echo ($st["city"]);

?>