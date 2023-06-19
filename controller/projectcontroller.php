<?php
require_once "./model/ProjectManager.php";

function displayCards()
{
    $projectManager = new ProjectManager();
    $projects = $projectManager->getCards();
    // $langauges = $projectManager->getcards();
    require './view/indexView.php';
}
