<?php

$title = "Edit a user";
ob_start();
?>

<h1>Edit a user Form</h1>

<form action="index.php?action=submitEditedUser" method="POST" id="editForm">
    <?php $username = $_SESSION['username'] ?? "";
    $email = $_SESSION['email'] ?? "";
    $id = $_SESSION['id'] ?? "";
    if ($id and $username and $email) {
    ?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <p>
            <label for="firstName">First Name: </label>
            <input type="text" name="firstName" id="firstName">
        </p>
        <p>
            <span id="firstNameNotValid">Not valid First Name</span>
            <span id="firstNameMissing">First Name is missing</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="lastName">Last Name: </label>
            <input type="text" name="lastName" id="lastName">
        </p>
        <p>
            <span id="lastNameNotValid">Not valid Last Name</span>
            <span id="lastNameMissing">Last Name is missing</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" id="usernameEdit" value="<?= $username ?>">
        </p>
        <p>
            <span id="usernameNotValid">Not valid Username</span>
            <span id="usernameMissing">Username is missing</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="emailEdit" value="<?= $email ?>">
        </p>
        <p>
            <span id="emailNotValid">Not valid E-mail</span>
            <span id="emailMissing">E-mail is missing</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="text" name="password" id="passwordEdit">
        </p>
        <p>
            <span id="passwordNotValid">Not valid Password</span>
            <span id="passwordMissing">Password is missing</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="profileImage">Profile Image: </label>
            <input type="text" name="profileImage" id="profileImage">
        </p>
        <p>
            <label for="bio">BIO: </label>
            <input type="text" name="bio" id="bio">
        </p>
        <p>
            <label for="linkedIn">LinkedIn: </label>
            <input type="text" name="linkedIn" id="linkedIn">
        </p>
        <p>
            <label for="gitHub">GitHub: </label>
            <input type="text" name="gitHub" id="gitHub">
        </p>
        <p>
            <input type="submit" value="Submit the changes" id="editSubmit">
        </p>
    <?php
    }
    ?>

</form>
<?php
$content = ob_get_clean();
require "template.php";
?>