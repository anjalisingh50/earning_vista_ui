
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Fund Generate</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Fund > </a></li>
                                <li class="breadcrumb-item active">Fund Generate List</li>
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

                            <h4 class="card-title">Fund List</h4>

                            <div class="addbtn" style="float: right;margin-bottom: 10px;">
                                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm"> <i class="fas fa-plus-square"></i> Add</button>
                                <a href="<?php echo base_url('Admin/Master/FundGenerate/fund_historyList'); ?>" class="btn btn-warning waves-effect waves-light"> Fund History</a>
                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead style="text-align: center;">
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Pakage Name</th>
                                    <th>Total Fund</th>
                                    <th>Last Updated</th>
                                </tr>
                                </thead>

                                <tbody style="text-align: center;">
                                <?php 
                                if(!empty($available_fund))
                                {
                                    foreach ($available_fund as $key => $fund) 
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo ($key+1); ?></td>
                                                <td><?php echo $fund['package_name']; ?> </td>
                                                <td><?php echo $fund['total_fund']; ?></td>
                                                <td><?php echo $fund['last_update_date']; ?></td>
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

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Generate Fund</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" name="generateFunds" action="<?php echo base_url('Admin/Master/FundGenerate/GenerateFund'); ?>">
                    <div class="content-area">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Pakage Name</label>
                                        <select class="form-control" name="pakage_name" id="pakage_name" required>
                                            <option value="">---select---</option>
                                            <?php 
                                             foreach ($pakage as $key => $list) 
                                             {
                                                 ?>
                                                    <option value="<?php echo $list['package_id'] ?>"><?php echo $list['package_name']; ?> (<?php echo $list['package_amount']; ?>)</option>
                                                 <?php
                                             }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Quatity</label>
                                        <input type="number" name="qty" id="qty" class="form-control" required placeholder="Enter qty">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area pt-3" style="float: right;">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                        </div>
                    </div>        
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>