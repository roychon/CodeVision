<?php

require "./controller/controller.php";
session_start();
try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
            // TODO: link add project btn to "index.php?action=add_project"
        case "add_project":
            addProject();
            break;

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
            echo "<pre>";
            print_r($_POST);
            $gif = $_POST['gif'] ?? "";
            $title = $_POST['title'] ?? "";
            $description = $_POST['description'] ?? "";
            $tags = $_POST['tags'] ?? "";
            $languages = $_POST['languages'] ?? "";
            $user_id = $_SESSION['user_id'] ?? "";

            if ($user_id and $gif and $title and $description and $tags and $languages) {
                insertNewProject($user_id, $gif, $title, $description, $tags, $languages);
            } else {
                throw new Exception("Missing required information.");
            }
            break;

        case "logOut":
            logOut();
            break;

        case "logIn":
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            if ($username and $password) {
                logIn($username, $password);
            }
            break;

        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
