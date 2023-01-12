<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <p class="my-3">Halo, <?php echo session()->get('username') ?></p>
            <h2 class="mt-3">Data Admin</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <a href="/admin/create" class="btn btn-primary my-3">+ Tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th class="hidden-info" scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $a) : ?>

                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a['username']; ?></td>
                        <td><?= $a['nama_admin']; ?></td>
                        <td class="hidden-info"><?= $a['jenis_role']; ?></td>
                        <td class="kolom-aksi">
                            <form action="/admin/<?= $a['id_admin']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="bg-hapus my-1"
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