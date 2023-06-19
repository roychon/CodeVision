<?php
$title = "User Page";
ob_start();
?>

<h1>Hello new user</h1>
<p>Hello <?= $_SESSION['username'] ?></p>
<?php
$content = ob_get_clean();
require "template.php";
?>