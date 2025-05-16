// Script pour le menu mobile
const menuButton = document.getElementById("menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const menuIcon = document.querySelector(".menu-icon");
const closeIcon = document.querySelector(".close-icon");

menuButton.addEventListener("click", () => {
    const isExpanded = mobileMenu.classList.toggle("hidden");
    menuIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
    menuButton.setAttribute("aria-expanded", !isExpanded);
});

// Script pour l'année dynamique
document.getElementById("currentYear").textContent = new Date().getFullYear();
