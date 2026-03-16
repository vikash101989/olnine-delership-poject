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
            <form method="POST" action="<?php echo base_url('admin/save_application_message/' . $user_id); ?>" enctype="multipart/form-data">
                <div class="table-responsivee">

                    <div class="form-row">
                        <div class="col">
                            <label for="inputEmail4">Enter Title</label>
                            <select name="title" class="form-control" id="message_name">
                                <option value="">Select Title</option>
                                <?php foreach ($messages as $msg): ?>
                                   <option value="<?php echo $msg['id']; ?>" <?php echo isset($message['title']) && $message['title'] == $msg['id'] ? 'selected' : ''; ?>><?php echo $msg['title']; ?></option>
                                <?php endforeach; ?>
                            </select>
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
                    <input type="hidden" name="message_id" value="<?php echo isset($message['id']) ? $message['id'] : ''; ?>">
                     <!-- <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                     <input type="hidden" name="status" value="1">
                     <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>"> -->
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <input type="submit" name="message_submit" class="btn btn-primary"
                                value="Add Message">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->