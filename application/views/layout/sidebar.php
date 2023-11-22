<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <!-- <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a> -->
        <div class="navbar-nav w-100">
            <?php
            if ($user['role'] == 'Admin') { ?>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('')?>">
                        <i class="fa fa-hashtag me-2"></i>
                        <span>Dhasboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('Mahasiswa/')?>">
                        <i class="fa fa-th me-2"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('Prodi/')?>">
                        <i class="fa fa-laptop me-2"></i>
                        <span>Prodi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('Auth/logout')?>">
                        <i class="fa fa-keyboard me-2"></i>
                        <span>LogOut</span>
                    </a>
                </li>
            <?php } else {
            ?>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('Profil/')?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link"  href="<?= base_url('Auth/logout')?>">
                        <i class="fa fa-keyboard me-2"></i>
                        <span>LogOut</span>
                    </a>
                </li>
            <?php
            } ?>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

