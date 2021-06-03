<body style="background-color: var(--bg);">
	<div class="hero" style="background-image: url('<?= BASEURL;?>/assets/images/hero-img.png');">
		<div class="mx-auto my-auto d-flex flex-column">
			<h1 id="hero-title" class="h1">
				Best Journey <br>
				From Indonesia
			</h1>
			<a href="<?= BASEURL;?>/destination" class="btn mx-auto px-5 py-3 fs-4">Explore</a>
		</div>
	</div>
	<div class="container my-5 px-5">
		<h4 class="text-center mb-2">Culture From Provincial Capitals</h4>
		<div class="row">
				<div class="owl-carousel owl-theme">
				<?php for($i = 0;$i<count($data['culture']);$i++) :?>
					<a href="">
						<div class="card-1 p-1 mt-3">
							<div class="card-img mx-auto mt-3" style="background-image: url(<?= BASEURL;?>/assets/images/<?= $data['culture'][$i]['gallery']?>);"></div>
							<div class="card-text text-center">
								<?= $data['culture'][$i]['nama_'.$_SESSION['lang'].'']?>
								<div class="text-location m-0">
									<?= ucwords(strtolower($data['culture'][$i]['nama_provinsi']))?>
								</div>
							</div>
						</div>
					</a>
				<?php endfor;?>
				</div>
		</div>
		<h4 class="mt-5">Recommended Destinations</h4>
		<div class="row mt-2 mb-5 justify-content-center align-items-center">
		<?php for($i = 0;$i<4;$i++) :?>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="">
					<div class="card-recommendation mt-3" style="background-image: url(<?= BASEURL;?>/assets/images/<?= $data['destination_gallery'][$i]['gallery']?>);">
						<div class="star"><img src="assets/images/ic-starlogo.svg" alt=""><?= $data['destination'][$i]['rating']?> Stars</div>
					</div>
					<div class="text-destination">
						<?= $data['destination'][$i]['nama_'.$_SESSION['lang'].'']?>
					</div>
					<div class="text-location">
						<?= ucwords(strtolower($data['destination'][$i]['nama_provinsi']))?>
					</div>
				</a>
			</div>
		<?php endfor;?>
		</div>
		<h4 class="mt-5">Most Rated Crafts</h4>
		<div class="row mt-2 mb-5 justify-content-center align-items-center">
		<?php for($i = 0;$i<4;$i++) :?>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="card-craft mt-3" style="background-image: url(<?= BASEURL;?>/assets/images/<?= $data['craft'][$i]['gallery']?>);">
				</div>
				<div class="rating mt-3 mt-3">
					<?php 	$j=0;
							while($j<$data['craft'][$i]['rating']):?>
						<span class="fa fa-star" style="color: orange; font-size: 18px;"></span>
					<?php 	$j++;
							endwhile;?>
				</div>
				<a href=""><div class="text-craft"><?= $data['craft'][$i]['nama_'.$_SESSION['lang'].'']?></div></a>
				<div class="text-price">
					Rp <?= str_replace(',','.',(number_format($data['craft'][$i]['harga'])));?>
				</div>
			</div>
		<?php endfor;?>
		</div>
		<div class="what-they-say mt-5">
			<h4>What They Say</h4>
			<div class="row mt-2 mb-5">
				<div class="col-lg-4 col-md-5 col-sm-12">
					<div class="page-header destination-image">
						<img class="" style="background-image: url('<?= BASEURL;?>/assets/images/prambanan.jpg');"alt="">
						<div class="mask bg-gradient-dark opacity-6"></div>
						<p class="text-location fs-5 text-center">Prambanan</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-7 col-sm-12">
					<div class="star d-flex align-content-center">
						<img src="assets/images/ic-blackstar.svg" alt="">
						<p class="ms-2">5 Stars</p>
					</div>
					<div class="review-title">
						<h4 class="fs-3">Awesome Trip</h4>
					</div>
					<div class="review-text">
						<p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ea nobis atque ratione ad tempora non illo nemo, temporibus dolore recusandae, aperiam qui perspiciatis eveniet repellat illum quae at quisquam? Sed sequi explicabo id quas labore doloribus. Vel, sapiente earum? Reiciendis impedit qui minus, error distinctio itaque voluptatibus, assumenda, cumque ipsa eaque nobis facilis ducimus quod sint rerum labore temporibus..</p>
					</div>
					<div class="d-flex user-profile">
						<img src="<?= BASEURL;?>/assets/images/Profile.jpg" alt="">
						<div class="row ms-2">
							<div class="col-12">
								<p class="fs-4 name">Pangeran Muhammad</p>
							</div>
							<div class="col-12">
								<p class="fs-5 profession">Traveler</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="<?= BASEURL;?>/assets/vendor/jquery.min.js"></script>
<script src="<?= BASEURL;?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script>
	window.addEventListener("scroll", function () {
		var mobile = window.matchMedia("(max-width: 845px)");
		var navbar = document.querySelector("nav");
		if (!mobile.matches ) {
				navbar.classList.toggle("main-color", window.scrollY > 20);
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
					"<img src=''. BASEURL .'/assets/images/prev.png'>",
					"<img src=''. BASEURL .'/assets/images/next.png'>",
			],
		});
	});
</script>
