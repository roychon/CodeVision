const dialog = document.querySelector("dialog");
const btn = document.querySelector(".close-button");


// showModal -- makes sure the modal is visible
dialog.showModal();

// event listener for closing when clicked outside or pressing esc
dialog.addEventListener("click", e => {
    const dialogClose = dialog.getBoundingClientRect()
    if (
        e.clientX < dialogClose.left ||
        e.clientX > dialogClose.right ||
        e.clientY < dialogClose.top ||
        e.clientY > dialogClose.bottom
    ) {
        dialog.close()
    }
})

//onclick function for the x 
function closeModal() {
    dialog.close();
}