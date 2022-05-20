<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Earning Vista</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url(); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

        <style type="text/css">
            form .error {
                  color: #ff0000;
                }
        </style>

    </head>

    <body style="background-image: url('assets/images/011.jpeg');">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="card overflow-hidden" style="padding-bottom: 35px;">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary"> EARNING VISTA </h5>
                                            <p>Welcome Back !</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="<?php echo base_url(); ?>assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="javascript:(void);" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url(); ?>assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="javascript:(void);" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="admin-area">
                                                <div class="login-area">
                                                    <div class="btn-login">
                                                        <strong>Admin Login</strong>
                                                        <div class="mt-3">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#adminLogin" style="padding: 7px 25px;border-radius: 20px;">Login</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="admin-area">
                                                <div class="login-area">
                                                    <div class="btn-login">
                                                        <strong>Members Login</strong>
                                                        <div class="mt-3">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#memberLogin" style="padding: 7px 25px;border-radius: 20px;">Login</button>

                                                            <!-- <a href="<?php echo base_url(); ?>Member/MemberLogin" class="btn btn-primary btn-rounded waves-effect waves-light" style="padding: 7px 25px;">Login</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="<?php echo base_url('MemberRegister'); ?>" class="text-muted"> <i class="fas fa-user-plus" style="color: blue;"></i> <span style="color: blue;"> Member Registration </span> </a>
                                        <!-- <a href="<?php echo base_url('MemberRegister'); ?>" class="btn btn-outline-warning waves-effect waves-light"><i class="fas fa-user-plus"></i> Member Registration</a> -->
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <div>
                                <p style="color: white;">© <script>document.write(new Date().getFullYear())</script> Developed by Iotas Solutios Pvt. Ltd.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <?php
            if($this->session->flashdata('error')!=null)
            {
                ?>
                <script type="text/javascript">
                    swal('error','<?php echo $this->session->flashdata("error") ?>','error');
                </script>
                <?php
                $this->session->set_flashdata('error',null);
            }
        ?>

        <!-- login model area  -->
        <div id="adminLogin" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-image: url('assets/images/012.jpg'); background-size: cover;">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="myModalLabel" style="color: white;"> Admin Login </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="loginForm" method="POST" action="<?php echo base_url('LoginPage/doLogin'); ?>">
            
                            <div class="mb-3">
                                <label for="username" class="form-label" style="color: white;">Username</label>
                                <input type="text" class="form-control" name="admin_username" id="admin_username" placeholder="Enter username" required>
                            </div>
    
                            <div class="mb-3">
                                <label class="form-label" style="color: white;">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="admin_password" id="admin_password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                            </div>

                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-check">
                                <label class="form-check-label" for="remember-check">
                                    Remember me
                                </label>
                            </div> -->

                            <div class="btb-login" style="text-align: center;padding-bottom: 10px;">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" style="padding: 2px 40px;font-size: 20px;"> Login</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- member login area  -->
        <div id="memberLogin" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-image: url('assets/images/012.jpg'); background-size: cover;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel" style="color: white;"> Member Login </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="member_loginForm" method="POST" action="<?php echo base_url('Dashboard'); ?>">
            
                            <div class="mb-3">
                                <label for="username" class="form-label" style="color: white;">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                            </div>
    
                            <div class="mb-3">
                                <label class="form-label" style="color: white;">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required>
                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                </div>
                            </div>

                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-check">
                                <label class="form-check-label" for="remember-check">
                                    Remember me
                                </label>
                            </div> -->

                            <div class="btb-login" style="text-align: center;padding-bottom: 10px;">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" style="padding: 2px 40px;font-size: 20px;"> Login</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- JAVASCRIPT -->
        <!-- <script src="<?php echo base_url(); ?>assets/libs/jquery/jquery.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
</html>

<script type="text/javascript">
    $(function(){
        $("form[name='loginForm']").validate({
            rules:{
                admin_username: {
                    required: true,
                },
                admin_password: {
                    required: true,
                },
            },

            messages: {
                admin_username: "this field is required !",
                admin_password: "this field is required !",
            },

            submitHandler: function(form){
                    form.submit();
                }
        });
    });
</script>