<?php

require "./controller/controller.php";

try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
        case "add_user":
            addUser();
            break;

        default:
            showIndex();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
