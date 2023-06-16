<?php
$title = "Change me";
ob_start();
?>

<h1>TODO: Change me</h1>

<?php
$content = ob_get_clean();
require "template.php";
?>