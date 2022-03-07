<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Isi Laporan</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/pengaduan/simpan" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="id_pengaduan" class="col-4 col-form-label">Id Pengaduan</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="id_pengaduan" id="id_pengaduan" placeholder="Id Pengaduan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_pengaduan" class="col-4 col-form-label">Tanggal Pengaduan</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" placeholder="Tanggal Pengaduan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nik" class="col-4 col-form-label">Nik</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="nik" id="nik">
                            <?php
                            $db = \Config\Database::connect();
                            $builder = $db->table('masyarakat');
                            $query = $builder->get();
                            $masyarakat = $query->getResultArray();
                            ?>
                            <option selected>---</option>
                            <?php foreach ($masyarakat as $m) : ?>
                                <option value="<?= $m['nik'] ?>"><?= $m['nik'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="isi_laporan" class="col-4 col-form-label">Isi Laporan</label>
                        <div class="col-8">
                            <textarea class="form-control" name="isi_laporan" id="isi_laporan" cols="10" rows="5" placeholder="Isi Laporan"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Foto</label>
                        <div class="col-8">
                            <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Kirim Pengaduan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>