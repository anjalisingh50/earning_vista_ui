<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
<<<<<<< Updated upstream
            <?php 
                if ($_SESSION['role_type'] == 1) 
                {
                    ?>
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo base_url('Admin/Dashboard'); ?>" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript::void();" key="t-products">Fund Generate</a></li>
                                    <li><a href="javascript::void();" key="t-products">Pakage</a></li>
                                    <li><a href="javascript::void();" key="t-products">Global Setup</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Member</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-user-grid">Registration</a></li>
                                    <li><a href="javascript: void(0);" key="t-user-list">Activation</a></li>
                                    <li><a href="javascript: void(0);" key="t-profile">Geonology</a></li>
                                    <li><a href="javascript: void(0);" key="t-profile">Team Bussiness</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bitcoin"></i>
                                    <span key="t-crypto">Wallets</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-wallet">Income Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-buy">Withdrawal Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-exchange">Withdrawal Request</a></li>
                                    <li><a href="javascript: void(0);" key="t-lending">Withdrawal Transfer</a></li>
                                    <li><a href="javascript: void(0);" key="t-orders">Withdrawal History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-list-ul"></i>
                                    <span key="t-tables">Analytics MIS</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-basic-tables">Activation Effect History</a></li>
                                    <li><a href="javascript: void(0);" key="t-data-tables">Deposite/Pakage History</a></li>
                                    <li><a href="javascript: void(0);" key="t-responsive-table">Cash Out History</a></li>
                                    <li><a href="javascript: void(0);" key="t-editable-table">Invest V/S Return</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Setting</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-login">Profile</a></li>
                                    <li><a href="javascript: void(0);" key="t-login-2">Change Password</a></li>
                                    <li><a href="javascript: void(0);" key="t-register">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php
                }
                else if($_SESSION['role_type'] == 2)
                {
                    ?>
                       <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo base_url('Member/Dashboard'); ?>" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript::void();" key="t-products">Register</a></li>
                                    <li><a href="javascript::void();" key="t-products">Activation Request</a></li>
                                    <li><a href="javascript::void();" key="t-products">Genology</a></li>
                                    <li><a href="javascript::void();" key="t-products">Team Bussiness </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bitcoin"></i>
                                    <span key="t-crypto">Wallets</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-wallet">Maturity Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-buy">Income Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-exchange">Withdrawal Wallet</a></li>
                                    <li><a href="javascript: void(0);" key="t-orders">Withdrawal History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Setting</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-login">Profile</a></li>
                                    <li><a href="javascript: void(0);" key="t-login-2">Change Password</a></li>
                                    <li><a href="javascript: void(0);" key="t-register">Logout</a></li>
                                </ul>
                            </li>

                        </ul> 
                    <?php
                }
            ?>
=======
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?php echo base_url('Admin/Dashboard'); ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo base_url('master/Generate_history') ?>" key="t-products">Fund Generate</a>
                        </li>
                        <li><a href="javascript::void();" key="t-products">Pakage</a></li>
                        <li><a href="javascript::void();" key="t-products">Global Setup</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Member</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="javascript: void(0);" key="t-user-grid">Registration</a></li>
                        <li><a href="javascript: void(0);" key="t-user-list">Activation</a></li>
                        <li><a href="javascript: void(0);" key="t-profile">Geonology</a></li>
                        <li><a href="javascript: void(0);" key="t-profile">Team Bussiness</a></li>
                    </ul>
                </li>

            </ul>
>>>>>>> Stashed changes
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->