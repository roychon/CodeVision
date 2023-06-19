<?php
$title = "Add Project";
ob_start();
?>
<link rel="stylesheet" href="./public/css/addProjectForm.css">
<script defer src="./public/js/validateAddProjectForm.js"></script>
<script defer src="https://kit.fontawesome.com/033b80222d.js" crossorigin="anonymous"></script>

<h1>Add Project</h1>

<form action="index.php?action=insertNewProject" method="POST">
    <p>
        <label for="gif">Gif: </label>
        <input type="text" name="gif" id="gif">
    </p>

    <p>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
    </p>

    <p>
        <span>Tags: </span>
    <div class="tag-container">
        <input type="text" name="tags" id="tagsInput">
    </div>
    </p>

    <p>
        <label for="description">Description: </label>
        <input type="text" name="description" id="description">
    </p>

    <p>
        <span>Languages: </span>
    <div class="languages-container">
        <input type="text" name="languages" id="languagesInput">
        <div id="languageResults"></div>
    </div>
    </p>

    <input type="submit" value="Add Project" id="submit">
</form>


<?php
$content = ob_get_clean();
require "formTemplate.php";
?>