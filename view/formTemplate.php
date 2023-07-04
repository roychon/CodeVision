<!DOCTYPE html>
<html>
<?php
if (isset($_GET['error'])) {
    include './view/component/statusPopUp.php';
};
?>

<head>
    <link rel="icon" type="image/x-icon" href="./public/css/logo.png">
    <script defer src="./public/js/validateAddProjectForm.js"></script>

    <meta charset="utf-8" />
    <script defer src="./public/js/validateAddProjectForm.js"></script>

    <title><?= $title; ?></title>
</head>

<body>

    <?= $content; ?>
</body>

</html>