window.addEventListener("scroll", function () {
	var navbar = document.querySelector("nav");
	navbar.classList.toggle("main-color", window.scrollY > 20);
});

$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		margin: 20,
		nav: true,
		dots: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 4,
			},
		},
		navText: [
			"<img src='http://localhost/ISC/public/assets/images/prev.png'>",
			"<img src='http://localhost/ISC/public/assets/images/next.png'>"
		],
	});
});
