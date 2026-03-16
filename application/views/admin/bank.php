<?php


?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4 respnsv-wrap">
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger alert-dismissible">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?php
        $errmsg = $this->session->flashdata('errormsg');
        if (!empty($errmsg)): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5 class="text-center"><?php echo $errmsg; ?></h5>
            </div>
        <?php endif; ?>
        <?php $msg = $this->session->flashdata('successmsg');
        if (!empty($msg)): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5 class="text-center"><?php echo $msg; ?></h5>
            </div>
        <?php endif; ?>

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Bank Details</h6>
        </div>
        <div class="card-body">

            <form method="post" action="<?php echo base_url('admin/bankUpdate'); ?>" enctype="multipart/form-data">

                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" class="form-control" id="bank_name" name="bank_name"
                            placeholder="Enter Bank Name"
                            value="<?php echo set_value('bank_name', $bankDetails['bank_name'] ?? ''); ?>" required>
                    </div>
                    <div class="col">
                        <label for="beneficiary_name">Beneficiary Name</label>
                        <input type="text" placeholder="Enter Beneficiary Name" name="beneficiary_name"
                            class="form-control" id="beneficiary_name"
                            value="<?php echo set_value('beneficiary_name', $bankDetails['beneficiary_name'] ?? ''); ?>"
                            required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="account_no">Account Number</label>
                        <input type="text" name="account_no" class="form-control" id="account_no"
                            placeholder="Enter Account Number"
                            value="<?php echo set_value('account_no', $bankDetails['account_no'] ?? ''); ?>" required>
                    </div>
                    <div class="col">
                        <label for="ifsc_code">IFSC Code</label>
                        <input type="text" name="ifsc_code" class="form-control" id="ifsc_code"
                            placeholder="Enter IFSC Code"
                            value="<?php echo set_value('ifsc_code', $bankDetails['ifsc_code'] ?? ''); ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="bank_branch">Bank Branch</label>
                        <input type="text" name="bank_branch" class="form-control" id="bank_branch"
                            placeholder="Enter Bank Branch"
                            value="<?php echo set_value('bank_branch', $bankDetails['bank_branch'] ?? ''); ?>" required>
                    </div>
                </div>
                <br />
                <input type="hidden" name="bankid"
                    value="<?php echo isset($bankDetails['id']) ? $bankDetails['id'] : ''; ?>">
                <br />
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">&nbsp;&nbsp;&nbsp;</label><br>
                        <input type="submit" name="add_save" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->