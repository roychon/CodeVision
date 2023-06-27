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
        $userInfo = $userManager->getUserInfo($user_id);

        $userLanguages = $userManager->getUserLanguages($user_id);


        require "./view/userProfileView.php";
    } else {
        require "./view/signInForm.php";
    }
}

// CREATING A NEW USER
function createUser($username, $email, $password)
{
    $userManager = new UserManager();
    // select count of username + password
    //    -> if both counts == 0 -> we can add user
    //    -> else there is duplicate, show pop up error

    $userCount = $userManager->userExists($username)->count;

    $emailCount = $userManager->emailExists($email)->count;

    if ($userCount == 0 and $emailCount == 0) { // Both unique
        // echo "unique";
        $userManager->addUser($username, $email, $password);
        $message = urlencode("User created successfully. Please log in.");
        header("Location: index.php?action=signInForm&error=false&message=$message");
    } else { // already in db
        // echo "not unique";
        $message = urlencode("Username or email already exists");
        header("Location: index.php?action=add_user&error=true&message=$message");
    }
}

function addUser()
{
    require "./view/userAddForm.php";
}

function showSignInForm()
{
    require "./view/signInForm.php";
}

function insertNewProject($user_id, $video_source, $title, $description, $tags, $languages)
{
    $userManager = new UserManager();

    //UPLOADING VIDEO
    // UPLOAD TO: $target_dir . $hashed_filename . $extension
    // WHEN INSERTING INTO DB: $hashed_filename . $extension

    $maxsize = 5242880; // max size is 30s video: 5MB in bytes
    //if the video input section exists and it's not blank
    //TODO: CHECK THE IN_ARRAY 
    $extensions = array("mp4");
    if (
        isset($_FILES['video']['name']) and ($_FILES['video']['name'] != "")
        and in_array("mp4", $extensions)
    ) {

        $name = $_FILES['video']['name'];

        // print_r($_FILES);
        //$target_dir specifies the directory
        $target_dir = "./public/uploaded_videos/";

        //saves unique name for each uploaded file
        $hashed_filename = hash_file('md5', $_FILES['video']['tmp_name']);

        //pathinfo() gives info about the path extenstions
        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        //$target_file specifies the path of the file to be uploaded
        $target_file = $target_dir . $hashed_filename . "." . $extension; //hash the file name here

        //saving the info to store in DB
        $video_source = $hashed_filename . "." . $extension;

        //check the uploaded file
        if (($_FILES['video']['size'] > $maxsize) or ($_FILES['video']['size'] == 0)) {
            $message = urlencode("Your file is too big. Please upload a file smaller than 5 MB.");
            header("Location: index.php?action=insertNewProject&error=true&message=$message");
        } else if
        //move_uploaded_file paramaters are the file name of the uploaded file to
        //the destination it needs to be moved
        (move_uploaded_file($_FILES['video']['tmp_name'], $target_file)) {
            $userManager->insertNewProject($user_id, $video_source, $title, $description, $tags, $languages);
        } else {
            $message = urlencode("Failed to upload video file.");
            header("Location: index.php?action=insertNewProject&error=true&message=$message");
        }
    }
    // $userManager->insertNewProject($user_id, $video_source, $title, $description, $tags, $languages);
    header("Location: index.php");
}
function logOut()
{
    session_destroy();
    // require "./view/signInForm.php";
    header("Location: index.php");
}

function logIn($username, $password)
{
    $userManager = new UserManager();
    $result = $userManager->logIn($username);



    if ($result->username === $username and password_verify($password, $result->password)) {

        $_SESSION['id'] = $result->id;
        $_SESSION['username'] = $result->username;
        $_SESSION['email'] = $result->email;
        $_SESSION['profile_img'] = $result->profile_img;
        $message = urlencode("You have succesfully logged in!");
        header("Location: index.php?action=showUserPage&error=false&message=$message");
        // require "./view/indexView.php";
    } else {
        $message = urlencode("You have failed to login. Please try again");
        header("Location: index.php?action=signInForm&error=true&message=$message");
    }
}

function editUser($id)
{
    $userManager = new UserManager();
    $userinfo = $userManager->getUserInfo($id);
    require "./view/editUserForm.php";
}

function personalInfo($id)
{
    $userManager = new UserManager();
    $userinfo = $userManager->getUserInfo($id);
    require "./view/settings.php";
}

// EDITING A USER INFO
function submitEditedProfile(
    $id,
    $profile_image,
    $bio,
    $linked_in,
    $git_hub
) {
    $userManager = new UserManager();
    $userManager->submitEditedProfile(
        $id,
        $profile_image,
        $bio,
        $linked_in,
        $git_hub
    );

    header("Location: index.php?action=userProfileView&id=$id");
}

function submitPersonalInfo(
    $id,
    $first_name,
    $last_name,
    $username,
    $email

) {
    $userManager = new UserManager();
    $userManager->submitPersonalInfo(
        $id,
        $first_name,
        $last_name,
        $username,
        $email
    );

    header("Location: index.php?action=userProfileView&id=$id");
}

function changePassword($id)
{
    require "./view/changePassword.php";
}

function submitChangePassword($id, $password)
{

    $userManager = new UserManager();
    $userManager->submitChangePassword($id, $password);

    header("Location: index.php?action=userProfileView&id=$id");
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
