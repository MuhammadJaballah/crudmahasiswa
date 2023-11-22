<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Sign In Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div style="text-align: center;">
                    <h3>Login</h3>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" value="<?=set_value('email');?>"
                    id="email" name="email" placeholder="Masukkan Alamat Email...">
                    <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                    <label for="floatingInput">Masukkan Alamat Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" value="<?=set_value('nama');?>"
                    id="password" name="password" placeholder="Password">
                    <?=form_error('password','<small class="text-danger pl-3">','</small>');?>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <a href="">Lupa Password?</a>
                </div>
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                </form>
                <p class="text-center mb-0">Buat akun? <a href="<?= base_url('auth/registrasi') ?>">Register</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Sign In End -->
</div>