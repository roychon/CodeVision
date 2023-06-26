<?php
if (isset($_GET['error'])) {
    include 'statusPopUp.php';
};
?>
<input type="button" class="voteBtn" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1', this);">

<input type="button" class="voteBtn" value="DOWNVOTE" id="downVote" name="downVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '-1', this);">
<p class="sum"><?= $project->sum ?></p>