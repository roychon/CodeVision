<?php

$title = "Batch 20 Final Project";
ob_start();
?>

<h1>Landing Page</h1>
<div class="project-container">
    <?php
    // somehow need to include the project=>'user_id'
    foreach ($projects as $project) {

        echo "<pre>";
        print_r($projects);

        include "./view/component/projectCard.php";


        // foreach ($project->languages as $language) {
        //     include "./view/component/projectCard.php";
        // }

        // foreach ($project->languages as $language) {
        //     echo $language;
        // }
    }
    ?>
</div>
<?php
$content = ob_get_clean();

if (isset($_SESSION['user_id'])) {
  require "loggedInTemplate.php";
} else {
  require "nonLoggedInTemplate.php";
}
?>