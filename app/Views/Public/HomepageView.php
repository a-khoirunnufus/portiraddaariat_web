<?= $this->extend('Public/LayoutView') ?>

<?= $this->section('style') ?>

<?= $this->endSection() ?>

<?= $this->section('text-header') ?>
<div class="flex-fill d-flex">
	<div class="jumbotron transparent align-self-center col">
		<h1 class="display-4 text-white">Program Terima Kasih</h1>
		<p class="lead text-white">"no one has become poor by giving"</p>
	</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
			<a href="<?= route_to('detail', $row['slug'] . '-' . $row['u_code']) ?>" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
		</div>
	</div>
	<?php else: ?>
	<div class="row hspace-md">
		<div class="col-6">
			<h4 class="font-weight-light"><?= $row['tanggal'] ?></h4>
			<h4 class="font-weight-bold"><?= $row['judul'] ?></h4>
			<i class="fa fa-map-marker" aria-hidden="true"></i><h4 class="d-inline font-weight-bold"> <?= $row['lokasi'] ?></h4>
			<p class="lead desc-kegiatan mt-5"><?= $row['deskripsi'] ?></p>
			<a href="<?= route_to('detail', $row['slug'] . '-' . $row['u_code']) ?>" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
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
				<h1 class="display-4 text-white">Ayo Bergabung Bersama Kami</h1>
				<a href="<?= route_to('bergabung') ?>" class="btn btn-alpha-grey"><span class="text-white">Bergabung Sekarang</span></a>
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
				<h1 class="display-4 text-white">Ayo Berdonasi</h1>
				<a href="<?= route_to('donasi') ?>" class="btn btn-alpha-grey"><span class="text-white">Donasi Sekarang</span></a>
			</div>
		</div>
	</div>

	<svg id="svg-berdonasi-bor-btm" width="1366" height="145" viewBox="0 0 1366 145" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M-11 111.5C86.3333 76.8333 198.147 49.6122 382.5 77.5C696.5 125 1009 125 1105.5 106.379C1228.69 82.6088 1422.83 10.8794 1512.5 0.379395V144.879H0L-11 111.5Z" fill="white"/>
	</svg>

</div>
<!-- ajakan berdonasi section end -->

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
	//membatasi panjang teks deskripsi
	for (var i = 0; i < document.querySelectorAll('.desc-kegiatan').length; i++) {
	  var truncated = document.querySelectorAll('.desc-kegiatan')[i].innerText
	  if (truncated.length > 400) {
	        truncated = truncated.substr(0,400) + '...';
	  }
	  document.querySelectorAll('.desc-kegiatan')[i].innerText = truncated;
	}
</script>
<?= $this->endSection() ?>