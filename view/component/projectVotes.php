<!-- <input type="button" value="UPVOTE" class="vote-btn" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1');"> -->
<p><?= $project->sum ?></p>
<input type="button" value="DOWNVOTE" class="vote-btn" name="downVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '-1');">
<i class="fa-solid fa-thumbs-up" value="UPVOTE" class="vote-btn" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1');"></i>