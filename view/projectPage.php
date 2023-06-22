<?php
$title = "Project Page";
ob_start();
?>
<div>
    <h2>Project Page</h2>
    <p><?= $project->title ?></p>
    <a href="">Edit</a>
    <a href="">Delete</a>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>