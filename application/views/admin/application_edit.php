<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Profile</a></li>
            </ol>
        </nav>
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                    data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form name="account" method="post" id="general-info"
                                action="<?php echo base_url('admin/update_application/'); ?>"
                                class="section general-info" enctype="multipart/form-data">
                                <div class="info">
                                    <h6 class="">General Information</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <?php
                                            $errmsg = $this->session->flashdata('errormsg');
                                            if (!empty($errmsg)): ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;</button>
                                                    <h5 class="text-center"><?php echo $errmsg; ?></h5>
                                                </div>
                                            <?php endif; ?>
                                            <?php $msg = $this->session->flashdata('successmsg');
                                            if (!empty($msg)): ?>
                                                <div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;</button>
                                                    <h5 class="text-center"><?php echo $msg; ?></h5>
                                                </div>
                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="fullName">Name</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="Name" name="name" placeholder="Name"
                                                                        value="<?php echo $application['name']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control mb-4"
                                                                        id="email" name="email" placeholder="Email"
                                                                        value="<?php echo $application['email']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="phone" name="mobile" placeholder="Phone"
                                                                        value="<?php echo $application['mobile']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="whatsapp">Whatsapp Number</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="whatsapp" name="whatsapp"
                                                                        placeholder="Whatsapp Number"
                                                                        value="<?php echo $application['whatsapp']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="aadhar">Aadhar</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="aadhar" name="aadhar" placeholder="Aadhar"
                                                                        value="<?php echo $application['aadhar']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="pan">Pan Card</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="pan" name="pancard" placeholder="PAN Card"
                                                                        value="<?php echo $application['pancard']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="address">Address</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="address" name="address"
                                                                        placeholder="Address"
                                                                        value="<?php echo $application['address']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="pincode">Pincode</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="pincode" name="pincode"
                                                                        placeholder="Pincode"
                                                                        value="<?php echo $application['pincode']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="occupation">Occupation</label>
                                                                    <select class="form-control" name="occupation"
                                                                        required>
                                                                        <option value="">Select Your Occupation</option>
                                                                        <option value="Self Employed" <?php echo (isset($application['occupation']) && $application['occupation'] == 'Self Employed') ? 'selected' : ''; ?>>Self
                                                                            Employed</option>
                                                                        <option value="Salaried" <?php echo (isset($application['occupation']) && $application['occupation'] == 'Salaried') ? 'selected' : ''; ?>>Salaried</option>
                                                                        <option value="Other" <?php echo (isset($application['occupation']) && $application['occupation'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="loan_amount">Loan Amount</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="loan_amount" name="loan_amount"
                                                                        placeholder="Loan Amount"
                                                                        value="<?php echo $application['loan_amount']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="loan_tenure">Loan Tenure</label>
                                                                    <select name="period" id="period"
                                                                        class="form-control" required
                                                                        onchange="executeSum()">
                                                                        <option value="">Loan Tenure</option>
                                                                        <?php
                                                                        $periods = [
                                                                            "12" => "12 Months",
                                                                            "24" => "24 Months",
                                                                            "36" => "36 Months",
                                                                            "48" => "48 Months",
                                                                            "60" => "60 Months",
                                                                        ];
                                                                        foreach ($periods as $val => $label) {
                                                                            $selected = (isset($application['period']) && $application['period'] == $val) ? 'selected' : '';
                                                                            echo "<option value=\"$val\" $selected>$label</option>";
                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="loan_type">Loan Type</label>
                                                                    <select name="loan_type" id="loan_type"
                                                                        class="form-control" required
                                                                        onchange="executeSum()">
                                                                        <option value="" disabled>Select Loan Type
                                                                        </option>
                                                                        <option value="Personal Loan" <?php echo ($application['loan_type'] == 'Personal Loan') ? 'selected' : ''; ?>>Personal Loan
                                                                        </option>
                                                                        <option value="Business Loan" <?php echo ($application['loan_type'] == 'Business Loan') ? 'selected' : ''; ?>>Business Loan
                                                                        </option>
                                                                        <option value="Home Loan" <?php echo ($application['loan_type'] == 'Home Loan') ? 'selected' : ''; ?>>Home Loan</option>
                                                                        <option value="Education Loan" <?php echo ($application['loan_type'] == 'Education Loan') ? 'selected' : ''; ?>>Education Loan
                                                                        </option>
                                                                        <option value="Loan Against Property" <?php echo ($application['loan_type'] == 'Loan Against Property') ? 'selected' : ''; ?>>Loan
                                                                            Against
                                                                            Property</option>
                                                                        <option value="Marksheet Loan" <?php echo ($application['loan_type'] == 'Marksheet Loan') ? 'selected' : ''; ?>>Marksheet Loan
                                                                        </option>
                                                                        <option value="Mudara Loan" <?php echo ($application['loan_type'] == 'Mudara Loan') ? 'selected' : ''; ?>>Mudara Loan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="interest">Interest Rate</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="interest" name="interest"
                                                                        placeholder="Interest Rate"
                                                                        value="<?php echo $application['interest']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="emi">EMI Amount</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="loan_emi" name="loan_emi"
                                                                        placeholder="EMI Amount"
                                                                        value="<?php echo $application['loan_emi']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="emi">Intrest Amount</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="loan_intrest" name="loan_intrest"
                                                                        placeholder="Loan Interest"
                                                                        value="<?php echo $application['loan_intrest']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="bankname">Bank Name</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="bankname" name="bank_name"
                                                                        placeholder="Bank Name"
                                                                        value="<?php echo $application['bank_name']; ?>"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="bank_acc">Bank Account Number</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="bank_account" name="bank_account"
                                                                        placeholder="Bank Account Number"
                                                                        value="<?php echo $application['bank_account']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="ifsc">IFSC</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="ifsc" name="bank_ifsc" placeholder="IFSC"
                                                                        value="<?php echo $application['bank_ifsc']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="bank_holder">Account Holder</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="bank_holder" name="bank_holder"
                                                                        placeholder="Account Holder"
                                                                        value="<?php echo $application['bank_holder']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="bank_address">Bank Address</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                        id="bank_address" name="bank_address"
                                                                        placeholder="Bank Address"
                                                                        value="<?php echo $application['bank_address']; ?>">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="form-control mb-4" id="id"
                                                                name="id" value="<?php echo $application['id']; ?>">
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="status">Status</label>
                                                                    <select name="loan_appr_status" class="form-control"
                                                                        id="cuSatatus">
                                                                        <option value="0" <?php echo (isset($application['loan_appr_status']) && $application['loan_appr_status'] == '0') ? 'selected' : ''; ?>>Pending</option>
                                                                        <option value="1" <?php echo (isset($application['loan_appr_status']) && $application['loan_appr_status'] == '1') ? 'selected' : ''; ?>>Approved</option>
                                                                        <option value="2" <?php echo (isset($application['loan_appr_status']) && $application['loan_appr_status'] == '2') ? 'selected' : ''; ?>>Rejected</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emi_start_date">EMI Start Date</label>
                                                                    <input type="date" class="form-control mb-4"
                                                                        id="emi_start_date" name="emi_start_date"
                                                                        value="<?php echo isset($application['emi_start_date']) ? $application['emi_start_date'] : ''; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-secondary mb-4 mr-2">Update</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- row -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 Dhani Loan , All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->
<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="statusForm">
                    <div class="form-group">
                        <label for="newStatus">New Status:</label>
                        <input type="text" class="form-control" id="newStatus" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveStatus">Save changes</button>
            </div>
        </div>
    </div>
</div>