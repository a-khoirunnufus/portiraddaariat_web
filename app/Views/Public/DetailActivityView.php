<?php 
	$judul = $post['judul'];
	$tanggal = $post['tanggal'];
	$lokasi = $post['lokasi'];
	$deskripsi = $post['deskripsi'];
	$foto = json_decode($post['foto']);
?>

<?= $this->extend('Public/LayoutView') ?>

<?= $this->section('bg-header') ?> 
	style="background-image: url('<?= base_url() . '/uploads/imgs/' . $foto['0'] ?>')"
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container hspace-xs">
	<div class="row d-flex flex-row align-items-center">
		<div class="card-tanggal mr-5">
			<div class="card-tanggal-innershape"></div>
			<span class="card-tanggal-text"><?= substr($tanggal,8,2) ?></span>
		</div>
		<h4 class="font-weight-bold"><?= $judul ?></h4>
	</div>
	<div class="row hspace-xs d-flex flex-column align-items-left">
		<h4 class="font-weight-bold mb-4">Detail</h4>
		<p class="lead">Tanggal : <?= $tanggal?></p>
		<p class="lead">Lokasi : <?= $lokasi ?></p>
		<p class="lead"><?= $deskripsi ?></p>
	</div>

	<div class="row hspace-xs d-flex flex-column align-items-left">
		<h4 class="font-weight-bold mb-4">Foto Kegiatan</h4>
		<div class="container">
			<div class="img-grid">
				<?php foreach ($foto as $item): ?>
				<img src="<?= base_url().'/uploads/imgs/'.$item ?>" alt="">
				<?php endforeach ?>
				<img src="https://static.pexels.com/photos/356056/pexels-photo-356056.jpeg" alt="">
				<img src="https://static.pexels.com/photos/96381/pexels-photo-96381.jpeg" alt="">
				<img src="https://static.pexels.com/photos/450035/pexels-photo-450035.jpeg" alt="">
				<img src="https://static.pexels.com/photos/373076/pexels-photo-373076.jpeg" alt="">
				<img src="https://static.pexels.com/photos/158826/structure-light-led-movement-158826.jpeg" alt="">
				<img src="https://static.pexels.com/photos/50711/board-electronics-computer-data-processing-50711.jpeg" alt="">
				<img src="https://static.pexels.com/photos/247932/pexels-photo-247932.jpeg" alt="">
				<img src="https://static.pexels.com/photos/96381/pexels-photo-96381.jpeg" alt="">
				<img src="https://static.pexels.com/photos/450035/pexels-photo-450035.jpeg" alt="">				
			</div>
		</div>
	</div>


	

</div>

<?= $this->endSection() ?>