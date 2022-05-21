<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Member</a></li>
                                <li class="breadcrumb-item active">Create Member</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Create New Member</h4>
                            <form id="adminMemReg" name="adminMemReg" method="POST" action="<?php echo base_url('Member/MemberRegister/adminMember_register'); ?>" enctype="multipart/form-data">
                                <div class="content-area">
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
                                                    <strong>Email Id</strong> <span id="email-error"></span>
                                                    <input type="email" class="form-control" name="email" id="email" required="" parsley-type="email" placeholder="Enter a valid e-mail" onblur="checkEmail(this.value);">
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
                                                    <strong>Phone</strong> <span id="phone-error"></span>
                                                    <input data-parsley-type="number" type="number" name="number" id="number" class="form-control" required="" placeholder="Enter only numbers" onblur="checkMobile(this.value);">
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
                                                    <strong>Sponsor Id</strong> <span id="sponsor-error"></span>
                                                    <input type="text" class="form-control" name="sponsor_id" id="sponsor_id" placeholder="Sponsor id" required onblur="checkSponsorId(this.value);">
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
                                </div>
                                <div class="mt-4" style="float: right;">
                                    <button id="submitcheck" onclick="checkSubmit()" class="btn btn-primary waves-effect waves-light" type="button">Submit</button>
                                </div>
                                <!-- <div class="mt-4" style="float: right;">
                                    <button class="btn btn-success waves-effect waves-light" type="submit">Submit</button>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
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
                $("#adminMemReg").submit();
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