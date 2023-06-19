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
    header("Location: index.php");
}

function addUser()
{
    require "./view/userAddForm.php";
}

function showSignInForm()
{
    require "./view/signInForm.php";
}

function insertNewProject($user_id, $gif, $title, $description, $tags, $languages)
{
    $userManager = new UserManager();
    $userManager->insertNewProject($user_id, $gif, $title, $description, $tags, $languages);
}
function logOut()
{
    // session_start();
    session_destroy();
    require "./view/signInForm.php";
}

function logIn($username, $password)
{
    $userManager = new UserManager();
    $result = $userManager->logIn($username, $password);

    if ($result->username === $username && password_verify($password, $result->password)) {

        $_SESSION['username'] = $result->username;
        // $_SESSION['password'] = $result[1];
        $_SESSION['user_id'] = $result->id;

        require "./view/userPage.php";
    }
}
