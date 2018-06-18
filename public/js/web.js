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
	} else {}
}); // Document Ready

/***/ }),
/* 2 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: Error: Node Sass does not yet support your current environment: Linux 64-bit with Unsupported runtime (64)\nFor more information on which environments are supported please see:\nhttps://github.com/sass/node-sass/releases/tag/v4.7.2\n    at module.exports (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/binding.js:13:13)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/index.js:14:35)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/sass-loader/lib/loader.js:3:14)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:13:17)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:170:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:27:11)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at Compilation.buildModule (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:151:10)\n    at moduleFactory.create (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:454:10)\n    at factory (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:243:5)\n    at applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:94:13)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:268:11\n    at NormalModuleFactory.params.normalModuleFactory.plugin (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/CompatibilityPlugin.js:52:5)\n    at NormalModuleFactory.applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:272:13)\n    at resolver (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:69:10)\n    at process.nextTick (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:196:7)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ }),
/* 3 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: Error: Node Sass does not yet support your current environment: Linux 64-bit with Unsupported runtime (64)\nFor more information on which environments are supported please see:\nhttps://github.com/sass/node-sass/releases/tag/v4.7.2\n    at module.exports (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/binding.js:13:13)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/index.js:14:35)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/sass-loader/lib/loader.js:3:14)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:13:17)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:170:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:27:11)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at Compilation.buildModule (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:151:10)\n    at moduleFactory.create (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:454:10)\n    at factory (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:243:5)\n    at applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:94:13)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:268:11\n    at NormalModuleFactory.params.normalModuleFactory.plugin (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/CompatibilityPlugin.js:52:5)\n    at NormalModuleFactory.applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:272:13)\n    at resolver (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:69:10)\n    at process.nextTick (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:196:7)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ }),
/* 4 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: Error: Node Sass does not yet support your current environment: Linux 64-bit with Unsupported runtime (64)\nFor more information on which environments are supported please see:\nhttps://github.com/sass/node-sass/releases/tag/v4.7.2\n    at module.exports (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/binding.js:13:13)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/node-sass/lib/index.js:14:35)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at Object.<anonymous> (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/sass-loader/lib/loader.js:3:14)\n    at Module._compile (internal/modules/cjs/loader.js:678:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:689:10)\n    at Module.load (internal/modules/cjs/loader.js:589:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:528:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:520:3)\n    at Module.require (internal/modules/cjs/loader.js:626:17)\n    at require (internal/modules/cjs/helpers.js:20:18)\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:13:17)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:170:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:27:11)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:165:10)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:173:18\n    at loadLoader (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/loadLoader.js:36:3)\n    at iteratePitchingLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:169:2)\n    at runLoaders (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/loader-runner/lib/LoaderRunner.js:362:2)\n    at NormalModule.doBuild (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:182:3)\n    at NormalModule.build (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModule.js:275:15)\n    at Compilation.buildModule (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:151:10)\n    at moduleFactory.create (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/Compilation.js:454:10)\n    at factory (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:243:5)\n    at applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:94:13)\n    at /home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:268:11\n    at NormalModuleFactory.params.normalModuleFactory.plugin (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/CompatibilityPlugin.js:52:5)\n    at NormalModuleFactory.applyPluginsAsyncWaterfall (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/tapable/lib/Tapable.js:272:13)\n    at resolver (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:69:10)\n    at process.nextTick (/home/javzero/Documentos/WebDev/Incubator/santaosadia/node_modules/webpack/lib/NormalModuleFactory.js:196:7)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ })
/******/ ]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgNzdiZTM0OGFlZmEzNWE2NjdmZGMiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy93ZWIvd2ViLmpzIl0sIm5hbWVzIjpbIldPVyIsImluaXQiLCIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInNlY3Rpb24iLCJkYXRhIiwibG9nbyIsIm5hdmJhciIsIm5hdl9sb2dpYyIsImNzcyIsImFkZENsYXNzIiwid2luZG93Iiwic2Nyb2xsIiwic2Nyb2xsUG9zIiwic2Nyb2xsVG9wIiwicmVtb3ZlQ2xhc3MiLCJzY3JlZW4iLCJ3aWR0aCJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7Ozs7OztBQzdEQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBLElBQUlBLEdBQUosR0FBVUMsSUFBVjs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBQyxFQUFFQyxRQUFGLEVBQVlDLEtBQVosQ0FBa0IsWUFBWTs7QUFFN0IsS0FBSUMsVUFBZ0JILEVBQUUsZ0JBQUYsRUFBb0JJLElBQXBCLENBQXlCLFNBQXpCLENBQXBCO0FBQ0EsS0FBSUMsT0FBZ0JMLEVBQUUsdUJBQUYsQ0FBcEI7QUFDQSxLQUFJTSxTQUFnQk4sRUFBRSxpQkFBRixDQUFwQjs7QUFFQSxVQUFTTyxTQUFULEdBQXFCOztBQUVwQixVQUFPSixPQUFQOztBQUVDO0FBQ0EsUUFBSyxNQUFMO0FBQ0M7QUFDQUUsU0FBS0csR0FBTCxDQUFTLFNBQVQsRUFBbUIsR0FBbkI7QUFDQTtBQUNBRixXQUFPRyxRQUFQLENBQWdCLFVBQWhCOztBQUVBVCxNQUFFVSxNQUFGLEVBQVVDLE1BQVYsQ0FBaUIsWUFBVztBQUMzQixTQUFJQyxZQUFZWixFQUFFVSxNQUFGLEVBQVVHLFNBQVYsRUFBaEI7O0FBRUEsU0FBSUQsWUFBWSxHQUFoQixFQUFxQjtBQUNwQk4sYUFBT0csUUFBUCxDQUFnQixZQUFoQjtBQUNBSixXQUFLRyxHQUFMLENBQVMsU0FBVCxFQUFtQixLQUFuQjtBQUNBLE1BSEQsTUFHTztBQUNORixhQUFPUSxXQUFQLENBQW1CLFlBQW5CO0FBQ0FULFdBQUtHLEdBQUwsQ0FBUyxTQUFULEVBQW1CLEdBQW5CO0FBQ0E7QUFDRCxLQVZEOztBQVlEOztBQUVBO0FBQ0EsUUFBSyxXQUFMOztBQUVDRixhQUFTTixFQUFFLGlCQUFGLENBQVQ7QUFDQU0sV0FBT0csUUFBUCxDQUFnQixlQUFoQjtBQUNBVCxNQUFFLE1BQUYsRUFBVVEsR0FBVixDQUFjLGtCQUFkLEVBQWlDLFNBQWpDO0FBQ0FSLE1BQUVVLE1BQUYsRUFBVUMsTUFBVixDQUFpQixZQUFXO0FBQzNCLFNBQUlDLFlBQVlaLEVBQUVVLE1BQUYsRUFBVUcsU0FBVixFQUFoQjs7QUFFQSxTQUFJRCxZQUFZLEdBQWhCLEVBQXFCO0FBQ3BCTixhQUFPRyxRQUFQLENBQWdCLFlBQWhCO0FBQ0EsTUFGRCxNQUVPO0FBQ05ILGFBQU9RLFdBQVAsQ0FBbUIsWUFBbkI7QUFDQTtBQUNELEtBUkQ7O0FBVUQ7O0FBR0E7QUFDQTtBQUNDZCxNQUFFVSxNQUFGLEVBQVVDLE1BQVYsQ0FBaUIsWUFBVzs7QUFFM0IsU0FBSUMsWUFBWVosRUFBRVUsTUFBRixFQUFVRyxTQUFWLEVBQWhCO0FBQUEsU0FDQVAsU0FBV04sRUFBRSxpQkFBRixDQURYOztBQUdBLFNBQUlZLFlBQVksR0FBaEIsRUFBcUI7QUFDcEJOLGFBQU9HLFFBQVAsQ0FBZ0IsWUFBaEI7QUFDQSxNQUZELE1BRU87QUFDTkgsYUFBT1EsV0FBUCxDQUFtQixZQUFuQjtBQUNBO0FBQ0QsS0FWRDtBQTVDRjtBQXlERztBQUNEOztBQUVBO0FBQ0gsS0FBSUMsT0FBT0MsS0FBUCxHQUFlLEdBQW5CLEVBQXdCO0FBQ2pCVDtBQUNMLEVBRkYsTUFFUSxDQUVQO0FBR0QsQ0E1RUQsRSxDQTRFSSxpQiIsImZpbGUiOiIvanMvd2ViLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gMCk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgNzdiZTM0OGFlZmEzNWE2NjdmZGMiLCIvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cclxuLy8gXHRcdFx0XHRcdFx0ICAgIC8vXHJcbi8vICAgICAgICBQTFVHSU5TICAgICAgICAgICAvL1xyXG4vLyAgICAgICAgICAgICAgICAgICAgICAgICAgLy9cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcblxyXG5uZXcgV09XKCkuaW5pdCgpO1xyXG5cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcbi8vIFx0XHRcdFx0XHQgICAgICAgIC8vXHJcbi8vICAgICAgICBOQVZJR0FUSU9OICAgICAgICAvL1xyXG4vLyAgICAgICAgICAgICAgICAgICAgICAgICAgLy9cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vXHJcblxyXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XHJcblxyXG5cdHZhciBzZWN0aW9uICAgICAgID0gJCgnI0FjdHVhbFNlY3Rpb24nKS5kYXRhKCdzZWN0aW9uJyk7XHJcblx0dmFyIGxvZ28gICAgICAgICAgPSAkKCcubmF2YmFyIC5uYXZiYXItYnJhbmQnKTtcclxuXHR2YXIgbmF2YmFyICAgICAgICA9ICQoJy5uYXZiYXItZGVmYXVsdCcpO1xyXG5cclxuXHRmdW5jdGlvbiBuYXZfbG9naWMoKSB7XHJcblxyXG5cdFx0c3dpdGNoKHNlY3Rpb24pIHtcclxuXHJcblx0XHRcdC8vLy8vLy8vIEhPTUUgLy8vLy8vLy8vXHJcblx0XHRcdGNhc2UgXCJob21lXCI6XHJcblx0XHRcdFx0Ly8gJCgnYm9keScpLmNzcygncGFkZGluZy10b3AnLCcwJyk7XHJcblx0XHRcdFx0bG9nby5jc3MoJ29wYWNpdHknLCcwJyk7XHJcblx0XHRcdFx0Ly8gJCgnLm5hdmJhciAubmF2YmFyLXJpZ2h0JykuY3NzKCdib3JkZXItYm90dG9tJywgJzFweCBzb2xpZCB3aGl0ZScpO1xyXG5cdFx0XHRcdG5hdmJhci5hZGRDbGFzcygnaG9tZS1uYXYnKTtcclxuXHJcblx0XHRcdFx0JCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdHZhciBzY3JvbGxQb3MgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCk7XHJcblxyXG5cdFx0XHRcdFx0aWYgKHNjcm9sbFBvcyA+IDI1MCkge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIuYWRkQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdFx0bG9nby5jc3MoJ29wYWNpdHknLCcxMDAnKTtcclxuXHRcdFx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0XHRcdG5hdmJhci5yZW1vdmVDbGFzcygnY2hhbmdlLW5hdicpO1xyXG5cdFx0XHRcdFx0XHRsb2dvLmNzcygnb3BhY2l0eScsJzAnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHJcblx0XHRcdGJyZWFrO1xyXG5cclxuXHRcdFx0Ly8vLy8vLy8gUE9SVEZPTElPIC8vLy8vLy8vL1xyXG5cdFx0XHRjYXNlIFwicG9ydGZvbGlvXCI6XHJcblxyXG5cdFx0XHRcdG5hdmJhciA9ICQoJy5uYXZiYXItZGVmYXVsdCcpO1x0XHRcclxuXHRcdFx0XHRuYXZiYXIuYWRkQ2xhc3MoJ25hdi1wb3J0Zm9saW8nKTtcclxuXHRcdFx0XHQkKCdib2R5JykuY3NzKCdiYWNrZ3JvdW5kLWNvbG9yJywnI2Y5ZjlmOScpO1xyXG5cdFx0XHRcdCQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24oKSB7XHJcblx0XHRcdFx0XHR2YXIgc2Nyb2xsUG9zID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xyXG5cclxuXHRcdFx0XHRcdGlmIChzY3JvbGxQb3MgPiAyNTApIHtcclxuXHRcdFx0XHRcdFx0bmF2YmFyLmFkZENsYXNzKCdjaGFuZ2UtbmF2Jyk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIucmVtb3ZlQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHJcblx0XHRcdGJyZWFrO1xyXG5cclxuXHJcblx0XHRcdC8vLy8vLy8vIEdFTkVSSUMgLy8vLy8vLy8vXHJcblx0XHRcdGRlZmF1bHQ6XHJcblx0XHRcdFx0JCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdFxyXG5cdFx0XHRcdFx0dmFyIHNjcm9sbFBvcyA9ICQod2luZG93KS5zY3JvbGxUb3AoKSxcclxuXHRcdFx0XHRcdG5hdmJhciAgID0gJCgnLm5hdmJhci1kZWZhdWx0Jyk7XHJcblx0XHRcdFx0XHRcclxuXHRcdFx0XHRcdGlmIChzY3JvbGxQb3MgPiAyNTApIHtcclxuXHRcdFx0XHRcdFx0bmF2YmFyLmFkZENsYXNzKCdjaGFuZ2UtbmF2Jyk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHRuYXZiYXIucmVtb3ZlQ2xhc3MoJ2NoYW5nZS1uYXYnKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHQgICAgfVxyXG5cclxuICAgIH1cclxuICAgIC8vIC0tLS0tLS0tLS0tIEVuZCBOYXZpZ2F0aW9uIFNjcmlwdCAtLS0tLS0tLS0tLS0gLy9cclxuXHJcbiAgICAvL0FjdGl2YXRlIG5hdiBlZmZlY3RzIGluIGRlc2t0b3BcclxuXHRpZiAoc2NyZWVuLndpZHRoID4gNzc1KSB7XHJcbiAgICAgICAgbmF2X2xvZ2ljKCk7XHJcbiBcdH0gZWxzZSB7XHJcblx0XHRcclxuXHR9XHJcblxyXG5cclxufSk7IC8vIERvY3VtZW50IFJlYWR5XHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL3Jlc291cmNlcy9hc3NldHMvanMvd2ViL3dlYi5qcyJdLCJzb3VyY2VSb290IjoiIn0=