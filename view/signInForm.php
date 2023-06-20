<?php
$title = "SIGN IN";
ob_start();

?>
<link rel="stylesheet" href="./public/css/formInput.css">
<h1>Log in to "SITE NAME"</h1>

<!-- DIV CLASS GIVEN -->
<div class="login-form">
  <!-- FORM ID has been given an id of "login" -->
  <form action="index.php?action=logIn" method="POST" id="login">
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
</div>

<?php


$content = ob_get_clean();
require "template.php";
?>