<?php
require_once "./model/UserManager.php";

function showIndex()
{
    require "./view/indexView.php";
}


// CREATING A NEW USER
function createUser($username, $email, $password)
{
    $userManager = new UserManager();
    $userManager->addUser($username, $email, $password);
    $message = urlencode("User created successfully. Please log in.");
    header("Location: index.php?action=signInForm&error=false&message=$message");
}

function addUser()
{
    require "./view/userAddForm.php";
}

function showSignInForm()
{
    require "./view/signInForm.php";
}

function logOut()
{
    session_start();
    session_destroy();
    require "./view/signInForm.php";
}

function logIn($username, $password)
{
    $userManager = new UserManager();
    $result = $userManager->logIn($username, $password);

    if ($result[0] === $username && password_verify($password, $result[1])) {

        $_SESSION['username'] = $result[0];
        $_SESSION['password'] = $result[1];

        // require "./view/userPage.php";
        $message = urlencode("You have succesfully logged in!");
        header("Location: index.php?action=showUserPage&error=false&message=$message");
    } else {
        $message = urlencode("You have failed to login. Please try again");
        header("Location: index.php?action=signInForm&error=true&message=$message");
    }
}

function showUserPage()
{
    require "./view/indexView.php";
}
