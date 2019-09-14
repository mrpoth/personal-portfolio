var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".main-nav").style.top = "0";
  } else {
    document.querySelector(".main-nav").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
}
