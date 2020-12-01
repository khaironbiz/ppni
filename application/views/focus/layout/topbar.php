<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <ul>
                        <li class="header-icon dib"><span class="user-avatar"><?= $user['name']; ?> <i class="ti-angle-down f-s-10"></i></span>
                            <div class="drop-down dropdown-profile">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="<?= base_url('user'); ?>"><i class="ti-user"></i> <span>Profile</span></a></li>

                                        <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                        <li><a href="<?= base_url('user/changepassword'); ?>"><i class="ti-settings"></i> <span>Setting</span></a></li>

                                        <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                        <li><a href="<?= base_url('auth/logout'); ?>"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>