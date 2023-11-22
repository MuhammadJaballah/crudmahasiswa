<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Peminjaman
                </div>
                <div class="card-body">
                    <h2 class="card-tittle"><?= $perpustakaan['nama_buku']; ?></h2>
                    <h6 class="card-subtittle mb-2 text-muted"><?= $perpustakaan['genre_buku']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Tanggal Peminjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $perpustakaan['tanggal_peminjaman']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Pengembalian</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $perpustakaan['tanggal_pengembalian']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Nomor Anggota</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $perpustakaan['nomor_anggota']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Perpustakaan') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>