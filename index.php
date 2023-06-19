<?php

require "./controller/controller.php";

try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
        // link add project btn to "index.php?action=add_project"
        case "add_project":
            addProject();
            break;
        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
