<?= $this->extend('Public/LayoutView') ?>

<?= $this->section('style') ?>
<style>
.card-tanggal{
	width: 100px;
	height: 100px;
	border-radius: 10px;
	box-shadow: 0px 0px 5px grey;
	text-align: center;
}
.card-tanggal-innershape{
	width: 100%;
	height: 20%;
	background-color: red;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}
.card-tanggal-text{
	font-size: 48px;
}

.foto-kegiatan-container{
	overflow: hidden;
}

.foto-kegiatan{
  max-width: 100%;
  min-height: 175px;
  object-fit: cover;
  background-position: center;
  transition: 0.3s;
}

.foto-kegiatan:hover {
  opacity: 0.5;
  cursor: pointer;
}

.img-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: repeat(2, 175px);
  grid-gap: 5px;
}

/* The Modal (background) */
.modal-fotokegiatan {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 20vh; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-fotokegiatan-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  height: 70%;
  object-fit: contain;
}

/* Caption of Modal Image */
#caption-fotokegiatan {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 20%;
}

/* Add Animation */
.modal-fotokegiatan-content, #caption-fotokegiatan {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close-modal {
  position: fixed;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close-modal:hover,
.close-modal:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('bg-header') ?> 
	style="background-image: url('<?= base_url('/assets/img/fotokegiatan01.jpg')?>')"
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container hspace-xs">
	<div class="row d-flex flex-row align-items-center">
		<div class="card-tanggal mr-5">
			<div class="card-tanggal-innershape"></div>
			<span class="card-tanggal-text"><?= 19 ?></span>
		</div>
		<h4 class="font-weight-bold">World Clean up Day Banyuwangi</h4>
	</div>
	<div class="row hspace-xs d-flex flex-column align-items-left">
		<h4 class="font-weight-bold mb-4">Detail</h4>
		<p class="lead">Tanggal : 19 September 2020</p>
		<p class="lead">Lokasi : Pantai Parang Ireng</p>
		<p class="lead">World Clean up Day Banyuwangi, Portir Addaariat Banyuwangi 📍Pantai Parang Ireng. #worldcleanupday #wcdbanyuwangi #portir #portiraddaariat</p>
	</div>

	<div class="row hspace-xs d-flex flex-column align-items-left">
		<h4 class="font-weight-bold mb-4">Foto Kegiatan</h4>
		<div class="container">
			<div class="img-grid">
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan01.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan02.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan03.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan04.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan05.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan06.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan07.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan08.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan09.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>
				<div class="foto-kegiatan-container">
					<img class="foto-kegiatan" src="<?= base_url('/assets/img/fotokegiatan10.jpg')?>" alt="foto kegiatan bersih bersih pantai">
				</div>			
			</div>
		</div>
	</div>
</div>

<!-- modal foto kegiatan -->
<div id="modal-foto" class="modal-fotokegiatan">
  <span class="close-modal">&times;</span>
  <img class="modal-fotokegiatan-content" id="img-modal-fotokegiatan">
  <div id="caption-fotokegiatan"></div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$(document).ready(function(){
	// Get the modal
	var modal = document.getElementById("modal-foto");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close-modal")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}

	for (var i = 0; i < document.querySelectorAll('.foto-kegiatan').length; i++) {
		document.querySelectorAll('.foto-kegiatan')[i].onclick = function() {
		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = this;
		var modalImg = document.getElementById("img-modal-fotokegiatan");
		var captionText = document.getElementById("caption-fotokegiatan");

		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}
	}
});
</script>
<?= $this->endSection() ?>