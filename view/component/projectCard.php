<div class="card">
    <h2 class="project-title">
        <span>
            <?= htmlspecialchars($project->title) ?>
        </span>
    </h2>
    <p>
        <img class="project-gif" src="<?= $project->gif ?>" alt="user project gif">
    </p>

    <div class="bottom-card-container">
        <!-- this has same class as the header -->
        <!-- TODO: when you click on the profile pic, it will take you to user profile view -->
        <a href="index.php?action=userProfileView&id=<?= $project->user_id ?>"><img class="user-profile-pic" src="<?= htmlspecialchars($project->profile_img) ?>" alt="user profile pic">
        </a>

        <span class="project-title">
            <?= htmlspecialchars($project->title) ?>
        </span>

        <span class="language-tag"> <?php
                                    echo join(", ", $project->languages) ?></span>
    </div>

</div>
</div>