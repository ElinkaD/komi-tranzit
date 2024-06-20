const swiper = new Swiper('.image-slider', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	effect: 'coverflow',
    spaceBetween: 30,
	

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
	},
});
