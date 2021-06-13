<!DOCTYPE html>
<html>
<body>
<?php
if($_POST){
$x=$_POST['name'];
$y=$_POST['price'];
$z=$_POST['code'];
$u=$_POST['date'];
$i=$_POST['qty'];

$txt=$y*$i;
  echo '<body><table border="2" style="background-color:pink">
<tr><th>E-MART Online shoping Bill</th></tr>
            <tr>
                <th>Item Name</th><th>Item Price</th><th>quantity</th><th>date of purchase</th><th>total amount</th>
            </tr>';

echo"<tr>";
echo  " <td>$x</td><td>$y</td><td>$i</td><td>$u</td><td>$txt</td>";
echo "<tr>";
}
?>
<center><h2><a href="pg12.php">back</a></h2></center>
</body>
</html>