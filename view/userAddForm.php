<?php
$title = "SIGN UP";
ob_start();
?>

<h1>SIGN UP</h1>

<form action="index.php?action=add_user" method="POST">
    <p>
        <input type="text" name="user_name" placeholder="User Name...">
    </p>
    <p>
        <span>Not valid User Name</span>
    </p>
    <p>
        <input type="email" name="email" placeholder="E-mail...">
    </p>
    <p>
        <span>Not valid E-mail</span>
    </p>
    <p>
        <input type="password" name="password" placeholder="Password...">
    </p>
    <p>
        <span>Not valid Password</span>
    </p>
    <p>
        <input type="password" name="password_confirm" placeholder="Confirm password...">
    </p>
    <p>
        <span>Does not match with Password</span>
    </p>
    <p>
        <input type="submit" value="Sumbit form">
    </p>

</form>

<?php
$content = ob_get_clean();
require "template.php";
?>