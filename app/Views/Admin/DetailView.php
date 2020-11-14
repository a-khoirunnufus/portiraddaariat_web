<?= $this->extend('Admin/LayoutView') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= route_to('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= route_to('posts') ?>">Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $post['judul'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        FOTO
                    </div>
                    <div class="col-8">
                        <h5 class="font-weight-bold">Nama Kegiatan</h5>
                        <p><?= $post['judul'] ?></p>
                        <h5 class="font-weight-bold">Lokasi</h5>
                        <p><?= $post['lokasi'] ?></p>
                        <h5 class="font-weight-bold">Tanggal Pelaksanaan</h5>
                        <p><?= $post['tanggal'] ?></p>
                        <h5 class="font-weight-bold">Deskripsi</h5>
                        <p><?= $post['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex flex-row">
                <form action="#" class="mr-3">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Hapus Kegiatan
                    </button>
                </form>
                <a href="#" class="btn btn-warning">
                    <i class="fa fa-edit"></i> Edit Kegiatan
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>