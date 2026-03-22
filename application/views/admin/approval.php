<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a class="btn btn-primary" href="<?php echo base_url('admin/create_approval'); ?>">Add New Application </a>
            <!--<a class="btn btn-success" href ="/admin/create_adminmessage.php">Send Message</a>-->

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered apply_now_form_table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>APP ID</th>
                            <th>First Name</th>
                            <th>Mobile</th>
                            <th>Type</th>
                            <th>Approval Letter</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>




                    </tfoot>
                    <tbody>
                        <?php if (!empty($approvals)) {?>
                            <?php $i = 1; ?>
                            <?php foreach ($approvals as $approval) { 
                                $text = $approval['status']== 1 ? 'Active' : 'In-active';
                                $class = $approval['status']== 1 ? 'btn-success' : 'btn-warning';

                                ?>
                                <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $approval['app_id']; ?></td>
                            <td><?php echo $approval['name']; ?></td>
                            <td><?php echo $approval['mobile']; ?></td>
                            <td><?php echo $approval['franchise_type']; ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $approval['id']) . '&download=1&type=approval_letter' ?>" class="btn btn-success" >Approval <span class="fa fa-download"></span></a>
                            </td>
                            <td><a href="#" class="btn <?php echo $class; ?>" onClick="active_user_status('<?php echo $approval['id']; ?>', '<?php echo $approval['status']; ?>')"><?php echo $text; ?></a></td>
                            <td>
                                <a href="#" class="btn btn-danger delete_message" id="<?php echo $approval['id']; ?>"><span
                                        class="fa fa-trash"></span></a>
                                <a href="<?php echo base_url('admin/edit_approval/' . $approval['id']); ?>" class="btn btn-primary" id=""><span
                                        class="fa fa-edit"></span></a>

                                
                                <a href="<?php echo base_url('admin/charge_application/' . $approval['id'])  ?>" class="btn btn-info" ><span
                                        class="fa fa-plus"></span></a>       
                                
                                <!-- <a href="#" class="btn <?php echo $class; ?>" onClick="active_user_status('<?php echo $approval['id']; ?>', '<?php echo $approval['status']; ?>')"><?php echo $text; ?></a> -->
                            </td>

                        </tr>
                            <?php $i++;} ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="8" class="text-center">No records found</td>
                            </tr>
                        <?php } ?>   
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->