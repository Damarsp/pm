<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Data Petugas</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/datapetugas/update" method="POST">
                    <?php

                    if ($petugas->id_petugas == TRUE) {
                        echo "<input type=text name=id value='{$petugas->id_petugas}' style='display:none'>";
                    }

                    ?>

                    <div class="form-group row">
                        <label for="id_petugas" class="col-4 col-form-label">Id Petugas</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="id_petugas" id="id_petugas" placeholder="Id Petugas" value="<?= $petugas->id_petugas ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_petugas" class=" col-4 col-form-label">Nama Petugas</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas" value="<?= $petugas->nama_petugas ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Username</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $petugas->username ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Password</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?= $petugas->password ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telp" class="col-4 col-form-label">No Telp</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="telp" id="telp" placeholder="No Telp" value="<?= $petugas->telp ?>">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Ubah Data Petugas</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>