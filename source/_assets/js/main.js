//Mobile Menu
let menu = document.getElementById("menu-list");
let prevScrollpos = window.pageYOffset;
let mainNav = document.querySelector(".main-nav");

document
  .querySelector(".mobile-menu")
  .addEventListener("click", function mobileMenu() {
    if (menu.style.display === "flex") {
      menu.style.display = "none";
    } else {
      menu.style.display = "flex";
    }
  });

//Hide mobile menu when clicking outside its body
document.body.addEventListener("click", function(e) {
  if (e.target.id !== "menu-label") {
    mainNav.style.top = "-550px";
  }
});

//Hide scrollbar on scroll-down, show on scroll-ups

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    mainNav.style.top = "0";
  } else {
    mainNav.style.top = "-550px";
  }
  prevScrollpos = currentScrollPos;
};
