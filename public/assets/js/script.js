
var navbar = document.querySelector("nav");
var cart = document.getElementById("cart");
var logo = document.getElementById("logo");
var lang = document.getElementById("lang");
var mobileNav = document.getElementById("btnNav");
var mobile = window.matchMedia("(max-width: 845px)");
var mobileCart = document.getElementById("mobile-cart");
var mobileSearch = document.getElementById("mobile-search");

// toggle review
function toggleReview() {
	var x = document.getElementById("toggleReview");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
// var btnDeleteCategory = document.getElementById("close");
// var categorySelected = document.getElementById("category-selected");
var categoryItem = document.getElementsByClassName("category-item");
var deleteItem = function(index) {
	for (var i = 0; i < categoryItem.length; i++) {
		if (i == index) {
			categoryItem[i].parentNode.removeChild(categoryItem[i]);
			break;
		}
	}
};
var deleteButtons = document.getElementsByClassName("close");
for (var i = 0; i < deleteButtons.length; i++) {
(function (index) {
	deleteButtons[i].addEventListener(
		"click",
		function () {
			deleteItem(index);
		},
		false
		);
	})(i);
}
if (mobile.matches){
	navbar.classList.toggle("main-color");
	navbar.classList.remove("rounded-pill");
	cart.style.display = "none";
	logo.style.display = "none";
	lang.style.width = "25%";
	lang.style.margin = "0 auto";
	mobileCart.style.display = "inline-block";
	mobileSearch.style.display = "inline-block";
} else {
	navbar.classList.add("rounded-pill");
	cart.style.display = "block";
	logo.style.display = "block";
	lang.style.width = "100%";
	lang.style.margin = "auto 0";
	mobileCart.style.display = "none";
	mobileSearch.style.display = "none";
}
mobileNav.onclick = function changeNav() {
	navbar.classList.toggle("rounded-pill");
	cart.style.display = "none";
	logo.style.display = "none";
	lang.style.width = "25%";
	lang.style.margin = "0 auto";
	mobileCart.style.display = "inline-block";
	mobileSearch.style.display = "inline-block";
};
