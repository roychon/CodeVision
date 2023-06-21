<?php

$title = "Batch 20 Final Project";
ob_start();
?>

<!-- <h1>Landing Page</h1> -->
<div class="project-container">
  <?php
  if (isset($_SESSION['id'])) {
    include "./view/component/loggedInHeader.php";
  }
  echo "<h1>Landing Page</h1>";
  foreach ($projects as $project) {
    if ($project->is_active) {
      include "./view/component/projectCard.php";
    }
  }
  ?>
</div>
<script defer src="./public/js/projectVotes.js"></script>
<?php
$content = ob_get_clean();


if (isset($_SESSION['id'])) {
  require "loggedInTemplate.php";
} else {
  require "nonLoggedInTemplate.php";
}



?>