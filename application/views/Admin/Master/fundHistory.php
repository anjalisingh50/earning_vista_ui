<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Fund History</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">History > </a></li>
                                <li class="breadcrumb-item active">Fund History</li>
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

                            <h4 class="card-title">Fund History List</h4>

                            <div class="addbtn" style="float: right;margin-bottom: 10px;">
                                <a href="<?php echo base_url('Admin/Master/FundGenerate'); ?>" class="btn btn-info waves-effect waves-light"> <i class="fas fa-angle-left"></i>  Back To Fund List</a>
                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead style="text-align: center;background-color: burlywood;">
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Pakage Name</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Total</th>
                                    <th>Generate Date</th>
                                    <th>Transection Type</th>
                                </tr>
                                </thead>

                                <tbody style="text-align: center;">
                                <?php 
                                if(!empty($history))
                                {
                                    foreach ($history as $key => $hstry) 
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo ($key+1); ?></td>
                                                <td><?php echo $hstry['package_name']; ?></td>
                                                <td><?php echo $hstry['qty']; ?></td>
                                                <td><?php echo $hstry['amount']; ?></td>
                                                <td><?php echo $hstry['total']; ?></td>
                                                <td><?php echo date("d-m-Y", strtotime($hstry['gen_date'])) ; ?></td>
                                                <td><?php echo $hstry['transaction_type']; ?></td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr><td colspan="4" style="text-align: center;"> No Record Found </td></tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>