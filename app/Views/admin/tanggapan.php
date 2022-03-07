<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Tanggapan</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url() ?>/tanggapan/tambah" class="btn btn-primary">Tambah</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Tanggapan</th>
                            <th>Id Pengaduan</th>
                            <th>Tgl Tanggapan</th>
                            <th>Isi Tanggapan</th>
                            <th>Id Petugas</th>
                            <th>
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tanggapan as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_tanggapan'] ?></td>
                                <td><?= $row['id_pengaduan'] ?></td>
                                <td><?= $row['tgl_tanggapan'] ?></td>
                                <td><?= $row['tanggapan'] ?></td>
                                <td><?= $row['id_petugas'] ?></td>
                                <td>
                                    <form action="<?= base_url('/tanggapan/' . $row['id_pengaduan'] . '/kirim'); ?>" method="post">
                                        <button type="submit" class="btn btn-lg-3 btn-success">Kirim</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>