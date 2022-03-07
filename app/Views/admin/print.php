<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 text-center">ASPIRASI RAKYAT</h2>
                <h4 class="text-center">TAHUN 2022</h4>
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
                                <th>Tanggapan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($tanggapan as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['id_pengaduan'] ?></td>
                                    <td><?= $row['tgl_pengaduan'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['isi_laporan'] ?></td>
                                    <td><?= $row['foto']; ?></td>
                                    <td><?= $row['tanggapan']; ?></td>
                                    <td><?= $row['status']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <a href="<?= base_url('/tanggapan') ?>" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>