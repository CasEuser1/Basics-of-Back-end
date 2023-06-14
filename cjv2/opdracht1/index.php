<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
</form>
<?php
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST['name']);
  if (empty($name)) {
    $nameErr = "Name is required";
  } else {
    echo $name;
  }
}
?>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST['email']);
    if (empty($email)) {
      $emailErr = "Email is required";
    } else {
      echo $email;
    }
  }
  ?>
</body>
</html>