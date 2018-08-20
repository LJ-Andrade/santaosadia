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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
module.exports = __webpack_require__(4);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

//////////////////////////////
// 						    //
//        PLUGINS           //
//                          //
//////////////////////////////

new WOW().init();

//////////////////////////////
// 					        //
//        NAVIGATION        //
//                          //
//////////////////////////////

$(document).ready(function () {

	var section = $('#ActualSection').data('section');
	var logo = $('.navbar .navbar-brand');
	var navbar = $('.navbar-default');

	function nav_logic() {

		switch (section) {

			//////// HOME /////////
			case "home":
				// $('body').css('padding-top','0');
				logo.css('opacity', '0');
				// $('.navbar .navbar-right').css('border-bottom', '1px solid white');
				navbar.addClass('home-nav');

				$(window).scroll(function () {
					var scrollPos = $(window).scrollTop();

					if (scrollPos > 250) {
						navbar.addClass('change-nav');
						logo.css('opacity', '100');
					} else {
						navbar.removeClass('change-nav');
						logo.css('opacity', '0');
					}
				});

				break;

			//////// PORTFOLIO /////////
			case "portfolio":

				navbar = $('.navbar-default');
				navbar.addClass('nav-portfolio');
				$('body').css('background-color', '#f9f9f9');
				$(window).scroll(function () {
					var scrollPos = $(window).scrollTop();

					if (scrollPos > 250) {
						navbar.addClass('change-nav');
					} else {
						navbar.removeClass('change-nav');
					}
				});

				break;

			//////// GENERIC /////////
			default:
				$(window).scroll(function () {

					var scrollPos = $(window).scrollTop(),
					    navbar = $('.navbar-default');

					if (scrollPos > 250) {
						navbar.addClass('change-nav');
					} else {
						navbar.removeClass('change-nav');
					}
				});
		}
	}
	// ----------- End Navigation Script ------------ //

	//Activate nav effects in desktop
	if (screen.width > 775) {
		nav_logic();
	}
}); // Document Ready

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgZjFmMTVhNTlhMThhMzU2MzJlNzciLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy93ZWIvd2ViLmpzIiwid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvc2Fzcy93ZWIvd2ViLnNhc3MiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9zYXNzL3N0b3JlL3N0b3JlLWN1c3RvbS5zYXNzIiwid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvc2Fzcy92YWRtaW4vdmFkbWluLnNhc3MiXSwibmFtZXMiOlsiV09XIiwiaW5pdCIsIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwic2VjdGlvbiIsImRhdGEiLCJsb2dvIiwibmF2YmFyIiwibmF2X2xvZ2ljIiwiY3NzIiwiYWRkQ2xhc3MiLCJ3aW5kb3ciLCJzY3JvbGwiLCJzY3JvbGxQb3MiLCJzY3JvbGxUb3AiLCJyZW1vdmVDbGFzcyIsInNjcmVlbiIsIndpZHRoIl0sIm1hcHBpbmdzIjoiO0FBQUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGFBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLG1DQUEyQiwwQkFBMEIsRUFBRTtBQUN2RCx5Q0FBaUMsZUFBZTtBQUNoRDtBQUNBO0FBQ0E7O0FBRUE7QUFDQSw4REFBc0QsK0RBQStEOztBQUVySDtBQUNBOztBQUVBO0FBQ0E7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDN0RBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUEsSUFBSUEsR0FBSixHQUFVQyxJQUFWOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUFDLEVBQUVDLFFBQUYsRUFBWUMsS0FBWixDQUFrQixZQUFZOztBQUU3QixLQUFJQyxVQUFnQkgsRUFBRSxnQkFBRixFQUFvQkksSUFBcEIsQ0FBeUIsU0FBekIsQ0FBcEI7QUFDQSxLQUFJQyxPQUFnQkwsRUFBRSx1QkFBRixDQUFwQjtBQUNBLEtBQUlNLFNBQWdCTixFQUFFLGlCQUFGLENBQXBCOztBQUVBLFVBQVNPLFNBQVQsR0FBcUI7O0FBRXBCLFVBQU9KLE9BQVA7O0FBRUM7QUFDQSxRQUFLLE1BQUw7QUFDQztBQUNBRSxTQUFLRyxHQUFMLENBQVMsU0FBVCxFQUFtQixHQUFuQjtBQUNBO0FBQ0FGLFdBQU9HLFFBQVAsQ0FBZ0IsVUFBaEI7O0FBRUFULE1BQUVVLE1BQUYsRUFBVUMsTUFBVixDQUFpQixZQUFXO0FBQzNCLFNBQUlDLFlBQVlaLEVBQUVVLE1BQUYsRUFBVUcsU0FBVixFQUFoQjs7QUFFQSxTQUFJRCxZQUFZLEdBQWhCLEVBQXFCO0FBQ3BCTixhQUFPRyxRQUFQLENBQWdCLFlBQWhCO0FBQ0FKLFdBQUtHLEdBQUwsQ0FBUyxTQUFULEVBQW1CLEtBQW5CO0FBQ0EsTUFIRCxNQUdPO0FBQ05GLGFBQU9RLFdBQVAsQ0FBbUIsWUFBbkI7QUFDQVQsV0FBS0csR0FBTCxDQUFTLFNBQVQsRUFBbUIsR0FBbkI7QUFDQTtBQUNELEtBVkQ7O0FBWUQ7O0FBRUE7QUFDQSxRQUFLLFdBQUw7O0FBRUNGLGFBQVNOLEVBQUUsaUJBQUYsQ0FBVDtBQUNBTSxXQUFPRyxRQUFQLENBQWdCLGVBQWhCO0FBQ0FULE1BQUUsTUFBRixFQUFVUSxHQUFWLENBQWMsa0JBQWQsRUFBaUMsU0FBakM7QUFDQVIsTUFBRVUsTUFBRixFQUFVQyxNQUFWLENBQWlCLFlBQVc7QUFDM0IsU0FBSUMsWUFBWVosRUFBRVUsTUFBRixFQUFVRyxTQUFWLEVBQWhCOztBQUVBLFNBQUlELFlBQVksR0FBaEIsRUFBcUI7QUFDcEJOLGFBQU9HLFFBQVAsQ0FBZ0IsWUFBaEI7QUFDQSxNQUZELE1BRU87QUFDTkgsYUFBT1EsV0FBUCxDQUFtQixZQUFuQjtBQUNBO0FBQ0QsS0FSRDs7QUFVRDs7QUFHQTtBQUNBO0FBQ0NkLE1BQUVVLE1BQUYsRUFBVUMsTUFBVixDQUFpQixZQUFXOztBQUUzQixTQUFJQyxZQUFZWixFQUFFVSxNQUFGLEVBQVVHLFNBQVYsRUFBaEI7QUFBQSxTQUNBUCxTQUFXTixFQUFFLGlCQUFGLENBRFg7O0FBR0EsU0FBSVksWUFBWSxHQUFoQixFQUFxQjtBQUNwQk4sYUFBT0csUUFBUCxDQUFnQixZQUFoQjtBQUNBLE1BRkQsTUFFTztBQUNOSCxhQUFPUSxXQUFQLENBQW1CLFlBQW5CO0FBQ0E7QUFDRCxLQVZEO0FBNUNGO0FBeURHO0FBQ0Q7O0FBRUE7QUFDSCxLQUFJQyxPQUFPQyxLQUFQLEdBQWUsR0FBbkIsRUFBd0I7QUFDakJUO0FBQ0w7QUFHRixDQTFFRCxFLENBMEVJLGlCOzs7Ozs7QUN4RkoseUM7Ozs7OztBQ0FBLHlDOzs7Ozs7QUNBQSx5QyIsImZpbGUiOiIvanMvd2ViLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gMCk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgZjFmMTVhNTlhMThhMzU2MzJlNzciLCIvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cclxuLy8gXHRcdFx0XHRcdFx0ICAgIC8vXHJcbi8vICAgICAgICBQTFVHSU5TICAgICAgICAgICAvL1xyXG4vLyAgICAgICAgICAgICAgICAgICAgICAgICAgLy9cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcblxyXG5uZXcgV09XKCkuaW5pdCgpO1xyXG5cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcbi8vIFx0XHRcdFx0XHQgICAgICAgIC8vXHJcbi8vICAgICAgICBOQVZJR0FUSU9OICAgICAgICAvL1xyXG4vLyAgICAgICAgICAgICAgICAgICAgICAgICAgLy9cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcblxyXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XHJcblxyXG5cdHZhciBzZWN0aW9uICAgICAgID0gJCgnI0FjdHVhbFNlY3Rpb24nKS5kYXRhKCdzZWN0aW9uJyk7XHJcblx0dmFyIGxvZ28gICAgICAgICAgPSAkKCcubmF2YmFyIC5uYXZiYXItYnJhbmQnKTtcclxuXHR2YXIgbmF2YmFyICAgICAgICA9ICQoJy5uYXZiYXItZGVmYXVsdCcpO1xyXG5cclxuXHRmdW5jdGlvbiBuYXZfbG9naWMoKSB7XHJcblxyXG5cdFx0c3dpdGNoKHNlY3Rpb24pIHtcclxuXHJcblx0XHRcdC8vLy8vLy8vIEhPTUUgLy8vLy8vLy8vXHJcblx0XHRcdGNhc2UgXCJob21lXCI6XHJcblx0XHRcdFx0Ly8gJCgnYm9keScpLmNzcygncGFkZGluZy10b3AnLCcwJyk7XHJcblx0XHRcdFx0bG9nby5jc3MoJ29wYWNpdHknLCcwJyk7XHJcblx0XHRcdFx0Ly8gJCgnLm5hdmJhciAubmF2YmFyLXJpZ2h0JykuY3NzKCdib3JkZXItYm90dG9tJywgJzFweCBzb2xpZCB3aGl0ZScpO1xyXG5cdFx0XHRcdG5hdmJhci5hZGRDbGFzcygnaG9tZS1uYXYnKTtcclxuXHJcblx0XHRcdFx0JCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdHZhciBzY3JvbGxQb3MgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCk7XHJcblxyXG5cdFx0XHRcdFx0aWYgKHNjcm9sbFBvcyA+IDI1MCkge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIuYWRkQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdFx0bG9nby5jc3MoJ29wYWNpdHknLCcxMDAnKTtcclxuXHRcdFx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0XHRcdG5hdmJhci5yZW1vdmVDbGFzcygnY2hhbmdlLW5hdicpO1xyXG5cdFx0XHRcdFx0XHRsb2dvLmNzcygnb3BhY2l0eScsJzAnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHJcblx0XHRcdGJyZWFrO1xyXG5cclxuXHRcdFx0Ly8vLy8vLy8gUE9SVEZPTElPIC8vLy8vLy8vL1xyXG5cdFx0XHRjYXNlIFwicG9ydGZvbGlvXCI6XHJcblxyXG5cdFx0XHRcdG5hdmJhciA9ICQoJy5uYXZiYXItZGVmYXVsdCcpO1x0XHRcclxuXHRcdFx0XHRuYXZiYXIuYWRkQ2xhc3MoJ25hdi1wb3J0Zm9saW8nKTtcclxuXHRcdFx0XHQkKCdib2R5JykuY3NzKCdiYWNrZ3JvdW5kLWNvbG9yJywnI2Y5ZjlmOScpO1xyXG5cdFx0XHRcdCQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24oKSB7XHJcblx0XHRcdFx0XHR2YXIgc2Nyb2xsUG9zID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xyXG5cclxuXHRcdFx0XHRcdGlmIChzY3JvbGxQb3MgPiAyNTApIHtcclxuXHRcdFx0XHRcdFx0bmF2YmFyLmFkZENsYXNzKCdjaGFuZ2UtbmF2Jyk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIucmVtb3ZlQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHJcblx0XHRcdGJyZWFrO1xyXG5cclxuXHJcblx0XHRcdC8vLy8vLy8vIEdFTkVSSUMgLy8vLy8vLy8vXHJcblx0XHRcdGRlZmF1bHQ6XHJcblx0XHRcdFx0JCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdFxyXG5cdFx0XHRcdFx0dmFyIHNjcm9sbFBvcyA9ICQod2luZG93KS5zY3JvbGxUb3AoKSxcclxuXHRcdFx0XHRcdG5hdmJhciAgID0gJCgnLm5hdmJhci1kZWZhdWx0Jyk7XHJcblx0XHRcdFx0XHRcclxuXHRcdFx0XHRcdGlmIChzY3JvbGxQb3MgPiAyNTApIHtcclxuXHRcdFx0XHRcdFx0bmF2YmFyLmFkZENsYXNzKCdjaGFuZ2UtbmF2Jyk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIucmVtb3ZlQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHQgICAgfVxyXG5cclxuICAgIH1cclxuICAgIC8vIC0tLS0tLS0tLS0tIEVuZCBOYXZpZ2F0aW9uIFNjcmlwdCAtLS0tLS0tLS0tLS0gLy9cclxuXHJcbiAgICAvL0FjdGl2YXRlIG5hdiBlZmZlY3RzIGluIGRlc2t0b3BcclxuXHRpZiAoc2NyZWVuLndpZHRoID4gNzc1KSB7XHJcbiAgICAgICAgbmF2X2xvZ2ljKCk7XHJcbiBcdH0gXHJcblxyXG5cclxufSk7IC8vIERvY3VtZW50IFJlYWR5XHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvanMvd2ViL3dlYi5qcyIsIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9yZXNvdXJjZXMvYXNzZXRzL3Nhc3Mvd2ViL3dlYi5zYXNzXG4vLyBtb2R1bGUgaWQgPSAyXG4vLyBtb2R1bGUgY2h1bmtzID0gMCIsIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9yZXNvdXJjZXMvYXNzZXRzL3Nhc3Mvc3RvcmUvc3RvcmUtY3VzdG9tLnNhc3Ncbi8vIG1vZHVsZSBpZCA9IDNcbi8vIG1vZHVsZSBjaHVua3MgPSAwIiwiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW5cblxuXG4vLy8vLy8vLy8vLy8vLy8vLy9cbi8vIFdFQlBBQ0sgRk9PVEVSXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvc2Fzcy92YWRtaW4vdmFkbWluLnNhc3Ncbi8vIG1vZHVsZSBpZCA9IDRcbi8vIG1vZHVsZSBjaHVua3MgPSAwIl0sInNvdXJjZVJvb3QiOiIifQ==