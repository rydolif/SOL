/**
 * demo1.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2017, Codrops
 * http://www.codrops.com
 */
{
	const DOM = {};
	DOM.intro = document.querySelector('.content--intro');
	DOM.shape = DOM.intro.querySelector('svg.shape');
	DOM.path = DOM.shape.querySelector('path');
	DOM.enter = document.querySelector('.scroll');
	charming(DOM.enter);
	DOM.enterLetters = Array.from(DOM.enter.querySelectorAll('span'));
	// Set the SVG transform origin.
	DOM.shape.style.transformOrigin = '50% 0%';

	const init = () => {
		imagesLoaded(document.body, {background: true} , () => document.body.classList.remove('loading'));
		DOM.enter.addEventListener('click', navigate);
		DOM.enter.addEventListener('touchenter', navigate);
	};

	let loaded;
	const navigate = () => {
		if ( loaded ) return;
		loaded = true;

		anime({
			targets: DOM.intro,
			duration: 1100,
			easing: 'easeInOutSine',
			translateY: '-200vh'
		});
		
		anime({
			targets: DOM.shape,
			scaleY: [
				{value:[0.8,1.8],duration: 550,easing: 'easeInQuad'},
				{value:1,duration: 550,easing: 'easeOutQuad'}
			]
		});

		anime({
			targets: DOM.path,
			duration: 1100,
			easing: 'easeOutQuad',
			d: DOM.path.getAttribute('pathdata:id')
		});
	};

	let isActive;
	let enterTimeout;

	init();
    $(document).ready(function($) {
        $('.progress_bar').fadeIn(300).animate(
            {width:'100%'},
            {duration:2500,}
        ).fadeOut(100);
        function func() {
            navigate();
        }
        setTimeout(func, 2500);
    });
};