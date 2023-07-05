<!-- <i class="fa-solid fa-heart voteBtn <?php
                                            foreach ($votes as $vote) {
                                                // echo $vote->project_id;
                                                if ($vote->project_id == $project->id) {
                                                    if ($vote->stat == 1) {
                                                        echo " upVoted";
                                                    }
                                                }
                                            } ?>" value="UPVOTE" id="upVote" name="upVote" onclick="projectVotes(<?= isset($_SESSION['id']) ? $_SESSION['id'] : 0; ?>, <?= $project->id ?>, '1', this);"></i>
<p class="sum"><?php if ($project->sum == 0) {
                    echo "0";
                } else {
                    echo $project->sum;
                } ?></p> -->


<i class="fa-solid fa-heart voteBtn <?php
                                    foreach ($votes as $vote) {
                                        if ($vote->project_id == $project->id) {
                                            if ($vote->stat == 1) {
                                                echo " upVoted";
                                            }
                                        }
                                    } ?>" value="UPVOTE" id="upVote" name="upVote" onclick="<?php
                                                                                            if (isset($_SESSION['id'])) {
                                                                                                echo "projectVotes({$_SESSION['id']}, $project->id , '1', this)";
                                                                                            } else {
                                                                                                // echo "console.log('CLICK')";
                                                                                                // include "statusPopUp.php";
                                                                                                // echo "openModal()";
                                                                                                // header("Location: index.php?action=add_user");
                                                                                                echo "window.location.href = 'index.php?action=add_user'";
                                                                                                // echo "dialog.showModal()";
                                                                                            }
                                                                                            ?>"></i>
<p class="sum"><?php if ($project->sum == 0) {
                    echo "0";
                } else {
                    echo $project->sum;
                } ?></p>
<link rel="stylesheet" href="./public/css/popUp.css">
<script src="./public/js/votesPopUp.js"></script>