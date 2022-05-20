<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="javascript::void()" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?php echo base_url(); ?>assets/images/logo-light.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <h2 style="padding-top: 15px;color: white;">Earning Vista</h2>
                                <!-- <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="19"> -->
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn" disabled>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?php echo base_url('LoginPage/logout'); ?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>