// AJAX: upvote, downvote
function projectVotes(user_id, project_id, stat = 0) {
  window.location.href = `index.php?action=getProjectVotes&user_id=${user_id}&project_id=${project_id}&stat=${stat}`;
}
