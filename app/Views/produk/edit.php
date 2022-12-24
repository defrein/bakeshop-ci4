<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-3">Form Edit Data Produk</h2>

            <form action="/produk/update/<?= $produk['id_produk']; ?>" method="post" enctype="multipart/form-data"
                class="my-5">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $produk['slug']; ?>">
                <div class="row mb-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>"
                            id="nama_produk" name="nama_produk" autofocus
                            value="<?= (old('nama_produk')) ? old('nama_produk') : $produk['nama_produk']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_produk'); ?>
                        </div>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <?php echo "Database:{$produk['kategori']}" ?>
                        <?php echo "Old:" . old('kategori') ?>
                        <select id="kategori" name="kategori" class="custom-select"
                            aria-describedby="kategoriHelpBlock">
                            <option <?php if (old('kategori')) {
                                        if (old('kategori') == "kue") {
                                            echo "selected";
                                        } else {
                                            echo "";
                                        }
                                    } else {
                                        if ($produk['kategori'] == "kue") {
                                            echo "selected";
                                        } else {
                                            echo "";
                                        }
                                    }; ?> value="kue">Kue</option>
                            <option <?php if (old('kategori')) {
                                        if (old('kategori') == "snack") {
                                            echo "selected";
                                        } else {
                                            echo "";
                                        }
                                    } else {
                                        if ($produk['kategori'] == "snack") {
                                            echo "selected";
                                        } else {
                                            echo "";
                                        }
                                    }; ?> value="snack">Snack</option>
                        </select>

                        <span id="kategoriHelpBlock" class="form-text text-muted">Pilih Kategori</span>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga"
                            value="<?= (old('harga')) ? old('harga') : $produk['harga']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar"
                            value="<?= (old('gambar')) ? old('gambar') : $produk['gambar']; ?>">
                    </div>
                </div>

                <a href="/produk" class="btn btn-danger my-2">Batal</a>
                <button type="submit" class="btn btn-primary my-2">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>