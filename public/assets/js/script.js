
var navbar = document.querySelector("nav");
var cart = document.getElementById("cart");
var mobileNav = document.getElementById("btnNav");
var mobile = window.matchMedia("(min-width: 845px)");
var mobileCart = document.getElementById("mobile-cart");
window.addEventListener("scroll", function () {
	if (mobile.matches) {
		navbar.classList.toggle("main-color", window.scrollY > 20);
	}
});
if (!mobile.matches){
	navbar.classList.add("main-color");
}
mobileNav.onclick = function changeNav() {
	cart.style.display = "none";
	mobileCart.style.display = "inline-block";
};


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
			"<img src='http://localhost/ISC/public/assets/images/next.png'>",
		],
	});
});
