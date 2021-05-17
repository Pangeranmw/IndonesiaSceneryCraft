
var navbar = document.querySelector("nav");
var cart = document.getElementById("cart");
var search = document.getElementById("search");
var logo = document.getElementById("logo");
var lang = document.getElementById("lang");
var mobileNav = document.getElementById("btnNav");
var mobile = window.matchMedia("(max-width: 845px)");
var mobileCart = document.getElementById("mobile-cart");
var mobileSearch = document.getElementById("mobile-search");
window.addEventListener("scroll", function () {
	if (!mobile.matches) {
		navbar.classList.toggle("main-color", window.scrollY > 20);
	}
});
if (mobile.matches){
	navbar.classList.add("main-color");
}
mobileNav.onclick = function changeNav() {
	navbar.classList.toggle("rounded-pill");
	cart.style.display = "none";
	logo.style.display = "none";
	lang.style.width = "25%";
	lang.style.margin = "0 auto";
	search.style.display = "none";
	mobileCart.style.display = "inline-block";
	mobileSearch.style.display = "inline-block";
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
