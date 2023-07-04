// showModal -- makes sure the modal2 is visible
// Your JavaScript code here
const modal2 = document.querySelector(".votePop");

function openModal() {
  modal2.showModal();
}

// event listener for closing when clicked outside or pressing esc
modal2.addEventListener("click", (e) => {
  const dialogClose = modal2.getBoundingClientRect();
  if (
    e.clientX < dialogClose.left ||
    e.clientX > dialogClose.right ||
    e.clientY < dialogClose.top ||
    e.clientY > dialogClose.bottom
  ) {
    modal2.close();
  }
});

//onclick function for the x
function closeModal() {
  // THIS IS SO POP UP NO APPEAR AGAIN AND AGAIN -- ONLY APPEAR ONCE!
  const url = window.location.href;
  const regex = /(&)\w?(.*)/;
  // This is removing too much. It should ONLY remove the error and message GET parameters
  const newUrl = url.replace(regex, "");
  history.replaceState(null, null, newUrl);
  modal2.close();
}
