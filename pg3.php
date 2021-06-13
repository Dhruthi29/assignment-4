<!DOCTYPE html>
<html>
<head>
<title>
example
</title></head>
<body>
<form method="post">
enter a number:<input type="text" name="num">
<button type="submit">check</button>
</form>
<?php
if($_POST)
{
$num=$_POST['num'];
$x=$num;
echo "number is";
echo $x;
$y=strrev($x);
echo "<br>";
echo "reversed number is   ";
echo $y;
echo "<br>";
$sum=0;
$rem=0;
$rev=0;
while($num>1){
$rem=$num%10;
$sum+=$rem;
$num=(int)$num/10;
}
echo "<br>";
echo "sum is    $sum";
echo "<br>";
if($x==$y){
echo "number is palindrome";
}
else{
echo "number is not palindrome";
}
}

?>
<center><a href="index.html">back</a></center>
</body>
</html>