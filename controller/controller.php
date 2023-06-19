<?php
require_once "./model/UserManager.php";

function showIndex()
{
    require "./view/indexView.php";
}

function addProject()
{
    require "./view/addProjectForm.php";
}

// CREATING A NEW USER
function createUser($username, $email, $password)
{
    $userManager = new UserManager();
    $userManager->addUser($username, $email, $password);
    $message = urlencode("User created successfully. Please log in.");
    header("Location: index.php?action=showSignInForm&error=false&message=$message");
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

        require "./view/userPage.php";
    }
}
