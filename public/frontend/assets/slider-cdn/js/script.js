(function() {

	$(document).ready(function() {

		var options = {
			ovalWidth: 400,
			ovalHeight: 50,
			offsetX: 100,
			offsetY: 325,
			angle: 0,
			activeItem: 0,
			duration: 350,
			className: 'item'
		}

		var cstmcarousel = $('.cstmcarousel').CircularCarousel(options);

		/* Fires when an item is about to start it's activate animation */
		// cstmcarousel.on('itemBeforeActive', function(e, item) {
		// 	$(item).css('box-shadow', '0 0 20px blue');
		// });

		/* Fires after an item finishes it's activate animation */
		// cstmcarousel.on('itemActive', function(e, item) {
		// 	$(item).css('box-shadow', '0 0 20px green');
		// });

		/* Fires when an active item starts it's de-activate animation */
		// cstmcarousel.on('itemBeforeDeactivate', function(e, item) {
		// 	$(item).css('box-shadow', '0 0 20px yellow');
		// })

		/* Fires after an active item has finished it's de-activate animation */
		cstmcarousel.on('itemAfterDeactivate', function(e, item) {
			$(item).css('box-shadow', '');
		})

		
		/* Previous button */
		$('.controls .previous').click(function(e) {
			cstmcarousel.cycleActive('previous');
			e.preventDefault();
		});

		/* Next button */
		$('.controls .next').click(function(e) {
			cstmcarousel.cycleActive('next');
			e.preventDefault();
		});

		/* Manaully click an item anywhere in the carousel */
		$('.item').click(function(e) {
			var index = $(this).index('li');
			cstmcarousel.cycleActive(index);
			e.preventDefault();
		});
	
	});

})();