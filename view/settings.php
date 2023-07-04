<?php

$title = "Edit a user";
ob_start();
?>
<link href="./public/css/formInput.css" rel="stylesheet" />

<div id="settings-form">
    <form action="index.php?action=submitPersonalInfo" method="POST" id="settingsForm">
        <a href="index.php?action=userProfileView&id=<?= $_SESSION['id'] ?>">⬅ Go back</a>
        <p id="edit-user-title">Edit Account Settings</p>
        <input type="hidden" name="id" value="<?= $userinfo->id ?>">
        <p>
            <label for="firstName">First Name: </label>
            <input type="text" name="firstName" id="firstName" value="<?= htmlspecialchars($userinfo->first_name ?? "") ?>">
        </p>
        <p>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="lastName">Last Name: </label>
            <input type="text" name="lastName" id="lastName" value="<?= htmlspecialchars($userinfo->last_name ?? "") ?>">
        </p>
        <p>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" id="usernameEdit" value="<?= htmlspecialchars($userinfo->username ?? "") ?>">
        </p>
        <p>
            <span id="usernameEditMissing">Username cannot be empty</span>
            <span>&#8203;</span>
        </p>
        <p>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="emailEdit" value="<?= htmlspecialchars($userinfo->email ?? "") ?>">
        </p>
        <p>
            <span>&#8203;</span>
        </p>
        <p>
            <input type="submit" value="Submit Changes" id="editSubmit">
        </p>
    </form>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>