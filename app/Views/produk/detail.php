<?= $this->extend('layout/template_data'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Detail Produk</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $produk['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"><?= $produk['nama_produk']; ?></h4>
                            <h5 class="card-text" style="text-transform: capitalize;"><small
                                    class="text-muted"><?= $produk['jenis_kategori']; ?></small></h5>
                            <h5 class="card-text">Rp<?= $produk['harga']; ?></h5>
                            <p class="card-text text-muted"><?= $produk['created_at']; ?></p>
                            <p class="card-text text-muted">Diupdate pada: <?= $produk['updated_at']; ?></p>
                            <div class="aksi-button">
                                <a href="/produk/edit/<?= $produk['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/produk/<?= $produk['id_produk']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin?')">Delete</button>

                                </form>
                                <a href="/produk" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>