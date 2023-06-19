<?php

require "./controller/controller.php";
require "./controller/projectcontroller.php";

try {
    $action = $_GET['action'] ?? "";
    switch ($action) {
        case "something else":
            // do something;
            break;
        default:
            displayCards();
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
