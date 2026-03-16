<div class="container-fluid">
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Setting Page </h6>
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
        <div class="card-body">
            <div class="table-responsivee">
                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                    <form method="post" action="<?php echo base_url('admin/update_settings'); ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col">
                                <label for="inputEmail4">Name</label>
                                <input type="text" name="name" class="form-control" value="<?= $application['name'] ?>"
                                    placeholder="Name">
                            </div>
                        </div>
                        
                        <br>
                       
                        <div class="form-row">
                            <div class="col">
                                <label for="inputEmail4">Admin Username</label>
                                <input type="text" name="username" class="form-control" value="<?= $application['username'] ?>"
                                    placeholder="Admin Username">
                            </div>
                            <div class="col">
                                <label for="inputEmail4">Form Email Address</label>
                                <input type="text" name="email" class="form-control" value="<?= $application['email'] ?>"
                                    placeholder="Form Email Address">
                            </div>
                        </div><br>

                        <div class="form-row">
                            <div class="col">
                                <label for="inputEmail4">Password</label>
                                <input type="text" class="form-control" name="password" value=""
                                    placeholder="Password">
                            </div>
                            <div class="col">
                                <label for="inputEmail4">&nbsp;&nbsp;&nbsp;</label><br>
                                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->