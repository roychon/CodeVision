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
                // throw new Exception("Couldn't create your account, missing required information.");
                // TODO: NEEDS TO GO BACK TO SIGN UP PAGE WITH ERROR MESSAGE
                $message = urlencode("Sign up failed");
                header("Location: index.php?action=signInForm&error=true&message=$message");
            }
            break;

        case "signInForm":
            showSignInForm();
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

            // FOR LOGGED IN USERS -- so that it doesn't take them to new page
        case "showUserPage":
            showUserPage();
            break;

        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
