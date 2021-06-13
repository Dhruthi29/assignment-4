<!DOCTYPE html>
<html>
<body>
<h1 style="background-color:yellow">E-MART online shopping</h1>
<form method="post" action="pg12.1.php">
<h3 style="color:red; background-color:black">please select your item:</h3>
<h2 style="text-align:right"><a href="index.html">back</a></h2>
<h2><select name="opt">items
<option value="pen">pen</option>
<option value="eraser">eraser</option>
<option value="scale">scale</option>
<option value="pencil">pencil</option>
<option value="book">book</option></select></h2>
<table border="2"><tr><td>discription</td><td>values</td></tr>
<tr><td>sl.no</td><td><input type="number" name="no" required></td</tr>
<tr><td>item name</td><td><input type="text" name="name" required></td></tr>
<tr><td>item price</td><td><input type="number" name="price" required></td></tr>
<tr><td>item code</td><td><input type="number" name="code" required></td></tr>
<tr><td>purchase date</td><td><input type="date" name="date" required></td></tr>
<tr><td>quantity</td><td><input type="number" name="qty" required></td></tr>
<input type="submit" name="submit" value="bill"></form>
<?php
?>
</body>
</html>