<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Message </h6>
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
            <form method="POST" action="<?php echo base_url('admin/save_message'); ?>" enctype="multipart/form-data">
                <div class="table-responsivee">

                    <div class="form-row">
                        <div class="col">
                            <label for="inputEmail4">Enter Title</label>
                            <input type="text" name="title" id="title"
                                value="<?php echo isset($message['title']) ? $message['title'] : ''; ?>"
                                class="form-control" placeholder="Enter Title">
                        </div>

                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="inputEmail4">Enter Message</label>
                            <textarea class="form-control" name="description"
                                id="description"><?php echo isset($message['description']) ? $message['description'] : ''; ?></textarea>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="id" value="<?php echo isset($message['id']) ? $message['id'] : ''; ?>">
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <input type="submit" name="message_submit" class="btn btn-primary"
                                value="<?php echo isset($message['id']) ? 'Update Message' : 'Add Message'; ?>">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->