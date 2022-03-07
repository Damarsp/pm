<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="jumbotron mt-3">
        <h1>Selamat datang, <?= user()->username; ?></h1>
        <br>
        <h1 class="display-4">Aspirasi Rakyat</h1>
        <h3>Tempat untuk menyampaikan pengaduan & keluhan dengan mudah</h3>
    </div>

</div>

<?= $this->endSection(); ?>