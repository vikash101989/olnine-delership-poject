<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-title-content">
          <h2>Apply now</h2>
          <ul>
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li>Apply now</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- End Page Title Area -->

<style>
  ul.list-unstyled li {
    color: red;
  }
</style>

<!-- Start Apply Area -->
<section class="apply-area ptb-100">
  <div class="container">
    <div class="apply-title">
      <h3>Loan Application</h3>
    </div>
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
    <form method="post" action="<?php echo base_url('home/submit_application'); ?>" id="apply_now_form"
      class="apply_now_form_wrap">
      <div class="row">
        <div class="col-lg-6">
          <div class="apply-form">

            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>" required
                data-error="Please Enter First Name" />
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label>Email Address*</label>
              <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required data-error="Please Enter Email Address">
              <div class="help-block with-errors"></div>
            </div>


            <div class="form-group">
              <label>Phone Number*</label>
              <input type="text" name="mobile" class="form-control" value="<?php echo set_value('mobile'); ?>" required data-error="Please Enter Phone Number">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label>Gender</label>
              <div class="select-box">
                <select class="form-control" name="gender" value="<?php echo set_value('gender'); ?>" required data-error="Please Enter Gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="apply-form">
            <div class="form-group">
              <label>Country*</label>
              <div class="select-box">
                <select class="form-control" name="country" required data-error="Please Enter Country">
                  <option value="India">India</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="form-group">
              <label>State*</label>
              <input type="text" name="state" class="form-control" value="<?php echo set_value('state'); ?>" required data-error="Please Enter State">
              <div class="help-block with-errors"></div>
            </div>


            <div class="form-group">
              <label>City*</label>
              <input type="text" name="city" class="form-control" value="<?php echo set_value('city'); ?>" required data-error="Please Enter City">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label data-error="Select an option">Loan Type</label>
              <div class="select-box">
                <select id="loan_type" class="form-control" name="loan_type" required
                  data-error="Please Enter Loan Type" aria-required="true">
                  <option value="Business Loan" <?php echo set_select('loan_type', 'Business Loan'); ?>>Business Loan</option>
                  <option value="Commercial Loan" <?php echo set_select('loan_type', 'Commercial Loan'); ?>>Commercial Loan</option>
                  <option value="House Loan" <?php echo set_select('loan_type', 'House Loan'); ?>>House Loan</option>
                  <option value="Personal Loan" <?php echo set_select('loan_type', 'Personal Loan'); ?>>Personal Loan</option>
                  <option value="Education Loan" <?php echo set_select('loan_type', 'Education Loan'); ?>>Education Loan</option>
                  <option value="Car Loan" <?php echo set_select('loan_type', 'Car Loan'); ?>>Car Loan</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="form-group">
              <label>Loan Amount*</label>
              <input type="text" name="amount" class="form-control" value="<?php echo set_value('amount'); ?>" required data-error="Please Enter Amount">
              <div class="help-block with-errors"></div>
            </div>


          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 text-right">
          <button type="submit" name="submit" class="default-btn mb-4">
            Send Message
            <span></span>
          </button>
        </div>
      </div>

      <div id="msgSubmit" class="h3 text-center hidden"></div>
      <div class="clearfix"></div>
    </form>
  </div>
</section>