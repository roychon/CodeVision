// AJAX: upvote, downvote
let limit = 3;
function showMore() {
  // const showMoreButton = obj.closest(".card").querySelector(".sum");
  const xhr = new XMLHttpRequest();
  limit += 3;
  xhr.open("GET", `index.php?action=increaseLimit&limit=${limit}`);
  // INCREMENT HERE
  xhr.addEventListener("load", () => {
    // GRABBING AND APPENDING CARDS HERE
    console.log(xhr.responseText);

    const projectContainer = document.querySelector(".project-container");

    projectContainer.innerHTML = xhr.responseText;
  });
  xhr.send();
}
