<?php

require "./controller/controller.php";

try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
        // TODO: link add project btn to "index.php?action=add_project"
        case "add_project":
            addProject();
            break;
        case "insert_project":
            insertProject(); // TODO: add function to insert project into database
            break;
        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
