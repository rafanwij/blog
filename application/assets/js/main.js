/*
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel
		.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$wrapper = $('#page-wrapper'),
			$banner = $('#banner'),
			$header = $('#header');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');
			$('#promoImage').addClass('notYet');
			$('#curtain').addClass('notYet');
			$('#vision').addClass('notYet');
			$('#mission').addClass('notYet');
			var notYet = false;
			var isLoaded = false;

			function scrollHandler()
			{
				if(notYet&&window.pageYOffset>100)
					$('#promoImage').removeClass('notYet');
				if(window.pageYOffset==0)
					$('#promoImage').addClass('notYet');
				else if(window.pageYOffset<300&&isLoaded)
					$body.removeClass('is-loading');
				else if(window.pageYOffset>=2800)
					$('#mission').addClass('notYet');
				else if(window.pageYOffset>=2500)
					$('#vision').addClass('notYet');
				else if(window.pageYOffset>=2300)
					$('#vision').removeClass('notYet');
				else if(window.pageYOffset>=1800)
				{
					$('#curtain').addClass('notYet');
					$('#mission').removeClass('notYet');
				}
				else if(window.pageYOffset>=1600)
				{
					$('#mission').addClass('notYet');
					$('#curtain').removeClass('notYet');
					$('#vision').removeClass('notYet');
				}
				else if(window.pageYOffset>=1400)
					$('#vision').addClass('notYet');
				else if(window.pageYOffset>=1200)
					$('#promoImage').addClass('notYet');
				else if(window.pageYOffset>800)
					$('#curtain').removeClass('notYet');
				else
				{
					$('#curtain').addClass('notYet');
				}
			}

			$window.on('load', function() {
				window.setTimeout(function() {
					//if(window.pageYOffset<300)
					$body.removeClass('is-loading');
					notYet = true;
					isLoaded = true;
					if(window.pageYOffset>100)
						$('#promoImage').removeClass('notYet');
				}, 100);
				$window.scroll(scrollHandler);
				setTimeout(scrollHandler,150);
			});

		// Mobile?
			if (skel.vars.mobile)
				$body.addClass('is-mobile');
			else
				skel
					.on('-medium !medium', function() {
						$body.removeClass('is-mobile');
					})
					.on('+medium', function() {
						$body.addClass('is-mobile');
					});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// Scrolly.
			$('.scrolly')
				.scrolly({
					speed: 1500,
					offset: $header.outerHeight()
				});

		// Menu.
			$('#menu')
				.append('<a href="#menu" class="close"></a>')
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'right',
					target: $body,
					visibleClass: 'is-menu-visible'
				});

		// Header.
			if (skel.vars.IEVersion < 9)
				$header.removeClass('alt');

			if ($banner.length > 0
			&&	$header.hasClass('alt')) {

				$window.on('resize', function() { $window.trigger('scroll'); });

				$banner.scrollex({
					bottom:		$header.outerHeight() + 1,
					terminate:	function() { $header.removeClass('alt'); },
					enter:		function() { $header.addClass('alt'); },
					leave:		function() { $header.removeClass('alt'); }
				});

			}

	});

})(jQuery);
