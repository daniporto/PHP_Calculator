<html>
<body>
<!--Your code goes here-->
<h2><?= "The Division of ${_GET['div_nume']} and ${_GET['div_deno']} is: " ?></h2>
<h3><?= $_GET["div_nume"] /
$_GET["div_deno"] ?></h3>

<a href="index.php">Reset</a>
</body>
</html>