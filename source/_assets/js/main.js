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
}

//Email FAQ project

function changeBackground() {
var emailProvider = document.getElementById('chooseEmail').value;
var gmail = emailProvider.includes('gmail');
var microsoft =
  emailProvider.includes('live') ||
  emailProvider.includes('outlook') ||
  emailProvider.includes('hotmail') ||
  emailProvider.includes('msn');
var apple = emailProvider.includes('icloud');

if (gmail || microsoft || apple) {
  document.getElementById('noEmailEntered').style.display = "none";
  document.getElementById('email-project-instructions').style.display ="none";
  document.getElementById('hint').style.display ="none";
}
if (gmail) {
   var changeToGmailFront = document.getElementById('maincardfront');
   changeToGmailFront.classList.add('gmailbackground');
   changeToGmailFront.classList.remove('microsoftbackground', 'applebackground');
   var changeToGmailBack = document.getElementById('maincardback')
   changeToGmailBack.classList.add('gmailbackground');
   changeToGmailBack.classList.remove('microsoftbackground', 'applebackground');
   document.getElementById('gmailOptions').style.display = 'block';
   document.getElementById('microsoftOptions').style.display = 'none';
   document.getElementById('appleOptions').style.display = 'none';
 } else if (microsoft) {
   var changeToMicrosoftFront = document.getElementById('maincardfront');
   changeToMicrosoftFront.classList.add('microsoftbackground');
   changeToMicrosoftFront.classList.remove('gmailbackground', 'applebackground');
   var changeToMicrosoftBack = document.getElementById('maincardback')
   changeToMicrosoftBack.classList.add('microsoftbackground');
   changeToMicrosoftBack.classList.remove('gmailbackground', 'applebackground');
   document.getElementById('microsoftOptions').style.display = 'block';
   document.getElementById('gmailOptions').style.display = 'none';
   document.getElementById('appleOptions').style.display = 'none';
 } else if (apple) {
   var changeToAppleFront = document.getElementById('maincardfront');
   changeToAppleFront.classList.add('applebackground');
   changeToAppleFront.classList.remove('microsoftbackground', 'gmailbackground');
   var changeToAppleBack = document.getElementById('maincardback')
   changeToAppleBack.classList.add('applebackground');
   changeToAppleBack.classList.remove('microsoftbackground', 'gmailbackground');
   document.getElementById('appleOptions').style.display = 'block';
   document.getElementById('gmailOptions').style.display = 'none';
   document.getElementById('microsoftOptions').style.display = 'none';
 }
}

function changeEmailText() {
  var emailText = document.getElementById('chooseEmail').value;
  document.getElementById('myEmail').innerHTML = emailText;
}

document.getElementById('chooseEmail').addEventListener('keyup',
function emailStuff(background, email)
{
  changeBackground(background)
  changeEmailText(email)
});
