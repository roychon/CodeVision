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

function insertNewProject($gif, $title, $description, $tags, $languages)
{
    $userManager = new UserManager();
    $userManager->insertNewProject($gif, $title, $description, $tags, $languages);
}
