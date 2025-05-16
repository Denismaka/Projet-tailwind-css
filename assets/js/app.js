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

document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("backToTop");

    // Gestion du clic
    btn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // Apparition conditionnelle
    window.addEventListener("scroll", () => {
        btn.classList.toggle("opacity-0", window.scrollY < 300);
        btn.classList.toggle("invisible", window.scrollY < 300);
        btn.classList.toggle("opacity-100", window.scrollY >= 300);
    });
});

// Librairies ScrollReveal pour la gestion du scrool
ScrollReveal;
ScrollReveal({
    reset: true,
    distance: "80px",
    duration: 2000,
    delay: 200,
});
ScrollReveal().reveal(".container, .heading", { origin: "top" });
ScrollReveal().reveal(".col-md-4, form", { origin: "left" });
ScrollReveal().reveal("h1, h3, h4, h5, h2", { origin: "bottom" });
ScrollReveal().reveal("p, .row, button", { origin: "left" });
