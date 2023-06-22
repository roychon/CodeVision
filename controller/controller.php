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

//TODO: CHECK PASSING PARAMATER??
function showUserProfile($user_id)
{
    if (isset($_SESSION['id'])) {
        // print_r($_SESSION['id']);
        $userManager = new UserManager();
        $projectManager = new ProjectManager();

        $projects = $projectManager->getUserProjects($user_id);
        // TODO: pass in the id/user not post
        if (count($projects)) {
            // user has project(s)
            $arr = ($userManager->getUserInfoProjects($user_id));
            $profiles = $arr[array_key_first($arr)];
        } else { 
            // user has no projects
            $profiles = $userManager->getUserInfo($user_id);
        }
        require "./view/userProfileView.php";
    } else {
        require "./view/signInForm.php";
    }
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

function insertNewProject($user_id, $gif, $title, $description, $tags, $languages)
{
    $userManager = new UserManager();
    $userManager->insertNewProject($user_id, $gif, $title, $description, $tags, $languages);
    header("Location: index.php");
}
function logOut()
{
    // session_start();
    session_destroy();
    // require "./view/signInForm.php";
    header("Location: index.php");
}

function logIn($username, $password)
{
    $userManager = new UserManager();
    $result = $userManager->logIn($username, $password);

    

    if ($result->username === $username && password_verify($password, $result->password)) {

        $_SESSION['id'] = $result->id;
        $_SESSION['username'] = $result->username;
        $_SESSION['email'] = $result->email;
        $_SESSION['profile_img'] = $result->profile_img;
        $message = urlencode("You have succesfully logged in!");
        header("Location: index.php?action=showUserPage&error=false&message=$message");
        require "./view/indexView.php";
    } else {
        $message = urlencode("You have failed to login. Please try again");
        header("Location: index.php?action=signInForm&error=true&message=$message");
    }
}

function editUser($id, $username, $email)
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


function deleteProject($project_id)
{
    $userManager = new UserManager();
    $userManager->deleteProject($project_id);
    header("Location: index.php");
}


// user goes to update FORM and updates project with 'project_id'
function updateProjectForm($project_id)
{
    $userManager = new UserManager();

    $project = $userManager->getProject($project_id);
    $languages = $userManager->getProjectLanguages($project_id);
    $tags = $userManager->getProjectTags($project_id);

    $languageInputVal = join(",", $languages);

    $tagsInputVal = join(",", $tags);

    require "./view/updateProjectForm.php";
}


// insert project updates into database
function updateProject($gif, $description, $title, $tags, $languages, $project_id)
{

    $userManager = new UserManager();
    $userManager->updateProjectMain($gif, $description, $title, $project_id);
    $userManager->updateProjectTags($tags, $project_id);
    $userManager->updateProjectLanguages($languages, $project_id);

    header("Location: index.php");
}

function showUserPage()
{
    require "./view/indexView.php";
}
