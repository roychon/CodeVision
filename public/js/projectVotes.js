// AJAX: upvote, downvote
function projectVotes(user_id, project_id, stat) {
  console.log("user_id", user_id);
  console.log("project_id", project_id);
  console.log("stat", stat);
  const xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    `index.php?action=projectVote&user_id=${user_id}&project_id=${project_id}&stat=${stat}`
  );

  xhr.addEventListener("load", () => {
    const upVote = document.querySelector("#upVote");
    const downVote = document.querySelector("#downVote");
  });
}
