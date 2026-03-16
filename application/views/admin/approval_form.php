<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
            <h6 class="m-0 font-weight-bold text-primary">Approva Form </h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo base_url('admin/'. (isset($approval['id']) ? 'update_application' : 'save_approval')); ?>" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">Upload Profile Picture</label>
                        <br>
                        <input type="file" id="myFile" name="image">
                    </div>

                </div>

                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4"> Name</label>
                        <input type="text" class="form-control" id="name"
                            value="<?php echo $approval['name'] ?? set_value('name'); ?>" placeholder="Enter Full Name"
                            name="name" required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Mobile</label>
                        <input type="text" placeholder="Enter Mobile Number" name="mobile" class="form-control"
                            id="mobile" value="<?php echo $approval['mobile'] ?? set_value('mobile'); ?> " required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Email</label>
                        <input type="email" placeholder="Enter E-mail" name="email" class="form-control" id="email"
                            value="<?php echo $approval['email'] ?? set_value('email'); ?>">
                    </div>

                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">Father Name</label>
                        <input type="text" name="father_name" class="form-control" id="father_name"
                            value="<?php echo $approval['father_name'] ?? set_value('father_name'); ?>">
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Franchise Type</label>
                        <select class="form-control" name="franchise_type" required>
                            <option value="Delivery Franchise">Delivery Franchise</option>
                            <option value="District Franchise Hub">District Franchise Hub</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Aadhaar Number</label>
                        <input type="text" name="aadhaar" class="form-control" id="aadhaar"
                            placeholder="Enter Aadhaar Number"
                            value="<?php echo $approval['aadhar'] ?? set_value('aadhaar'); ?>" required>
                    </div>
                </div>
                <br />
                <div>
                    <br />
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Address Details </h6>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"
                            value="<?php echo $approval['address'] ?? set_value('address'); ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">City</label>
                        <input type="text" name="city" class="form-control" id="city"
                            value="<?php echo $approval['city'] ?? set_value('city'); ?>" placeholder="Enter City"
                            required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4">pin code</label>
                        <input type="text" name="pin_code" class="form-control" id="pin_code"
                            placeholder="Enter Pin Code"
                            value="<?php echo $approval['pincode'] ?? set_value('pin_code'); ?>" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="inputState">State</label>
                        <input type="text" name="state" class="form-control" id="state"
                            value="<?php echo $approval['state'] ?? set_value('state'); ?>" placeholder="Enter State"
                            required>
                    </div>
                </div>
                <br />

                <input type="hidden" name="id" value="<?php echo isset($approval['id']) ? $approval['id'] : ''; ?>">
                <br />
                <div class="form-row">
                    <div class="col">
                        <label for="inputEmail4">&nbsp;&nbsp;&nbsp;</label><br>
                        <input type="submit" name="add_save" class="btn btn-primary" value="Submit">
                    </div>
                </div>

        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->