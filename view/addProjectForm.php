<?php
$title = "Add Project";
ob_start();
?>

<link rel="stylesheet" href="./public/css/addProjectForm.css">
<script defer src="./public/js/validateAddProjectForm.js"></script>
<script defer src="https://kit.fontawesome.com/033b80222d.js" crossorigin="anonymous"></script>

<!-- enctype needed to be able to upload video -->
<form action="index.php?action=insertNewProject" method="POST" enctype="multipart/form-data">
    <a href="index.php?action=userProfileView&id=<?= $_SESSION['id'] ?>">⬅ Go back</a>

    <h2>Add a Project</h2>

    <!-- changed input from text to file, added "accept" -->
    <p>
        <label for="video">Video: </label>
        <input type="file" name="video" id="video" accept="video/mp4">
    </p>

    <p>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
    </p>

    <div>
        <span>Tags: </span>
        <div class="tag-container">
            <input type="text" name="tags" id="tagsInput">
        </div>
    </div>

    <p>
        <label for="description">Description: </label>
        <input type="text" name="description" id="description">
    </p>

    <div>
        <span>Languages: </span>
        <div class="languages-container">
            <input type="text" name="languages" id="languagesInput">
            <div id="languageResults"></div>
        </div>


        <input type="submit" value="Add Project" id="submit">
</form>


<?php
$content = ob_get_clean();
require "formTemplate.php";

?>