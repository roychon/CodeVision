<?php
$title = "SIGN UP";
ob_start();
?>

<h1>SIGN UP</h1>

<form action="index.php?action=add_user" method="POST">
    <p>
        <input type="text" name="user_name" placeholder="Username...">
    </p>
    <p>
        <span id="username-not-valid">Not valid Username</span>
        <span id="username-missing">Username is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="email" name="email" placeholder="E-mail...">
    </p>
    <p>
        <span id="email-not-valid">Not valid E-mail</span>
        <span id="email-missing">E-mail is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="password" name="password" placeholder="Password...">
    </p>
    <p>
        <span id="password-not-valid">Not valid Password</span>
        <span id="password-missing">Password is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="password" name="password_confirm" placeholder="Confirm password...">
    </p>
    <p>
        <span>Does not match with Password</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="submit" value="Sumbit form">
    </p>

</form>

<?php
$content = ob_get_clean();
require "template.php";
?>