//Mobile Menu
document.getElementById('mobile-menu').addEventListener('click', function mobileMenu()
{
  var menu = document.getElementById('mobile-list');
  if (menu.style.display === 'flex') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'flex';
  }
});


//Hide scrollbar on scroll-down, show on scroll-up

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".main-nav").style.top = "0";
  } else {
    document.querySelector(".main-nav").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
};
