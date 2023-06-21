<?php
require_once "./model/ProjectManager.php";

function displayCards()
{
    $projectManager = new ProjectManager();
    $projects = $projectManager->getCards();
    require './view/indexView.php';
}

function getProjectVotes($user_id, $project_id, $stat)
{

    $projectManager = new ProjectManager();
    $projects = $projectManager->projectVotes($user_id, $project_id, $stat);
    header("Location: index.php");
}
