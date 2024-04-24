/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/scripts/app.js":
/*!**********************************!*\
  !*** ./resources/scripts/app.js ***!
  \**********************************/
/***/ (() => {

eval("var defaultThemeMode = \"light\";\nvar themeMode;\nif (document.documentElement) {\n  if (document.documentElement.hasAttribute(\"data-theme-mode\")) {\n    themeMode = document.documentElement.getAttribute(\"data-theme-mode\");\n  } else {\n    if (localStorage.getItem(\"data-theme\") !== null) {\n      themeMode = localStorage.getItem(\"data-theme\");\n    } else {\n      themeMode = defaultThemeMode;\n    }\n  }\n  if (themeMode === \"system\") {\n    themeMode = window.matchMedia(\"(prefers-color-scheme: dark)\").matches ? \"dark\" : \"light\";\n  }\n}\ndocument.documentElement.setAttribute(\"data-theme\", themeMode);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkZWZhdWx0VGhlbWVNb2RlIiwidGhlbWVNb2RlIiwiZG9jdW1lbnQiLCJkb2N1bWVudEVsZW1lbnQiLCJoYXNBdHRyaWJ1dGUiLCJnZXRBdHRyaWJ1dGUiLCJsb2NhbFN0b3JhZ2UiLCJnZXRJdGVtIiwid2luZG93IiwibWF0Y2hNZWRpYSIsIm1hdGNoZXMiLCJzZXRBdHRyaWJ1dGUiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3NjcmlwdHMvYXBwLmpzPzUwMzAiXSwic291cmNlc0NvbnRlbnQiOlsidmFyIGRlZmF1bHRUaGVtZU1vZGUgPSBcImxpZ2h0XCI7IFxudmFyIHRoZW1lTW9kZTsgXG5cbmlmICggZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50ICkgeyBcbiAgICBpZiAoIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5oYXNBdHRyaWJ1dGUoXCJkYXRhLXRoZW1lLW1vZGVcIikpIHsgXG4gICAgICAgIHRoZW1lTW9kZSA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5nZXRBdHRyaWJ1dGUoXCJkYXRhLXRoZW1lLW1vZGVcIik7IFxuICAgIH0gZWxzZSB7IFxuICAgICAgICBpZiAoIGxvY2FsU3RvcmFnZS5nZXRJdGVtKFwiZGF0YS10aGVtZVwiKSAhPT0gbnVsbCApIHsgXG4gICAgICAgICAgICB0aGVtZU1vZGUgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbShcImRhdGEtdGhlbWVcIik7IFxuICAgICAgICB9IGVsc2UgeyBcbiAgICAgICAgICAgIHRoZW1lTW9kZSA9IGRlZmF1bHRUaGVtZU1vZGU7IFxuICAgICAgICB9IFxuICAgIH0gXG4gICAgaWYgKHRoZW1lTW9kZSA9PT0gXCJzeXN0ZW1cIikgeyBcbiAgICAgICAgdGhlbWVNb2RlID0gd2luZG93Lm1hdGNoTWVkaWEoXCIocHJlZmVycy1jb2xvci1zY2hlbWU6IGRhcmspXCIpLm1hdGNoZXMgPyBcImRhcmtcIiA6IFwibGlnaHRcIjsgXG4gICAgfSBcbn1cblxuZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNldEF0dHJpYnV0ZShcImRhdGEtdGhlbWVcIiwgdGhlbWVNb2RlKTsgIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxnQkFBZ0IsR0FBRyxPQUFPO0FBQzlCLElBQUlDLFNBQVM7QUFFYixJQUFLQyxRQUFRLENBQUNDLGVBQWUsRUFBRztFQUM1QixJQUFLRCxRQUFRLENBQUNDLGVBQWUsQ0FBQ0MsWUFBWSxDQUFDLGlCQUFpQixDQUFDLEVBQUU7SUFDM0RILFNBQVMsR0FBR0MsUUFBUSxDQUFDQyxlQUFlLENBQUNFLFlBQVksQ0FBQyxpQkFBaUIsQ0FBQztFQUN4RSxDQUFDLE1BQU07SUFDSCxJQUFLQyxZQUFZLENBQUNDLE9BQU8sQ0FBQyxZQUFZLENBQUMsS0FBSyxJQUFJLEVBQUc7TUFDL0NOLFNBQVMsR0FBR0ssWUFBWSxDQUFDQyxPQUFPLENBQUMsWUFBWSxDQUFDO0lBQ2xELENBQUMsTUFBTTtNQUNITixTQUFTLEdBQUdELGdCQUFnQjtJQUNoQztFQUNKO0VBQ0EsSUFBSUMsU0FBUyxLQUFLLFFBQVEsRUFBRTtJQUN4QkEsU0FBUyxHQUFHTyxNQUFNLENBQUNDLFVBQVUsQ0FBQyw4QkFBOEIsQ0FBQyxDQUFDQyxPQUFPLEdBQUcsTUFBTSxHQUFHLE9BQU87RUFDNUY7QUFDSjtBQUVBUixRQUFRLENBQUNDLGVBQWUsQ0FBQ1EsWUFBWSxDQUFDLFlBQVksRUFBRVYsU0FBUyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3NjcmlwdHMvYXBwLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/scripts/app.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/scripts/app.js"]();
/******/ 	
/******/ })()
;