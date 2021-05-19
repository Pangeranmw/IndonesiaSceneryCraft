
var navbar = document.querySelector("nav");
var cart = document.getElementById("cart");
var search = document.getElementById("search");
var logo = document.getElementById("logo");
var lang = document.getElementById("lang");
var hT = document.getElementById("hero-title");
var mobileNav = document.getElementById("btnNav");
var mobile = window.matchMedia("(max-width: 845px)");
var mobileCart = document.getElementById("mobile-cart");
var mobileSearch = document.getElementById("mobile-search");

if (mobile.matches){
	hT.style.fontSize = "6vh";
	navbar.classList.toggle("main-color");
	navbar.classList.remove("rounded-pill");
	cart.style.display = "none";
	logo.style.display = "none";
	lang.style.width = "25%";
	lang.style.margin = "0 auto";
	search.style.display = "none";
	mobileCart.style.display = "inline-block";
	mobileSearch.style.display = "inline-block";
} else {
	navbar.classList.add("rounded-pill");
	cart.style.display = "block";
	logo.style.display = "block";
	lang.style.width = "100%";
	lang.style.margin = "auto 0";
	search.style.display = "block";
	mobileCart.style.display = "none";
	mobileSearch.style.display = "none";
}
// mobileNav.onclick = function changeNav() {
// 	navbar.classList.toggle("rounded-pill");
// 	cart.style.display = "none";
// 	logo.style.display = "none";
// 	lang.style.width = "25%";
// 	lang.style.margin = "0 auto";
// 	search.style.display = "none";
// 	mobileCart.style.display = "inline-block";
// 	mobileSearch.style.display = "inline-block";
// };


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
