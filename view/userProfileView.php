<?php

$title = "Batch 20 Final Project";
ob_start();
?>
<!-- TODO: do we want to include this header? -->
<!-- <header> <?= include "./view/component/loggedInHeader.php" ?></header> -->

<main class="main-user-container">
    <section class="user-profile-title">
        <div class="empty"></div>
        <h1> <?= $profiles->username; ?></h1>
        <div class="edit-profile-link">
            <?php if (isset($_SESSION['id'])) { ?>
                <a href="index.php?action=editUser">
                    <span>Edit Profile</span></a>
        </div>
    <?php
            } ?>

    </section>
    <section class="user-profile-info">
        <div class="user-profile-projects">
            <?php
            foreach ($projects as $project) {
                include "./view/component/projectCard.php";
            }
            ?>
        </div>
        <aside class="user-profile-aside">

            <div class="user-profile-pic">
                <!-- TODO:why is this echoing out the alt tag? -->
                <img id="user-pic-p-view" src="<?= $profiles->profile_img ?>" alt="username photo">
            </div>

            <div class="user-profile-bio">
                <p id="profile-bio"><?= $profiles->bio ?></p>
            </div>

            <div class="user-profile-languages">
                <!-- feel free to change the span to something else to make it easier
            to style :) -->
                <p>languages</p>
                <div class="language-spans">
                    <span class="user-language-tag"> <?php
                                                        foreach ($profiles->languages as $language) {
                                                            echo "$language ";
                                                        } ?></span>
                </div>
            </div>
            <div class="user-profile-socials">
                <a href="<?= htmlspecialchars($profiles->gitHub); ?>"><i class="fa-brands fa-linkedin"></i></a>
                <a href="<?= htmlspecialchars($profiles->linkedIn); ?>"><i class="fa-brands fa-github"></i></a>
            </div>

        </aside>

    </section>
</main>
<?php
$content = ob_get_clean();
// require "template.php";
if (isset($_SESSION['user_id'])) {
    require "loggedInTemplate.php";
} else {
    require "nonLoggedInTemplate.php";
}
?>