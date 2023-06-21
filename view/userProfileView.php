<?php

$title = "Batch 20 Final Project";
ob_start();
?>
<!-- TODO: do we want to include this header? -->
<!-- <header> <?= include "./view/component/loggedInHeader.php" ?></header> -->

<main class="user-profile-view">
    <section class="user-profile-view-info">
        <h1> <?= $profiles->username; ?></h1>
        <!-- <?php if (isset($_SESSION['id'])) { ?>
            <a href="index.php?action=editUser">Edit Profile</a>
        <?php
                } ?> -->

    </section>
    <section class="user-profile-view">
        <aside class="user-profile-info">

            <div class="user-profile-pic">
                <img src="<?= $profiles->profile_img ?>" alt="the photo of <?= $profiles->username; ?>">
            </div>

            <div class="user-profile-bio">
                <p><?= $profiles->bio ?></p>
            </div>

            <div class="user-profile-languages">
                <!-- feel free to change the span to something else to make it easier
            to style :) -->
                <span class="user-language-tag"> <?php
                                                    if (count($projects))
                                                    foreach ($profiles->languages as $language) {
                                                        echo "$language ";
                                                    } ?></span>
            </div>
            <div class="user-profile-socials">
                <ul>
                    <li <?= $profiles->gitHub; ?>></li>
                    <li <?= $profiles->linkedIn; ?>></li>
                </ul>

            </div>

        </aside>
        <div class="user-profile-projects">
            <?php
            foreach ($projects as $project) {
                include "./view/component/projectCard.php";
            }
            ?>
        </div>

        <?php if (isset($_SESSION) and $_SESSION['username'] === $profiles->username) { ?>
            <button><a href="index.php?action=add_project">Add a Project</a></button>
        <?php } ?>

    </section>
</main>
<?php
$content = ob_get_clean();
require "template.php";
// if (isset($_SESSION['user_id'])) {
//     require "loggedInTemplate.php";
// } else {
//     require "nonLoggedInTemplate.php";
// }
?>