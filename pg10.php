<!DOCTYPE html>
<html>
<body><h2>
<form method="post"><center>
enter the string:<input type="text" name="string" placeholder="enter the string">
<input type="text" name="name" placeholder="enter name"><br>
<input type="submit" name="submit" value="submit"><br>
<ul>cases<br>
To reverse a string type -rev<br>
 To find length of a string type -len<br>
To perform substring of a string type -substring<br>
To convert a string into lowercase  type -tolower<br>
To convert a string into uppercase  type -toupper<br>
To count the number of words in a string type -count<br></ul>
</center></form></h2>
<?php
if(isset($_POST['submit'])){
$a=$_POST['string'];
$x=$_POST['name'];
echo "entered string  is $a <br>";
switch($x){
case  "rev":
$txt=strrev($a);
echo "reverse of $a is ";
echo $txt ;
break;
case  "len":
$txt=strlen($a);
echo "length of the given string  $a is ";
echo $txt ;
break;
case  "substring":
$txt=substr($a,3);
echo "length of the given string  $a is ";
echo $txt ;
break;
case  "tolower":
$txt=strtolower($a);
echo "string  $a is ";
echo $txt ;
break;
case  "toupper":
$txt=strtoupper($a);
echo " string  $a is ";
echo $txt ;
break;
case  "count":
$txt=str_word_count($a);
echo "string  $a is ";
echo $txt ;
break;}}
?>
<center><a href="index.html">back</a></center>
</body>
</html>
