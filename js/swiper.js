const swiper = new Swiper('.image-slider', {
	direction: 'horizontal',
	loop: true,
	effect: 'coverflow',
    spaceBetween: 30,
	
	navigation: {
		nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
	},
});
