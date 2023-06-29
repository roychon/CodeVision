<i class="fa-solid fa-caret-up voteBtn <?php
                                        foreach ($votes as $vote) {
                                            // echo $vote->project_id;
                                            if ($vote->project_id == $project->id) {
                                                if ($vote->stat == 1) {
                                                    echo " upVoted";
                                                }
                                            }
                                        } ?>" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1', this);"></i>
<p class="sum"><?= $project->sum ?></p>
<i class="fa-solid fa-caret-down voteBtn <?php
                                            foreach ($votes as $vote) {
                                                // echo $vote->project_id;
                                                if ($vote->project_id == $project->id) {
                                                    if ($vote->stat == -1) {
                                                        echo " downVoted";
                                                    }
                                                }
                                            } ?>" value="DOWNVOTE" id="downVote" name="downVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '-1', this);"></i>