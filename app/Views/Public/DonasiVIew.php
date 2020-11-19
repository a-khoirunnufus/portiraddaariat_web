<?= $this->extend('Public/LayoutView') ?>

<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('img-bgheader') ?>
<img class="img-bg-header bg-filterdark" src="<?= base_url('/assets/img/fotokegiatan03.jpg')?>">
<?= $this->endSection() ?>

<?= $this->section('text-header') ?>
<div class="flex-fill d-flex">
	<div class="jumbotron transparent align-self-center mx-auto">
		<h1 class="display-4 text-white">Donasi</h1>
	</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container hspace-sm">
	<h4>Ayo Berdonasi!</h4>
	<p class="lead">Bantulah mereka yang membutuhkan</p>
	<div class="row hspace-sm">
		<div class="col-lg-6 col-md-12">
			<h4 class="mb-4">Via Rekening</h4>
			<p class="lead">Nomor Rekening : 0793019637</p>
		</div>
		<div class="col-lg-6 col-md-12 pl-lg-5 mt-lg-0 mt-5">
			<h4 class="mb-4">Via Linkaja & Dana</h4>
			<p class="lead">Nomor HP : 0852-3607-4020</p>
		</div>
	</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>