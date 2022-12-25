<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-3">Form Tambah Data Produk</h2>

            <form action="/produk/save" method="post" enctype="multipart/form-data" class="my-5">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>"
                            id="nama_produk" name="nama_produk" autofocus value="<?= old('nama_produk'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_produk'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select id="kategori" name="kategori" class="custom-select"
                            aria-describedby="kategoriHelpBlock">
                            <option <?= old('kategori') == 'kue' ? 'selected' : ''; ?> value="kue">Kue</option>
                            <option <?= old('kategori') == 'snack' ? 'selected' : ''; ?> value="snack">Snack</option>
                        </select>
                        <span id="kategoriHelpBlock" class="form-text text-muted">Pilih Kategori</span>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file"
                                class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>"
                                id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                        </div>
                    </div>
                </div>

                <a href="/produk" class="btn btn-danger my-2">Batal</a>
                <button type="submit" class="btn btn-primary my-2">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>