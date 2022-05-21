<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Earning Vista :: Register Member</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <style type="text/css">
            .form-group{
                padding-bottom: 8px;
            }

            /*#backgroundImage{
                z-index: 1;
            }

            #backgroundImage: before{
                background-image: url('assets/images/bacground11.jpg');
            }*/
        </style>

    </head>

    <body style="background-image: url('../assets/images/bacground11.jpg');">
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row" style="max-height: 100px;">
                                    <div class="col-12">
                                        <div class="text-primary p-4" style="text-align: center;">
                                            <h5 class="text-primary"> Register Member</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="col-md-12">
                                    <a href="<?php echo base_url('Member/MemberLogin'); ?>" class="btn btn-sm btn-info" style="float: right;margin-top: 10px;">Go To Login</a>
                                </div>
                                <div>
                                    <a href="javascript::void()">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="p-2">
                                    <form id="formember" name="member_registration" method="POST" action="<?php echo base_url('Member/MemberRegister/registerMember'); ?>" enctype="multipart/form-data">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Name</strong>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Email Id</strong>
                                                        <input type="email" class="form-control" name="email" id="email" required="" parsley-type="email" placeholder="Enter a valid e-mail" onblur="checkEmail(this.value);">
                                                        <p id="email-error"></p>
                                                    </div>

                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Father/Husband Name</strong>
                                                        <input type="text" class="form-control" name="fatherHusband_name" id="fatherHusband_name" placeholder="Enter father/husband name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Phone</strong>
                                                        <input data-parsley-type="number" type="number" name="number" id="number" class="form-control" required="" placeholder="Enter only numbers" onblur="checkMobile(this.value);">
                                                        <p id="phone-error"></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Gender</strong>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="">---select---</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>
                                                            <option value="O">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Sponsor Id</strong>
                                                        <input type="text" class="form-control" name="sponsor_id" id="sponsor_id" placeholder="Sponsor id" required onblur="checkSponsorId(this.value);">
                                                        <p id="sponsor-error"></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Side</strong>
                                                        <select name="side" id="side" class="form-control" required>
                                                            <option value="">---select---</option>
                                                            <option value="L">Left</option>
                                                            <option value="R">Right</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Country</strong>
                                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>State</strong>
                                                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter state name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>City</strong>
                                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Pincode</strong>
                                                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Photo</strong>
                                                        <input class="form-control" type="file" id="photo" name="photo" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <strong>Address</strong>
                                                        <textarea class="form-control" name="address" id="address" required rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4" style="float: right;">
                                            <button id="submitcheck" onclick="checkSubmit()" class="btn btn-primary waves-effect waves-light" type="button">Submit</button>
                                        </div>
                                    </form>
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

        <?php 
            if($this->session->flashdata('success')!=null)
            {
                ?>
                <script type="text/javascript">
                    swal('success','<?php echo $this->session->flashdata("success") ?>','success');
                </script>
                <?php
                $this->session->set_flashdata('success',null);
            }
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

        <script type="text/javascript">
            let emailVerify = false;
            let phoneVerify = false;
            let sponsorVerify = false;
            // checkSubmit();
            function checkSubmit()
            {
                if($('#name').val() == '')
                {
                    swal("Name Required !", {
                          icon: "error",
                        });
                }else if($('#email').val() == '')
                {
                    swal("Email Required !", {
                          icon: "error",
                        });
                }else if($('#fatherHusband_name').val() == '')
                {
                    swal("Father/Husband Name Required !", {
                          icon: "error",
                        });
                }else if($('#number').val() == '')
                {
                    swal("Mobile Number !", {
                          icon: "error",
                        });
                }else if($('#gender').val() == '')
                {
                    swal("Gender Required !", {
                          icon: "error",
                        });
                }else if($('#sponsor_id').val() == '')
                {
                    swal("Sponsor Id Required !", {
                          icon: "error",
                        });
                }else if($('#side').val() == '')
                {
                    swal("side Required !", {
                          icon: "error",
                        });
                }else if($('#country').val() == '')
                {
                    swal("Country Required !", {
                          icon: "error",
                        });
                }else if($('#state').val() == '')
                {
                    swal("State Required !", {
                          icon: "error",
                        });
                }else if($('#city').val() == '')
                {
                    swal("City Required !", {
                          icon: "error",
                        });
                }else if($('#pincode').val() == '')
                {
                    swal("Pincode Required !", {
                          icon: "error",
                        });
                }else if($('#file').attr('src') == '')
                {
                    swal("Profile Image Required !", {
                          icon: "error",
                        });
                }else if($('#address').val() == ''){
                    swal("Address Required !", {
                          icon: "error",
                        });
                }else{
                    if(emailVerify == true && phoneVerify == true && sponsorVerify == true)
                    {
                        // $("#submitcheck").prop('disabled',false);
                        $("#formember").submit();
                    }else{
                        swal("Email or Phone or Sponsor Id Invalid !!", {
                              icon: "error",
                            });
                    }
                }
            }

            function checkEmail()
            {
                var email = $("#email").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verifyEmail',
                        type: 'POST',
                        data: {email: email},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                emailVerify = true;
                                // checkSubmit();
                                $("#email-error").html('<span style="color:green;">Available</span>');
                              }else{
                                emailVerify = false;
                                // checkSubmit();
                                $("#email-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }

            function checkMobile()
            {
                var mobile = $("#number").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verifymobile',
                        type: 'POST',
                        data: {mobile: mobile},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                phoneVerify = true;
                                // checkSubmit();
                                $("#phone-error").html('<span style="color:green;">Available</span>');
                              }else{
                                phoneVerify = false;
                                // checkSubmit();
                                $("#phone-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }

            function checkSponsorId()
            {
                var sponsor_id = $("#sponsor_id").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verify_sponsor',
                        type: 'POST',
                        data: {sponsor_id: sponsor_id},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                sponsorVerify = true;
                                // checkSubmit();
                                $("#sponsor-error").html('<span style="color:green;">Available</span>');
                              }else{
                                sponsorVerify = false;
                                // checkSubmit();
                                $("#sponsor-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }
        </script>

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url() ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/node-waves/waves.min.js"></script>

        <!-- validation init -->
        <script src="<?php echo base_url() ?>assets/js/pages/validation.init.js"></script>
        
        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
</html>
