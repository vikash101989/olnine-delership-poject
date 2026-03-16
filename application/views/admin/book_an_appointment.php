<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Appointment Form </h6>
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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>


                        <tr>
                            <th>S.NO.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>


                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($approvals as $application) {
                            ?>
                            <tr>
                                <td><?php echo $application['id']; ?></td>
                                <td><?php echo $application['name']; ?></td>
                                <td><?php echo $application['email']; ?></td>
                                <td><?php echo $application['mobile']; ?></td>
                                <td><?php echo $application['created_at']; ?></td>
                                <td><a href="<?php echo site_url('admin/delete_application/' . $application['id']); ?>"
                                        class="btn btn-danger delete" id="1"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->