<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Show Message </h6>
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

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>Title Message</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>




                    </tfoot>
                    <tbody>

                        <?php if (!empty($messages)) {
                            $sno = 1;
                            foreach ($messages as $message) { ?>
                                <tr>
                                    <td><?php echo $sno++; ?></td>
                                    <td><?php echo $message['title']; ?></td>
                                    <td><?php echo $message['description']; ?></td>
                                    <td><a href="<?php echo base_url('admin/delete_message?id=' . $message['id']); ?>" class="btn btn-danger delete" id="<?php echo $message['id']; ?>"><span
                                                class="fa fa-trash"></span></a>
                                        <a href="<?php echo base_url('admin/edit_message?id=' . $message['id']); ?>" class="btn btn-primary"
                                            id=""><span class="fa fa-edit"></span></a>
                                    </td>

                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">No messages found.</td>
                            </tr>
                        <?php } ?>
                        </td>

                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->