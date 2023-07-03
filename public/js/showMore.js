// AJAX: upvote, downvote
let limit = 3;
function showMore(filter = "default") {
  // const showMoreButton = obj.closest(".card").querySelector(".sum");
  const xhr = new XMLHttpRequest();
  // limit += 3;
  if (filter === "mostRecent") {
    // console.log("h");
    // something
    xhr.open(
      "GET",
      `index.php?action=filter&filterOn=mostRecent&limit=${limit}`
    );
    xhr.addEventListener("load", () => {
      // GRABBING AND APPENDING CARDS HERE
      // console.log(xhr.responseText);

      const projectContainer = document.querySelector(".project-container");

      projectContainer.innerHTML = xhr.responseText;
    });

    xhr.send();
    // console.log("most recent");
    //something
  } else if (filter === "mostLikes") {
    // console.log("h");
    // something
    xhr.open(
      "GET",
      `index.php?action=filter&filterOn=mostLikes&limit=${limit}`
    );
    xhr.addEventListener("load", () => {
      // GRABBING AND APPENDING CARDS HERE
      // console.log(xhr.responseText);

      const projectContainer = document.querySelector(".project-container");

      projectContainer.innerHTML = xhr.responseText;
    });

    xhr.send();
  } else {
    // no filter set, goes to default
    // xhr.open("GET", `index.php?action=increaseLimit&limit=${limit}`);
    limit += 3;
    // xhr.open("GET", `index.php?action=increaseLimit&limit=${limit}`);

    xhr.open("GET", `index.php?action=filter&limit=${limit}`);

    // INCREMENT HERE
    xhr.addEventListener("load", () => {
      // GRABBING AND APPENDING CARDS HERE
      // console.log(xhr.responseText);

      const projectContainer = document.querySelector(".project-container");

      projectContainer.innerHTML = xhr.responseText;
    });
    xhr.send();
  }
}

// OPTIONS
// 1. Combine the two into one

// 2. Store $limit as a session variable and then later unset it

// 3.

// IT NEEDS TO FILTER EVERYTHING WITH  NO LIMIT, BUT BE DISPLAYED WITH A LIMIT

// When we press increase limit, it resets everything...
