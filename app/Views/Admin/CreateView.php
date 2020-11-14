<?= $this->extend('Admin/LayoutView') ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="col">
            <!-- Page Heading -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= route_to('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Kegiatan Baru</li>
            </ol>
        </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan Baru</h6>
                </div>
                <div class="card-body">
                    <form action="<?= route_to('store') ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="judul">Nama Kegiatan</label>
                            <input class="form-control <?= $validation->hasError('judul') ? 'is-invalid' : '' ?>" name="judul" id="judul" type="text" value="<?= old('judul') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input class="form-control <?= $validation->hasError('lokasi') ? 'is-invalid' : '' ?>" name="lokasi" id="lokasi" type="text" value="<?= old('lokasi') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('lokasi') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Pelaksanaan Kegiatan</label>
                            <input class="form-control <?= $validation->hasError('tanggal') ? 'is-invalid' : '' ?>" name="tanggal" id="tanggal" type="date" value="<?= old('tanggal') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tanggal') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Kegiatan</label>
                            <textarea class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi" rows="5"><?= old('deskripsi') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi') ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>