<input type="button" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= $_SESSION['id']; ?>, <?= $project->id ?>, '1');">
<input type="button" value="DOWNVOTE" id="downVote" name="downVote" onclick="projectVotes(<?= $_SESSION['id']; ?>, <?= $project->id ?>, '-1');">
<p><?= $project->sum ?></p>