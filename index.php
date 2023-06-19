<?php

require "./controller/controller.php";

try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
        case "add_user":
            addUser();
            break;


            // CREATING A NEW USER 
        case "createUser":
            $username = $_POST['username'] ?? "";
            $email = $_POST['email'] ?? "";
            $password = $_POST['password'] ?? "";
            $password_confirm = $_POST['password_confirm'] ?? "";
            // TODO: Check password confirm
            // 

            if ($username and $email and $password and $password_confirm and $password === $password_confirm) {
                createUser($username, $email, $password, $password_confirm);
            } else {
                throw new Exception("Couldn't create your account, missing required information.");
                // TODO: NEEDS TO GO BACK TO SIGN UP PAGE WITH ERROR MESSAGE
            }
            break;

        case "signInForm":
            showSignInForm();
            break;

        case "insertNewProject":
            $gif = $_POST['gif'] ?? "";
            $title = $_POST['title'] ?? "";
            $description = $_POST['description'] ?? "";
            $tags = $_POST['tags'] ?? "";
            $languages = $_POST['languages'] ?? "";

            if ($gif and $title and $description and $tags and $languages) {
                insertNewProject($gif, $title, $description, $tags, $languages);
            } else {
                throw new Exception("Missing required information.");
            }
            break;

        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
