<?= $this->extend('layout/template_data'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-3">Form Tambah Data Admin</h2>

            <form action="/admin/save" method="post" enctype="multipart/form-data" class="my-5">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_role" id="id_role" value="2">
                <div class="row mb-3">
                    <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('nama_admin')) ? 'is-invalid' : ''; ?>"
                            id="nama_admin" name="nama_admin" autofocus value="<?= old('nama_admin'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_admin'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                            id="username" name="username" autofocus value="<?= old('username'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password"
                            class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                            id="password" name="password" autofocus value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                </div>

                <a href="/admin" class="btn btn-danger my-2">Batal</a>
                <button type="submit" class="btn btn-primary my-2">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>