<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="name">Name:</label>
  <input type="text" name="name" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br>

  <input type="submit" value="submit">
</form>