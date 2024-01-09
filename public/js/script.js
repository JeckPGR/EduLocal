document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector("nav");
    let prevScroll = window.scrollY;

    function normalNavbar() {
        navbar.style.backgroundColor = "rgb(255, 255, 255)";
        navbar.style.boxshadow = "rgba(0, 0, 0, 0.1) 0px 2px 8px";
    }

    function changeNavbar() {
        navbar.style.backgroundColor = "rgb(100% 100% 100% / .7)";
        navbar.style.backdropFilter = "blur(30px)";
    }

    window.addEventListener("scroll", () => {
        let currentScroll = window.scrollY;

        if (currentScroll > prevScroll) {
            // Scrolling down
            navbar.style.transform = translateY(-100);
        } else {
            // Scrolling up
            navbar.style.transform = translateY(0);
        }

        if (currentScroll === 0) {
            navbar.style.transition = ` all 0.40s ease-in-out`;
            normalNavbar();
        } else {
            changeNavbar();
        }

        console.log("current", currentScroll);
        console.log("prev", prevScroll);
        prevScroll = currentScroll;
    });
});
