

$(document).ready(function () {
	// login 
	$("#login").click(function () {
		$("#load").show();
		$("#btn-acesso").hide();					
	})

	// slide inicial
	var swiperparceiro = new Swiper(".slide-parceiro", {
		loop: true,
		slidesPerView: 5,
		spaceBetween: 30,
		freeMode: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	// slide parceiro
	var swiper = new Swiper(".mySwiper", {
		loop: true,
		spaceBetween: 1200,
		centeredSlides: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
})

