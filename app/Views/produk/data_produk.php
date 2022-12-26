<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="my-3">Halo, <?php echo session()->get('username') ?> <span><a href="/admin">Kelola
                        Admin</a></span></p>
            <h2 class="mt-3">Data Produk</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <a href="/produk/create" class="btn btn-primary my-3">+ Tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="hidden-info" scope="col">Dibuat</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th class="hidden-info" scope="col">Kategori</th>
                        <th class="hidden-info" scope="col">Harga</th>
                        <th class="hidden-info" scope="col">Diupdate</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $p) : ?>

                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td class="hidden-info"><?= $p['created_at']; ?></td>
                        <td><img src="/img/<?= $p['gambar']; ?>" alt="" class="gambar"></td>
                        <td><?= $p['nama_produk']; ?></td>
                        <td style="text-transform: capitalize;" class="hidden-info"><?= $p['kategori']; ?></td>
                        <td class="hidden-info"><?= $p['harga']; ?></td>
                        <td class="hidden-info"><?= $p['updated_at']; ?></td>
                        <td class="kolom-aksi">
                            <a href="/produk/<?= $p['slug']; ?>" class="bg-detail my-1 hidden-desk">
                                <div class="icon-detail"></div>
                            </a>
                            <a href="/produk/edit/<?= $p['slug']; ?>" class="bg-edit my-1 hidden-info">
                                <div class="icon-edit"></div>
                            </a>
                            <form action="/produk/<?= $p['id_produk']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="bg-hapus my-1 hidden-info"
                                    onclick="return confirm('Apakah Anda yakin?')">
                                    <div class="icon-hapus"></div>
                                </button>

                                <div class="icon-hapus"></div>
                            </form>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>