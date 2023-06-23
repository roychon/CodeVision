// AJAX: upvote, downvote
function projectVotes(user_id, project_id, stat) {
  // window.location.href = `index.php?action=getProjectVotes&user_id=${user_id}&project_id=${project_id}&stat=${stat}`;
  const xhr = new XMLHttpRequest();

  xhr.open(
    "GET",
    `index.php?action=getProjectVotes&user_id=${user_id}&project_id=${project_id}&stat=${stat}`
  );
}
