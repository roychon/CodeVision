<input type="button" class="voteBtn <?php
                                    foreach ($votes as $vote) {
                                        // echo $vote->project_id;
                                        if ($vote->project_id == $project->id) {
                                            if ($vote->stat == 1) {
                                                echo " voted";
                                            }
                                        }
                                    } ?>" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1', this);">
<p class="sum"><?= $project->sum ?></p>
<input type="button" class="voteBtn <?php
                                    foreach ($votes as $vote) {
                                        // echo $vote->project_id;
                                        if ($vote->project_id == $project->id) {
                                            if ($vote->stat == -1) {
                                                echo " voted";
                                            }
                                        }
                                    } ?>" value="DOWNVOTE" id="downVote" name="downVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '-1', this);">