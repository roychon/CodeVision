<?php
$title = "Full Project Page HTML";
ob_start();
?>

<!-- <div>Header</div> PLACEHOLDER -->

<div class="project-container">

  <div class="animation-container">
    <p>
      <img class="project-gif" src="<?= $project->gif ?>" alt="user project gif">
    </p>
  </div>

  <div class="middle-container"> <!--block elements -->
    <div class="titleTag"> <!--inline elements -->
      <div class="title"></div>
      <div class="tags"></div>
    </div>

    <div class="userLang"> <!--inline elements -->
      <div class="username"></div>
      <div class="languages"></div>
    </div>
  </div>

  <div class="bottom-container"> <!--inline elements -->
    <div class="description"></div>

    <div class="modify"></div>
    <a href="">Edit</a> <!--edit and delete, block elements -->
    <a href="">Delete</a>
  </div>

</div>

<?php
$content = ob_get_clean();
require "projectTemplate.php";
?>