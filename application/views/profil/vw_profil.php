<div class="container-fluid">
    <h1 class="h3 mt-4 mb-4 text-gray-800">Profil</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $user['nama']; ?>
                    </h5>
                    <p class="card-text">
                        <?= $user['email']; ?>
                    </p>
                    <p class="card-text">Anggota Sejak
                        <?= date('d F Y', strtotime($user['date_created'])); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
