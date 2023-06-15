<?php
$title = "TODO: CHANGE ME";
ob_start();
?>

<h1>INDEX VIEW</h1>

<?php
$content = ob_get_clean();
require "template.php";
?>