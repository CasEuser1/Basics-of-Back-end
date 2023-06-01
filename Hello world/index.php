<h1><?php echo htmlentities("Hello World!") ?></h1>

<?php
$nummer1 = rand();
$nummer2 = rand();

echo($nummer1 + $nummer2 );
echo "<br>";
echo($nummer1 - $nummer2);
echo "<br>";
echo($nummer1 * $nummer2);
echo "<br>";
echo($nummer1 / $nummer2);
echo "<br>";
?>

<?php
for ($x = 1; $x <= 10; $x++) {
    $i = ($x * 6);
  echo "$x * 6 = $i <br>";
}
?>