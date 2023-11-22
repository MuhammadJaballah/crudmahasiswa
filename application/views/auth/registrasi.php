<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex 
    align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div style="text-align: center;">
                    <h3>Buat Akun</h3>
                </div>
                <form class="user" method="POST" action="<?= base_url('auth/registrasi');?>">
                <div class="form-floating mb-3">
                    <input type="text" name="nama" value="<?set_value('nama');?>" 
                    class="form-control" id="nama" placeholder="Nama Lengkap">
                    <?=form_error('nama', '<small class ="text-danger pl-3">','</small>');?>
                    <!-- <label for="floatingText">Nama Lengkap</label> -->
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" value="<?set_value('email');?>"
                    class="form-control" id="email" placeholder="Alamat Email">
                    <?=form_error('email', '<small class ="text-danger pl-3">','</small>');?>
                    <!-- <label for="floatingInput">Alamat Email</label> -->
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" value="<?set_value('password');?>"
                    class="form-control" id="password" placeholder="Password">
                    <!-- <label for="floatingPassword">Password</label> -->
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password2" value="<?set_value('password');?>"
                    class="form-control" id="password" placeholder="Ulangi Password">
                    <!-- <label for="floatingPassword">Ulangi Password</label> -->
                </div>
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Daftar Akun</button>
                </form>
                <p class="text-center mb-0">Sudah punya akun? <a href="<?= base_url('Auth') ?>">Login</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->
</div>
