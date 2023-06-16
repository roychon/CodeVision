<?php
$title = "SIGN IN";
ob_start();
?>
<link rel="stylesheet" href="./public/css/formInput.css">
<h1>Sign In Form</h1>

<form action="" method="POST">
  <p>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password">Password: </label>
    <input type="text" name="password" id="password">
  </p>
  <p>
    <input type="submit" value="submit" id="submit">
  </p>
  <p>
    <span>Username or Password Invalid</span>;
    <span></span>
  </p>

</form>
<script src="./public/js/signInValidation.js"></script>

<?php


$content = ob_get_clean();
require "template.php";
?>