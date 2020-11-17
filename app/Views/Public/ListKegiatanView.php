<?php 
	$listkegiatan = $posts;
?>

<?= $this->extend('Public/LayoutView') ?>

<?= $this->section('style') ?>
<style>
.tab-option{
	padding: 15px;
	border-bottom: 3px solid rgba(0,0,0,0);
	transition: .3s;
}
.tab-option:hover{
	cursor: pointer;
	border-bottom: 3px solid black;
}

.kegiatan-container{
	border-radius: 10px;
	box-shadow: 0px 0px 4px grey;
}

.kegiatan-container > div > img{
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
	max-width: 100%;
	min-height: 120px;
	object-fit: cover;
	background-position: center;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('bg-header') ?> 
	style="background-image: url('<?= base_url('/assets/img/fotokegiatan03.jpg')?>')"
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container hspace-xs">
	<h4>List Kegiatan</h4>
	<!-- <div class="row">
		<div class="tab-option">
			<h4>Kegiatan yang Akan Datang</h4>
		</div>
		<div class="tab-option">
			<h4>Kegiatan yang Telah Lewat</h4>
		</div>
	</div> -->

	<div class="hspace-xs">
		<?php foreach($listkegiatan as $kegiatan): ?>
		<?php $foto = json_decode($kegiatan['foto']); ?>
		<div class="row kegiatan-container d-flex mt-3">
			<div class="col-md-2 pl-0">
				<img src="<?= base_url().'/uploads/imgs/'.$foto[0] ?>" alt="foto kegiatan bersih bersih pantai">
			</div>
			<div class="col align-self-center">
				<div class="row d-flex flex-row align-items-center">
					<div class="col">
						<p><?= $kegiatan['tanggal'] ?></p>
						<h5><?= $kegiatan['judul'] ?></h5>
						<h5><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $kegiatan['lokasi'] ?></h5>
					</div>
					<div class="col-md-2">
						<a href="<?= route_to('detail', $kegiatan['slug'] . '-' . $kegiatan['u_code']) ?>" class="btn btn-primary mt-3">Lihat Detail</a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>