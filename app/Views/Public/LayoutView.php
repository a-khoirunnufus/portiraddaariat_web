<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Portir Addariat Banyuwangi | <?= $title ?></title>
	
	<!-- style -->
	<link rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/font-awesome/all.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/style.css') ?>">
	<?= $this->renderSection('style') ?>
</head>
<body>
<!-- header section -->
	<div class="header">
		<div class="header-bg<?= $title == 'Homepage' ? '-homepage' : '-menu' ?>" <?= $this->renderSection('bg-header') ?> >
			<div class="container d-flex flex-column h-100">
				<?= $this->include('Public/navbar') ?>
				<?= $this->renderSection('text-header') ?>
			</div>
			<svg id="svg-header-bor-btm<?= $title == 'Homepage' ? '-homepage' : '-menu' ?>" width="1366" height="193" viewBox="0 0 1366 193" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M-56 107.5C5.83333 77.5 167.9 24.7 321.5 53.5C513.5 89.5 753 103.5 911.5 53.5C1070 3.49997 1375.5 -55.5 1484 107.5C1570.8 237.9 1459.83 190.5 1393.5 150.5H-56V107.5Z" fill="white"/>
			</svg>

		</div>
	</div>
<!-- header section end -->

<?= $this->renderSection('content') ?>

<!-- footer section -->
<div class="black hspace-lg">
<div class="container pt-4" style="width: 100%">
	<!-- <div class="row">
		<div class="col-4 mr-auto">
			<div class="navbar-brand" style="display: flex; align-items: center;"><img src="<?= base_url('assets/img/logo_portiraddariat2.png') ?>" width="72" height="72" class="d-inline-block align-top" alt=""><span class="text-white">PORTIR ADDAARIAT</span></div>
			<p class="lead text-white">Jajag Kel., Gambiran, Banyuwangi, Indonesia<br>Jajag, East Java 68486</p>
		</div>
		<div class="col-4 ml-auto pt-3">
			<p class="lead text-white">Ikuti kami di Instagram</p>
			<i class="fa fa-instagram" aria-hidden="true"></i><span class="text-white"> Portir Addaariat Banyuwangi</span>
		</div>
	</div> -->
	<div class="row">
		<div class="col-4 mx-auto">
			<p class="text-white" style="font-size: .8rem; text-align: center;">2020 Portir Addaariat Banyuwangi</p>
		</div>
	</div>
</div>
</div>
<!-- footer section end -->

<!-- script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

	//tampilan navbar berubah jika discroll
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

	//membatasi panjang teks deskripsi
	for (var i = 0; i < document.querySelectorAll('.desc-kegiatan').length; i++) {
	  var truncated = document.querySelectorAll('.desc-kegiatan')[i].innerText
	  if (truncated.length > 400) {
	        truncated = truncated.substr(0,400) + '...';
	  }
	  document.querySelectorAll('.desc-kegiatan')[i].innerText = truncated;
	}
});
</script>
<?= $this->renderSection('script') ?>

</body>
</html>