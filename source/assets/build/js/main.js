/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Hide scrollbar on scroll-down, show on scroll-up
var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".main-nav").style.top = "0";
  } else {
    document.querySelector(".main-nav").style.top = "-150px";
  }

  prevScrollpos = currentScrollPos;
}; //Email FAQ project


function changeBackground() {
  var emailProvider = document.getElementById('chooseEmail').value;
  var gmail = emailProvider.includes('gmail');
  var microsoft = emailProvider.includes('live') || emailProvider.includes('outlook') || emailProvider.includes('hotmail') || emailProvider.includes('msn');
  var apple = emailProvider.includes('icloud');

  if (gmail || microsoft || apple) {
    document.getElementById('noEmailEntered').style.display = "none";
    document.getElementById('email-project-instructions').style.display = "none";
    document.getElementById('hint').style.display = "none";
  }

  if (gmail) {
    var changeToGmailFront = document.getElementById('maincardfront');
    changeToGmailFront.classList.add('gmailbackground');
    changeToGmailFront.classList.remove('microsoftbackground', 'applebackground');
    var changeToGmailBack = document.getElementById('maincardback');
    changeToGmailBack.classList.add('gmailbackground');
    changeToGmailBack.classList.remove('microsoftbackground', 'applebackground');
    document.getElementById('gmailOptions').style.display = 'block';
    document.getElementById('microsoftOptions').style.display = 'none';
    document.getElementById('appleOptions').style.display = 'none';
  } else if (microsoft) {
    var changeToMicrosoftFront = document.getElementById('maincardfront');
    changeToMicrosoftFront.classList.add('microsoftbackground');
    changeToMicrosoftFront.classList.remove('gmailbackground', 'applebackground');
    var changeToMicrosoftBack = document.getElementById('maincardback');
    changeToMicrosoftBack.classList.add('microsoftbackground');
    changeToMicrosoftBack.classList.remove('gmailbackground', 'applebackground');
    document.getElementById('microsoftOptions').style.display = 'block';
    document.getElementById('gmailOptions').style.display = 'none';
    document.getElementById('appleOptions').style.display = 'none';
  } else if (apple) {
    var changeToAppleFront = document.getElementById('maincardfront');
    changeToAppleFront.classList.add('applebackground');
    changeToAppleFront.classList.remove('microsoftbackground', 'gmailbackground');
    var changeToAppleBack = document.getElementById('maincardback');
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

document.getElementById('chooseEmail').addEventListener('keyup', function emailStuff(background, email) {
  changeBackground(background);
  changeEmailText(email);
});

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/sass/main.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Lenovo Y520\Desktop\portfolio-site\source\_assets\js\main.js */"./source/_assets/js/main.js");
module.exports = __webpack_require__(/*! C:\Users\Lenovo Y520\Desktop\portfolio-site\source\_assets\sass\main.scss */"./source/_assets/sass/main.scss");


/***/ })

/******/ });