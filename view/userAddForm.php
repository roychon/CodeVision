<?php
$title = "SIGN UP";
ob_start();

if (isset($_GET['error'])) {
    include './view/component/statusPopUp.php';
};

?>

<!-- FOR SIGN IN WITH GOOGLE -->
<script src="https://accounts.google.com/gsi/client" async defer></script>
<!-- ======================== -->

<h1>SIGN UP</h1>

<form action="index.php?action=createUser" method="POST" id="form">
    <p>
        <input type="text" name="username" placeholder="Username..." id="username">
    </p>
    <p>
        <span id="usernameNotValid">Not valid Username</span>
        <span id="usernameMissing">Username is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="email" name="email" placeholder="E-mail..." id="email">
    </p>
    <p>
        <span id="emailNotValid">Not valid E-mail</span>
        <span id="emailMissing">E-mail is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="text" name="password" placeholder="Password..." id="password">
    </p>
    <p>
        <span id="passwordNotValid">Not valid Password</span>
        <span id="passwordMissing">Password is missing</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="text" name="password_confirm" placeholder="Confirm password..." id="passwordConfirm">
    </p>
    <p>
        <span id="passwordConfirmError">Password does not match</span>
        <span>&#8203;</span>
    </p>
    <p>
        <input type="submit" value="Submit form">
    </p>

    <!-- GOOGLE BUTTON -->
    <div id="g_id_onload" data-client_id="<?= getenv("GOOGLE_CLIENT_ID") ?>" data-context="signin" data-ux_mode="popup" data-login_uri="http://localhost/sites/batch20-final-project/index.php?action=googleLogIn" data-auto_prompt="false">
    </div>

    <div class="g_id_signin" data-type="standard" data-shape="pill" data-theme="outline" data-text="signin_with" data-size="large" data-logo_alignment="left">
    </div>

</form>


<?php
$content = ob_get_clean();
require "template.php";
?>