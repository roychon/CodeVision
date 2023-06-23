<input type="button" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1');">
<input type="button" value="DOWNVOTE" id="downVote" name="downVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '-1');">
<p><?= $project->sum ?></p>