<!DOCTYPE html>
<html>
<head>
	<title>PORTIR ADDAARIAT</title>
	
	<!-- style -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/all.min.css">
	<link rel="stylesheet" href="assets/style.css">

	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- header section -->
	<div class="header">
		<div class="tagline-bg">
			<div class="container d-flex flex-column h-100">
				<?= $this->include('Public/navbar') ?>
				<div class="flex-fill d-flex">
					<div class="jumbotron transparent align-self-center col-6">
						<h1 class="display-4 text-white">Hello, world!</h1>
						<p class="lead text-white">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					</div>
				</div>
			</div>
			<svg id="svg-header-bor-btm-homepage" width="1366" height="193" viewBox="0 0 1366 193" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M-56 107.5C5.83333 77.5 167.9 24.7 321.5 53.5C513.5 89.5 753 103.5 911.5 53.5C1070 3.49997 1375.5 -55.5 1484 107.5C1570.8 237.9 1459.83 190.5 1393.5 150.5H-56V107.5Z" fill="white"/>
			</svg>

		</div>
	</div>
<!-- header section end -->

<?= $this->renderSection('style') ?>

<svg width="0" height="0">
	<defs>
		<clipPath id="border-foto-kegiatan1">
			<path d="M480.5 267C480.5 142.502 435 129 377.428 58.0888C275.495 -67.4613 -18.5723 33.5888 1.92764 151.089C71 267 38.4276 298.089 40.4276 370.089C42.4276 442.089 164 467.589 315.928 467.589C412.5 467.589 480.5 362.42 480.5 267Z" fill="#C4C4C4"/>
		</clipPath>
	</defs>
</svg>

<svg width="0" height="0">
	<defs>
		<clipPath id="border-foto-kegiatan2">
			<path d="M5.39325 299.351C-10.9794 205.269 5.39325 105.566 118.204 59.1405C430.482 -69.3721 513.543 34.619 493.077 152.222C409.717 271.827 456.638 299.351 454.642 371.414C452.645 443.478 332.845 469 179.602 469C69.7133 433.38 21.7659 393.434 5.39325 299.351Z" fill="#C4C4C4"/>
		</clipPath>
	</defs>
	
</svg>


<!-- kegiatan section -->
<div class="container hspace-xs">
	<?php $index_kegiatan = 1 ?>
	<?php foreach ($post as $row): ?>
	<?php if($index_kegiatan % 2 != 0): ?>
	<div class="row hspace-md">
		<div class="col-6">
			<?php $photos = json_decode($row['foto']); ?>
			<img class="clip-svg-kegiatan1 thumbnail-kegiatan" src="<?= '/uploads/imgs/' . $photos[0] ?>">
		</div>
		<div class="col-6">
			<h4 class="font-weight-light"><?= $row['tanggal'] ?></h4>
			<h4 class="font-weight-bold"><?= $row['judul'] ?></h4>
			<i class="fa fa-map-marker" aria-hidden="true"></i><h4 class="d-inline font-weight-bold"> <?= $row['lokasi'] ?></h4>
			<p class="lead desc-kegiatan mt-5"><?= $row['deskripsi'] ?></p>
			<div type="button" class="btn btn-primary mt-3">Lihat Selengkapnya</div>
		</div>
	</div>
	<?php else: ?>
	<div class="row hspace-md">
		<div class="col-6">
			<h4 class="font-weight-light"><?= $row['tanggal'] ?></h4>
			<h4 class="font-weight-bold"><?= $row['judul'] ?></h4>
			<i class="fa fa-map-marker" aria-hidden="true"></i><h4 class="d-inline font-weight-bold"> <?= $row['lokasi'] ?></h4>
			<p class="lead desc-kegiatan mt-5"><?= $row['deskripsi'] ?></p>
			<div type="button" class="btn btn-primary mt-3">Lihat Selengkapnya</div>
		</div>
		<div class="col-6">
			<?php $photos = json_decode($row['foto']); ?>
			<img class="clip-svg-kegiatan2 thumbnail-kegiatan" src="<?= '/uploads/imgs/' . $photos[0] ?>">
		</div>
	</div>
	<?php endif ?>
	<?php $index_kegiatan = $index_kegiatan + 1 ?>
	<?php endforeach ?>
</div>
<!-- kegiatan section end -->


<!-- ajakan bergabung section-->
<div class="bergabung-bg hspace-xl">
	<svg id="svg-bergabung-bor-top" width="1366" height="143" viewBox="0 0 1366 143" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M-52 110.5C-25.6667 98.4999 60 81.6999 192 110.5C324 139.3 550 92.1666 646.5 64.9999C745.333 40.9999 994.1 16.4999 1198.5 110.5C1402.9 204.5 1477.67 69.3333 1495 0H-52V110.5Z" fill="white"/>
	</svg>

	<div class="container d-flex h-100">
		<div class="col-5 ml-auto align-self-center">
			<div class="jumbotron transparent">
				<h1 class="display-4 text-white">Hello, world!</h1>
				<button type="button" class="btn btn-alpha-grey"><span class="text-white">Bergabung Sekarang</span></button>
			</div>
		</div>
	</div>

	<svg id="svg-bergabung-bor-btm" width="1366" height="143" viewBox="0 0 1366 143" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1457 32.1627C1430.67 44.1627 1345 60.9627 1213 32.1627C1081 3.36267 855 50.496 758.5 77.6627C659.667 101.663 410.9 126.163 206.5 32.1627C2.09998 -61.8373 -72.6666 73.3293 -90 142.663L1457 142.663V32.1627Z" fill="white"/>
	</svg>

</div>
<!-- ajakan bergabung section end -->


<!-- ajakan berdonasi section -->
<div class="bergabung-bg hspace-xl">
	<svg id="svg-berdonasi-bor-top" width="1366" height="150" viewBox="0 0 1366 150" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M-47 115.5C140 37.5 334.851 85.4691 459.5 115.5C611 152 833.333 160.667 966 133.5C1060.17 102.667 1286.5 55.9 1438.5 115.5C1590.5 175.1 1476.17 63.3333 1400 0L-47 14V115.5Z" fill="white"/>
	</svg>


	<div class="container d-flex h-100">
		<div class="col-6 mr-auto align-self-center">
			<div class="jumbotron transparent align-self-center">
				<h1 class="display-4 text-white">Hello, world!</h1>
				<button type="button" class="btn btn-alpha-grey"><span class="text-white">Donasi Sekarang</span></button>
			</div>
		</div>
	</div>

	<svg id="svg-berdonasi-bor-btm" width="1366" height="145" viewBox="0 0 1366 145" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M-11 111.5C86.3333 76.8333 198.147 49.6122 382.5 77.5C696.5 125 1009 125 1105.5 106.379C1228.69 82.6088 1422.83 10.8794 1512.5 0.379395V144.879H0L-11 111.5Z" fill="white"/>
	</svg>

</div>
<!-- ajakan berdonasi section end -->

<!-- footer section -->
<div class="black hspace-lg">
<div class="container pt-4" style="width: 100%">
	<div class="row">
		<div class="col-4 mr-auto">
			<div class="navbar-brand" style="display: flex; align-items: center;"><img src="assets/img/logo_portiraddariat2.png" width="72" height="72" class="d-inline-block align-top" alt=""><span class="text-white">PORTIR ADDAARIAT</span></div>
			<p class="lead text-white">Jajag Kel., Gambiran, Banyuwangi, Indonesia<br>Jajag, East Java 68486</p>
		</div>
		<div class="col-4 ml-auto pt-3">
			<p class="lead text-white">Ikuti kami di Instagram</p>
			<i class="fa fa-instagram" aria-hidden="true"></i><span class="text-white"> Portir Addaariat Banyuwangi</span>
		</div>
	</div>
	<div class="row hspace-sm">
		<div class="col-4 mx-auto">
			<p class="text-white" style="font-size: .8rem; text-align: center;">2020 Portir Addaariat Banyuwangi</p>
		</div>
	</div>
</div>
</div>
<!-- footer section end -->

<script>
$(document).ready(function(){
	$('.navbar-brand').attr("style", "visibility: hidden");
	$(window).scroll(function () {		
		if ($(this).scrollTop() >  98) {
			$('#top-navbar').addClass('navbar-solid').removeClass('bg-transparent');
			$('.navbar-brand').attr("style", "visibility: visible");
		} else {
			$('#top-navbar').addClass('bg-transparent').removeClass('navbar-solid');
			$('.navbar-brand').attr("style", "visibility: hidden");
		}
	});

});

for (var i = 0; i < document.querySelectorAll('.desc-kegiatan').length; i++) {
  var truncated = document.querySelectorAll('.desc-kegiatan')[i].innerText
  if (truncated.length > 400) {
        truncated = truncated.substr(0,400) + '...';
  }
  document.querySelectorAll('.desc-kegiatan')[i].innerText = truncated;
}

</script>

</body>
</html>