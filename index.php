//Build a calculator do do addition and division of two integers 
<html>
<body>
<!--Your code goes here-->

//forms
<h3> Addition</h3>
//be able to share our calculations with friends via URL, let’s use GET as the form method.
<form action="addition.php" method="get">
  First Number: <input type="number" name="add_first">
  <br>
  Second Number: <input type="number" name="add_sec">
  <br>
  <button type="submit">Add</button>
</form>
<h3> Division</h3>
<form action="division.php" method="get">
  Numerator: <input type="number" name="div_nume">
  <br>
  Donaminator: <input type="number" name="div_deno">
  <br>
  <button type="submit">Divide</button>
</form>
<a href="index.php">Reset</a>
</body>
</html>