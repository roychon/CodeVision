<?php

$title = "Batch 20 Final Project";
ob_start();
?>

<h1>Landing Page</h1>

<?php
$content = ob_get_clean();

if (isset($_SESSION['user_id'])) {
  require "loggedInTemplate.php";
} else {
  require "nonLoggedInTemplate.php";
}
?>