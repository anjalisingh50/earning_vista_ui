<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Member > </a></li>
                                <li class="breadcrumb-item active">Member List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Member List</h4>

                            <div class="addbtn" style="float: right;margin-bottom: 10px;">
                                <a href="<?php echo base_url('Member/MemberRegister/addMember'); ?>" class="btn btn-info waves-effect waves-light"> Go to Add Member</a>
                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead style="text-align: center;background-color: burlywood;">
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Name</th>
                                    <th>Father/Husband Name</th>
                                    <th>Member Id</th>
                                    <th>Parent Id</th>
                                    <th>Sponsor Id</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Side</th>
                                    <th>Registration Date</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                </tr>
                                </thead>

                                <tbody style="text-align: center;">
                               <?php 
                                if(!empty($memberList))
                                {
                                    foreach ($memberList as $key => $list) 
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo ($key+1); ?></td>
                                                <td><?php echo $list['name']; ?></td>
                                                <td><?php echo $list['f_h_name']; ?></td>
                                                <!-- <td><?php echo $list['amount']; ?></td>
                                                <td><?php echo $list['total']; ?></td> -->
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr><td colspan="14" style="text-align: center;"> No Record Found </td></tr>
                                    <?php
                                }
                                ?>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>