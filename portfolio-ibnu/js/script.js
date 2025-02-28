document.addEventListener("DOMContentLoaded", function () {
    console.log("Website siap!");

    let heroText = document.querySelector(".hero h2");
    heroText.style.opacity = 0;
    heroText.style.transform = "translateY(20px)";

    setTimeout(() => {
        heroText.style.transition = "opacity 1s, transform 1s";
        heroText.style.opacity = 1;
        heroText.style.transform = "translateY(0)";
    }, 500);
});
