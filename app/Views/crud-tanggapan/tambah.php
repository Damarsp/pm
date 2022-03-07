<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Tanggapan</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/tanggapan/simpan" method="POST">

                    <div class="form-group row">
                        <label for="id_tanggapan" class="col-4 col-form-label">Id Tanggapan</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="id_tanggapan" id="id_tanggapan" placeholder="Id Tanggapan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_pengaduan" class="col-4 col-form-label">Id Pengaduan</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="id_pengaduan" id="id_pengaduan">
                            <?php
                            $db = \Config\Database::connect();
                            $builder = $db->table('pengaduan');
                            $query = $builder->get();
                            $pengaduan = $query->getResultArray();
                            ?>
                            <option selected>---</option>
                            <?php foreach ($pengaduan as $p) : ?>
                                <option value="<?= $p['id_pengaduan'] ?>"><?= $p['id_pengaduan'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="tg_tanggapan" class="col-4 col-form-label">Tanggal Tanggapan</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tgl_tanggapan" id="tgl_tanggapan" placeholder="Tanggal Tanggapan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggapan" class="col-4 col-form-label">Isi Tanggapan</label>
                        <div class="col-8">
                            <textarea class="form-control" name="tanggapan" id="tanggapan" cols="10" rows="5" placeholder="Isi Tanggapan"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_petugas" class="col-4 col-form-label">Id Petugas</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="id_petugas" id="id_petugas">
                            <?php
                            $db = \Config\Database::connect();
                            $builder = $db->table('petugas');
                            $query = $builder->get();
                            $petugas = $query->getResultArray();
                            ?>
                            <option selected>---</option>
                            <?php foreach ($petugas as $s) : ?>
                                <option value="<?= $s['id_petugas'] ?>"><?= $s['id_petugas'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Tambah Tanggapan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>