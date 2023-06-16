<?php
// require_once "./model/ArticleManager.php";

function showIndex()
{
    require "./view/indexView.php";
}


// CREATING A NEW USER
function createUser($username, $email, $password)
{
    $userManager = new SubManager();
    $userManager->addUser($username, $email, $password);
    header("Location: index.php");
}
