function filterProjects(filterOn) {
    const xhr = new XMLHttpRequest();

    xhr.open("GET",
        `index.php?action=filter&filterOn=${filterOn}`);
    
    xhr.addEventListener("load", () => {
        // clear previous projects
        const projectContainer = document.querySelector(".project-container");
        projectContainer.innerHTML = "";

        // from projectController.php -> getFilteredProjects function, response text is HTML
        const response = xhr.responseText;
        projectContainer.innerHTML = response;
    })

    xhr.send();
}

