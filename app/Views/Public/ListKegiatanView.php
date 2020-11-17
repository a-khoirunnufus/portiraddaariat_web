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
		<?php for($i = 0; $i<10; $i++): ?>
		<div class="row kegiatan-container d-flex mt-3">
			<div class="col-md-2 pl-0">
				<img src="<?= base_url('/assets/img/fotokegiatan01.jpg')?>" alt="foto kegiatan bersih bersih pantai">
			</div>
			<div class="col align-self-center">
				<div class="row d-flex flex-row align-items-center">
					<div class="col">
						<p>SENIN, O1 JANUARI 2020</p>
						<h5>World Clean up Day Banyuwangi</h5>
						<h5><i class="fa fa-map-marker" aria-hidden="true"></i> Pantai Parang Ireng</h5>
					</div>
					<div class="col-md-2">
						<button class="btn btn-primary">Lihat Detail</button>
					</div>
				</div>
			</div>
		</div>
		<?php endfor ?>
	</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>