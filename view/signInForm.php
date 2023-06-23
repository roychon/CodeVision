<?php
$title = "SIGN IN";
ob_start();

?>
<link rel="stylesheet" href="./public/css/formInput.css">


<!-- DIV CLASS GIVEN -->
<div class="login-form">
  <!-- FORM ID has been given an id of "login" -->
  <form action="index.php?action=logIn" method="POST" id="login">

    <p class="login-title"> Log in to "website"</p>


    <p>
      <label for="loginUsername">Username: </label>
      <!-- CREATED NEW USERNAME TO SEPERATE FROM SIGN UP USERNAME-->
      <input type="text" name="username" id="loginUsername">
      <!-- <input type="text" name="username" id="username"> -->
    </p>
    <p>
      <label for="loginPassword">Password: </label>
      <input type="text" name="password" id="loginPassword">
    </p>

    <a class="sign-assist" href="index.php?action=">Need help signing in?</a>



    <p>
      <input type="submit" value="submit" id="submit">
    </p>
    <!-- <p> -->
    <!-- <span>Username or Password Invalid</span>; -->
    <!-- <span></span> -->
    <!-- </p> -->
    <button class="sign-btn">
      <a href="index.php?action=add_user">Don't have an account? Sign up</a>
    </button>
  </form>
  <script src="./public/js/signInValidation.js"></script>


</div>

<?php

$content = ob_get_clean();
require "template.php";
?>