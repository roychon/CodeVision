// AJAX: upvote, downvote
function projectVotes(user_id, project_id, stat, obj) {
  const xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    `index.php?action=getProjectVotes&user_id=${user_id}&project_id=${project_id}&stat=${stat}`
  );

  xhr.addEventListener("load", () => {
    const clickedSum = obj.closest(".card").querySelector(".sum");
    const upVote = obj.closest(".card").querySelector("#upVote");
    const downVote = obj.closest(".card").querySelector("#downVote");

    clickedSum.innerHTML = xhr.responseText;

    // upVote.addEventListener("click", () => {
    //   upVote.classList.toggle("voted");
    // });

    // downVote.addEventListener("click", () => {
    //   downVote.classList.toggle("voted");
    // });
  });
  xhr.send();
}
