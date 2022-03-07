<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Verifikasi & Validasi Pengaduan</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Pengaduan</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Nik</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($verifikasi as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_pengaduan'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['isi_laporan'] ?></td>
                                <td><?= $row['foto']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td><a class="btn btn-lg-3 btn-danger" href="/verifikasi/hapus/<?= $row['id_pengaduan']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>