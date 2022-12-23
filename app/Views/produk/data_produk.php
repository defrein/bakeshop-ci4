<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Data Produk</h1>
            <a href="/produk/create" class="btn btn-primary my-3">+ Tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th class="hidden-info" scope="col">Kategori</th>
                        <th class="hidden-info" scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $p) : ?>

                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $p['gambar']; ?>" alt="" class="gambar"></td>
                        <td><?= $p['nama_produk']; ?></td>
                        <td class="hidden-info"><?= $p['kategori']; ?></td>
                        <td class="hidden-info"><?= $p['harga']; ?></td>
                        <td class="kolom-aksi">
                            <a href="/produk/<?= $p['slug']; ?>" class="bg-detail my-1">
                                <div class="icon-detail"></div>
                            </a>
                            <a href="#" class="bg-edit my-1">
                                <div class="icon-edit"></div>
                            </a>
                            <a href="#" class="bg-hapus my-1">
                                <div class="icon-hapus"></div>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>