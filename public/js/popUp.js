const dialog = document.querySelector("dialog");

// showModal -- makes sure the modal is visible
dialog.showModal();

// event listener for closing when clicked outside or pressing esc
dialog.addEventListener("click", (e) => {
    const dialogClose = dialog.getBoundingClientRect();
    if (
        e.clientX < dialogClose.left ||
        e.clientX > dialogClose.right ||
        e.clientY < dialogClose.top ||
        e.clientY > dialogClose.bottom
    ) {
        const url = window.location.href;
        const regex = /[?&]error=[^&]+&message=[^&]+/;
        const newUrl = url.replace(regex, "");
        history.replaceState(null, null, newUrl);

        dialog.close();
    }
});

//onclick function for the x
function closeModal() {
    window.location.href;
    url = window.location.href;
    const regex = /[?&]error=[^&]+&message=[^&]+/;
    const newUrl = url.replace(regex, "");
    history.replaceState(null, null, newUrl);
    dialog.close();
}
