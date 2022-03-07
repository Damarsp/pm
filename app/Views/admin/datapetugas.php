<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data Petugas</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url() ?>/datapetugas/tambah" class="btn btn-primary">Tambah</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Petugas</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>No Telp</th>
                            <th>Status</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($petugas as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_petugas'] ?></td>
                                <td><?= $row['nama_petugas'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td><a class="btn btn-lg-3 btn-warning" href="/datapetugas/ubah/<?= $row['id_petugas']; ?>">Ubah</a></td>
                                <td><a class="btn btn-lg-3 btn-danger" href="/datapetugas/hapus/<?= $row['id_petugas']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>