
window.addEventListener("scroll", function () {
	var x = window.matchMedia("(min-width: 700px)");
	var navbar = document.querySelector("nav");
	var cart = document.getElementById("cart");
	if (x.matches) {
		navbar.classList.toggle("main-color", window.scrollY > 20);
	} else {
		cart.remove();
		// navbar.classList.add("main-color");
	}
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
			"<img src='http://localhost/ISC/public/assets/images/next.png'>",
		],
	});
});

var win = navigator.platform.indexOf("Win") > -1;
if (win && document.querySelector("#sidenav-scrollbar")) {
	var options = {
		damping: "0.5",
	};
	Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
}

// var ctx = document.getElementById("chart-bars").getContext("2d");

// new Chart(ctx, {
// 	type: "bar",
// 	data: {
// 		labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
// 		datasets: [{
// 			label: "Sales",
// 			tension: 0.4,
// 			borderWidth: 0,
// 			pointRadius: 0,
// 			backgroundColor: "#fff",
// 			data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
// 			maxBarThickness: 6
// 		}, ],
// 	},
// 	options: {
// 		responsive: true,
// 		maintainAspectRatio: false,
// 		legend: {
// 			display: false,
// 		},
// 		tooltips: {
// 			enabled: true,
// 			mode: "index",
// 			intersect: false,
// 		},
// 		scales: {
// 			yAxes: [{
// 				gridLines: {
// 					display: false,
// 				},
// 				ticks: {
// 					suggestedMin: 0,
// 					suggestedMax: 500,
// 					beginAtZero: true,
// 					padding: 0,
// 					fontSize: 14,
// 					lineHeight: 3,
// 					fontColor: "#fff",
// 					fontStyle: 'normal',
// 					fontFamily: "Open Sans",
// 				},
// 			}, ],
// 			xAxes: [{
// 				gridLines: {
// 					display: false,
// 				},
// 				ticks: {
// 					display: false,
// 					padding: 20,
// 				},
// 			}, ],
// 		},
// 	},
// });

// var ctx2 = document.getElementById("chart-line").getContext("2d");

// var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

// gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
// gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
// gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

// var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

// gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
// gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
// gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

// new Chart(ctx2, {
// 	type: "line",
// 	data: {
// 		labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
// 		datasets: [{
// 				label: "Mobile apps",
// 				tension: 0.4,
// 				borderWidth: 0,
// 				pointRadius: 0,
// 				borderColor: "#cb0c9f",
// 				borderWidth: 3,
// 				backgroundColor: gradientStroke1,
// 				data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
// 				maxBarThickness: 6

// 			},
// 			{
// 				label: "Websites",
// 				tension: 0.4,
// 				borderWidth: 0,
// 				pointRadius: 0,
// 				borderColor: "#3A416F",
// 				borderWidth: 3,
// 				backgroundColor: gradientStroke2,
// 				data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
// 				maxBarThickness: 6

// 			},
// 		],
// 	},
// 	options: {
// 		responsive: true,
// 		maintainAspectRatio: false,
// 		legend: {
// 			display: false,
// 		},
// 		tooltips: {
// 			enabled: true,
// 			mode: "index",
// 			intersect: false,
// 		},
// 		scales: {
// 			yAxes: [{
// 				gridLines: {
// 					borderDash: [2],
// 					borderDashOffset: [2],
// 					color: '#dee2e6',
// 					zeroLineColor: '#dee2e6',
// 					zeroLineWidth: 1,
// 					zeroLineBorderDash: [2],
// 					drawBorder: false,
// 				},
// 				ticks: {
// 					suggestedMin: 0,
// 					suggestedMax: 500,
// 					beginAtZero: true,
// 					padding: 10,
// 					fontSize: 11,
// 					fontColor: '#adb5bd',
// 					lineHeight: 3,
// 					fontStyle: 'normal',
// 					fontFamily: "Open Sans",
// 				},
// 			}, ],
// 			xAxes: [{
// 				gridLines: {
// 					zeroLineColor: 'rgba(0,0,0,0)',
// 					display: false,
// 				},
// 				ticks: {
// 					padding: 10,
// 					fontSize: 11,
// 					fontColor: '#adb5bd',
// 					lineHeight: 3,
// 					fontStyle: 'normal',
// 					fontFamily: "Open Sans",
// 				},
// 			}, ],
// 		},
// 	},
// });
