<?php
/*$myfile=fopen("b1_220801059.txt","r");
echo fgets($myfile);*/

/*$myfile=fopen("b1_220801059.txt","w");
$txt="this is my page";
fwrite($myfile,$txt);*/

/*$myfile=fopen("b1_220801059.txt","rw");
$txt="Weather it be Coke and Pepsi, Mac and Windows, or Nike and Adidas, for every successful brand in the world, there is always another equally popular one in existence whose presence divides the human race. This seemingly natural rise of rivalry has found its place in the vast world of music, in particular, the electric guitar. Behold Fender and Gibson. Two brands that have blown the competition out of the water for more than half a century and become something much more than just a brand. Unlike other corporations, these two guitars have earned the respect and praise of the public; their dual monopoly is seen not as a negative, but as an opportunity to provide the world with cheap, yet powerful and beautiful instruments.";
fwrite($myfile,$txt);
echo fgets($myfile);
fclose($myfile);*/

/*$myfile=fopen("b1_220801059.txt","a");
if(file_exists("b1_220801059.txt"))
{
	echo "the file exists";
}
else{
	echo "the file doesn't exist";
}
$txt="Weather it be Coke and Pepsi, Mac and Windows, or Nike and Adidas, for every successful brand in the world, there is always another equally popular one in existence whose presence divides the human race. This seemingly natural rise of rivalry has found its place in the vast world of music, in particular, the electric guitar. Behold Fender and Gibson. Two brands that have blown the competition out of the water for more than half a century and become something much more than just a brand. Unlike other corporations, these two guitars have earned the respect and praise of the public; their dual monopoly is seen not as a negative, but as an opportunity to provide the world with cheap, yet powerful and beautiful instruments.";
fwrite($myfile,$txt);
echo fgets($myfile);
fclose($myfile);*/

$myfile=fopen("b1_220801059.txt","a");
if(unlink("b1_220801059.txt"))
{
	echo "file deleted";
}
else{
	echo "unable to delete file";
}
fclose($myfile);
?>