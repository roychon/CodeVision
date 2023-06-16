<?php
// require_once "./model/ArticleManager.php";

function showIndex()
{
    require "./view/indexView.php";
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
