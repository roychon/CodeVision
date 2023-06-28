<?php
require_once "./model/ProjectManager.php";

function displayCards($filter = "default")
{
    $projectManager = new ProjectManager();
    $carousels = $projectManager->getCarousels();
    $projects = $projectManager->getCards();
    $votes = $projectManager->getUserVotes();
    /* 
        1. Create the getUSerVotes function in the ProjectManager
        2. In that function, get all of the project_ids and stats from the project_votes table
                Where the user matches the logged-in user
        3. fetchAll and return that array from the model to here
        4. In the view (projectCard?) check if the project_id exists in the $votes array.
        5. If it does, check the stat.
        6. If the stat is -1 or 1, add a class to the appropriate vote button
    */

    // echo "<pre>";
    // print_r($votes);
    // echo "</pre>";
    // TODO: uncomment this
    require './view/indexView.php';
}

function displayFullProject($project_id)
{
    $projectManager = new ProjectManager();
    $userManager = new UserManager();
    $fullProject = $projectManager->displayFullProject($project_id);
    $tags = $userManager->getProjectTags($project_id);
    // Use the project id (from the router)
    // to call a model function that will get all of the data for that specific project
    require "./view/projectPage.php"; // TODO: uncomment this!
}
function getProjectVotes($user_id, $project_id, $stat)
{
    $projectManager = new ProjectManager();
    $status = $projectManager->projectVotes($user_id, $project_id, $stat);

    echo $status;
}

function getFilteredProjects($filter)
{
    $projectManager = new ProjectManager();
    if ($filter == 'mostRecent') {
        $projects = $projectManager->getMostRecentProjects();
    } else if ($filter == 'mostLikes') {
        $projects = $projectManager->getMostLikedProjects();
    }

    foreach ($projects as $project) {
        require "./view/component/projectCard.php";
    }
}


function applyVoteStatusFromStorage($user_id, $project_id, $stat)
{
    $projectManager = new ProjectManager();
    $status = $projectManager->projectVotes($user_id, $project_id, $stat);
}
