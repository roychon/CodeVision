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

    if ($result->username === $username && password_verify($password, $result->password)) {

        $_SESSION['id'] = $result->id;
        $_SESSION['username'] = $result->username;
        $_SESSION['email'] = $result->email;
        $_SESSION['password'] = $result->password;
    }
    require "./view/userPage.php";
}
function editUser($username, $email, $password)
{
    require "./view/editUserForm.php";
}
// EDITING A USER INFO
function submitEditedUser(
    $id,
    $first_name,
    $last_name,
    $username,
    $email,
    $password,
    $profile_image,
    $bio,
    $linked_in,
    $git_hub
) {
    $userManager = new UserManager();
    $userManager->submitEditedUser(
        $id,
        $first_name,
        $last_name,
        $username,
        $email,
        $password,
        $profile_image,
        $bio,
        $linked_in,
        $git_hub
    );

    header("Location: index.php");
}


function deleteProject($project_id) {
    $userManager = new UserManager();
    $userManager->deleteProject($project_id);
    header("Location: index.php");
}