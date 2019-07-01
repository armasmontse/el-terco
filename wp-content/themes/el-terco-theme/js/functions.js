/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(3);
	
	var _scrollit = __webpack_require__(4);
	
	var _scrollit2 = _interopRequireDefault(_scrollit);
	
	var _forms = __webpack_require__(5);
	
	var _forms2 = _interopRequireDefault(_forms);
	
	var _slider = __webpack_require__(6);
	
	var _slider2 = _interopRequireDefault(_slider);
	
	var _muted = __webpack_require__(7);
	
	var _muted2 = _interopRequireDefault(_muted);
	
	var _collapsible = __webpack_require__(8);
	
	var _collapsible2 = _interopRequireDefault(_collapsible);
	
	var _logoScroll = __webpack_require__(9);
	
	var _logoScroll2 = _interopRequireDefault(_logoScroll);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	(0, _constants.$)(document).ready(function () {
	
	     console.log('MENU');
	     var btnAbrir = (0, _constants.$)("#bolsa");
	     // var btnCerrar = $(".header__close-JS");
	     var menu = (0, _constants.$)(".sidebar");
	
	     var open = false;
	
	     btnAbrir.on("click", function () {
	
	          // Si está abierto hay que cerrarlo.
	          if (open == false) {
	               console.log('view');
	               menu.addClass('view');
	               btnAbrir.addClass('close');
	               open = true;
	          } else {
	               console.log('no view');
	               menu.removeClass('view');
	               btnAbrir.removeClass('close');
	               open = false;
	          }
	     });
	
	     // initializeForms();
	     (0, _slider2.default)();
	     (0, _scrollit2.default)();
	     (0, _collapsible2.default)();
	     (0, _muted2.default)();
	
	     new WOW().init();
	
	     var home = (0, _constants.$)('body.page-template-template-home');
	
	     if (home.length) {
	
	          _constants.$.scrollify({
	               section: ".section-scroll",
	               interstitialSection: ".footer, .about-footer",
	               sectionName: false
	               // standardScrollElements: ".about-footer",
	               // scrollSpeed:    2000,
	          });
	     }
	
	     (0, _logoScroll2.default)();
	
	     // Se cierran los warnings en el click
	     (0, _constants.$)("body").on("click", ".woocommerce-error", function () {
	          var error = (0, _constants.$)("body").find('.woocommerce-error');
	          error.hide();
	     });
	
	     (0, _constants.$)("body").on("click", ".woocommerce-message", function () {
	          var mensajes = (0, _constants.$)("body").find('.woocommerce-message');
	          mensajes.hide();
	     });
	
	     // --> se cierran los warnings en el click
	
	});
	
	_constants.w.scroll(function () {
	     (0, _logoScroll2.default)();
	});
	
	_constants.w.load(function () {
	
	     var splash = (0, _constants.$)('body.page-template-template-login');
	
	     if (splash.length) {
	
	          var video = document.getElementsByTagName("video")[0];
	
	          (0, _constants.$)('.splash__overlay').addClass('transition');
	          setTimeout(function () {
	               video.play();
	          }, 1000);
	
	          (0, _constants.$)('header').addClass('header__hidden');
	          (0, _constants.$)('footer').addClass('footer__hidden');
	     }
	});

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	     value: true
	});
	
	exports.default = function () {
	     $('a[href*="#"]:not([href="#"])').click(function (e) {
	          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	               e.preventDefault();
	               var target = $(this.hash);
	               target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	               if (target.length) {
	                    $('html, body').animate({
	                         scrollTop: target.offset().top - 0
	                    }, 2000);
	                    return false;
	               }
	          }
	     });
	};

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
		value: true
	});
	
	exports.default = function () {
		(0, _constants.$)(document).ready(function ($) {
	
			sendContactForm("contact_form_JS", "Cltvo_Contact_Form", {
				'contact_form_JS[Name]': 'required',
				'contact_form_JS[Email]': {
					required: true,
					email: true
				},
				'contact_form_JS[Message]': 'required'
			});
		});
	};
	
	var _constants = __webpack_require__(3);
	
	var sendContactForm = function sendContactForm(form_id, action, rules) {
		var $form = (0, _constants.$)('#' + form_id);
	
		if ($form.length > 0) {
	
			$form.validate({
	
				errorClass: 'error form__error form_error_JS',
	
				invalidHandler: function invalidHandler() {
					setTimeout(function () {
						var errors = $form.find('.form_error_JS').filter(function (i, el) {
							return el.style.display !== 'none';
						});
					}, 200);
				},
	
	
				submitHandler: function submitHandler(form, e) {
	
					e.stopPropagation();
					e.preventDefault();
	
					var $submit = (0, _constants.$)($form.find('input[type=submit]').get(0));
					var $error = $form.find('.post_error_JS');
					$submit.val('...Enviando');
					$error.text("");
	
					var data = (0, _constants.$)(form).serializeArray();
					data.push({ name: "action", value: action });
	
					var ajax = _constants.$.post(cltvo_js_vars.ajax_url, data);
	
					ajax.done(function (data) {
	
						if (typeof data.message !== "undefined" && data.message == "__okcode__") {
							$form.hide();
							(0, _constants.$)('#' + form_id + '_thank_JS').show();
						} else {
							$error.text('No podemos recibir tu información en este momento, intentalo más tarde.');
							$submit.val('Enviar');
						}
					});
	
					ajax.fail(function (data) {
						var response_json = data.responseJSON;
						$error.text(typeof response_json !== "undefined" && typeof response_json.message !== "undefined" ? response_json.message : 'No podemos recibir tu información en este momento, intentalo más tarde.');
						$submit.val('Enviar');
					});
				},
				rules: rules
			});
		}
	};

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	
	    (0, _constants.$)('.slider').slick({
	        autoplay: true,
	        autoplaySpeed: 4000,
	        dots: false,
	        arrows: false
	    });
	
	    (0, _constants.$)('.slider-footer').slick({
	        autoplay: true,
	        autoplaySpeed: 4000,
	        dots: false,
	        arrows: false
	    });
	};
	
	var _constants = __webpack_require__(3);

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	
	    var audio = (0, _constants.$)('audio');
	    var svgOn = (0, _constants.$)('.boton-mute__on');
	    var svgOff = (0, _constants.$)('.boton-mute__off');
	
	    (0, _constants.$)("#botonMute").click(function () {
	
	        if (audio.prop('muted')) {
	            audio.prop('muted', false);
	            svgOn.show();
	            svgOff.hide();
	
	            console.log('Muted false');
	        } else {
	            audio.prop('muted', true);
	            svgOff.show();
	            svgOn.hide();
	
	            console.log('Muted true');
	        }
	    });
	};
	
	var _constants = __webpack_require__(3);

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	    console.log('collapsible');
	    (0, _constants.$)('.collapsible').click(function () {
	        var $this = (0, _constants.$)(this);
	        $this.find('.collapsible-header').toggleClass('collapsible-icon');
	        $this.find('.collapsible-body').toggleClass('open');
	    });
	};
	
	var _constants = __webpack_require__(3);

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	     value: true
	});
	
	exports.default = function (scope) {
	
	     var mass;
	     var altura;
	     var position;
	     var lenguaje = (0, _constants.$)('.header__lenguaje');
	     var logo = (0, _constants.$)('.banner__logo');
	     var logoId = (0, _constants.$)('#logo_JS');
	
	     altura = _constants.w.height() * .45 || 0;
	
	     if (_constants.w.width() > 500) {
	          mass = Math.max(100, 230 - 0.16 * _constants.w.scrollTop()) + 'px';
	          position = Math.max(-30, 48 - 0.16 * _constants.w.scrollTop()) + 'px';
	     } else {
	          mass = Math.max(100, 230 - 0.3 * _constants.w.scrollTop()) + 'px';
	          position = Math.max(-26, 26 - 0.16 * _constants.w.scrollTop()) + 'px';
	     }
	
	     var maxMass = Math.max(100, 230 - 0.16 * altura) + 'px';
	
	     lenguaje.css({
	          'top': position
	     });
	
	     if (_constants.w.scrollTop() <= altura) {
	          logoId.css({
	               'width': mass
	          });
	     } else {
	          logoId.css({
	               'width': maxMass
	          });
	     }
	
	     if (_constants.w.scrollTop() <= altura) {
	          logo.removeClass('logo-fixed');
	     } else {
	          logo.addClass('logo-fixed');
	     }
	};
	
	var _constants = __webpack_require__(3);

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map