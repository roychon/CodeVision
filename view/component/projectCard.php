<div class="card">
    <p>
        <a href="index.php?action=fullProjectPage&project_id=<?= $project->id ?>"> <img class="project-gif" src="<?= $project->gif ?>" alt="user project gif"></a>
    </p>

    <!-- ***** Bottom Half of Project Card ***** -->
    <div class='outer-container'>
        <div class="bottom-card-container">
            <!-- this has same class as the header -->
            <a href="index.php?action=userProfileView&id=<?= $project->user_id ?>"><img class="user-profile-pic" src="<?= htmlspecialchars($project->profile_img) ?>" alt="user profile pic">
            </a>
            <div class="project-description">

                <span class="project-title">
                    <?= htmlspecialchars($project->title) ?>
                </span>

                <span class="language-tag"> <?php
                                            echo join(", ", $project->languages) ?></span>
            </div>
            <!-- Upvote + Downvote Buttons -->
            <div class="projectVotesContainer">
                <?php
                include "projectVotes.php";
                ?>
            </div>
        </div>
    </div>

</div>