const buttons = document.querySelectorAll('[data-carousel-button]');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        const offset = button.dataset.carouselButton === "next" ? 1 : -1;

        const slides = button.closest("[data-carousel]").querySelector('[data-slides]');

        const activeSlide = slides.querySelector('[data-active]');
        let newIndex = [...slides.children].indexOf(activeSlide) + offset;

        // edge cases: start + end of array
        if (newIndex < 0) newIndex = slides.children.length - 1;
        if (newIndex >= slides.children.length) newIndex = 0;
    

        // set active to new active slide
        slides.children[newIndex].dataset.active = true;

        // remove active from previous active slide
        delete activeSlide.dataset.active;  
    })
})

const viewMores = document.querySelectorAll(".viewMore");

viewMores.forEach(button => {
    button.addEventListener("click", () => {
        window.location.href = `index.php?action=fullProjectPage&project_id=${button.dataset.projectid}`;
    })
})