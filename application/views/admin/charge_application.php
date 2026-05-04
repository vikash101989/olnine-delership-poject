<div class="container-fluid">
    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
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
                        <div class="widget-content widget-content-area br-6">
                            <h4>Payments</h4>

                            <div style="text-align: center;">
                                <?php echo $application['name'] . ' (' . $application['appid'] . ')'; ?>
                            </div>

                            <div style="text-align: right; margin-bottom: 10px;">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fileModal">
                                    Upload Agreement
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#statusModal">
                                    Add New
                                </button>
                            </div>

                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Updated AtDate</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                            <th>Invoice Download</th>
                                            <th>Action</th>
                                            <!--<th>paper Download</th>-->
                                            <!-- <th>Send Mail</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($payments)) {
                                            $i = 1;
                                            foreach ($payments as $payment) {
                                                ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $payment['type'] ?></td>
                                                    <td><?= $payment['amount'] ?></td>
                                                    <td><?= $payment['modified_at'] ?></td>
                                                    <td><?= $payment['created_at'] ?></td>
                                                    <td><?= $payment['status'] == 0 ? 'Pending' : 'Paid' ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('admin/invoice?id=' . $payment['id'] . '&userid=' . $payment['userid']); ?>"
                                                            title="Invoice" class="btn btn-sm btn-success m-1">Invoice</a>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="<?= base_url('admin/edit_payment/' . $payment['id']) ?>"
                                                                title="Edit info"><svg width="24" height="24"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                                                    <path
                                                                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                                </svg>
                                                            </a> -->
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-info"
                                                            onclick="editPayment('<?= $payment['id']; ?>', '<?= $payment['type']; ?>', '<?= $payment['amount']; ?>', '<?= $payment['status']; ?>')">
                                                            Edit
                                                        </a>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            if (!empty($application['agreement_file'])) {
                                                ?>
                                                <tr>
                                                    <td colspan="8" class="text-center" style="color: seagreen;">

                                                        <!-- <img src="<?= base_url('uploads/' . $application['agreement_file']); ?>" alt="Download Agreement" class="img-fluid"> -->
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <?php if (!empty($application['agreement_file'])) { ?>
                                <div class="widget-content widget-content-area br-6 mt-4">
                    
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="<?= base_url('uploads/' . $application['agreement_file']); ?>"
                                                download>
                                                <img src="<?= base_url('assets/media/pdf-svgrepo-com.svg'); ?>"
                                                    alt="Click to Download" style="width: 50px;">
                                            </a>
                                        <div class="mt-3">
                                            <a href="<?= base_url('uploads/' . $application['agreement_file']); ?>" download class="btn btn-primary">
                                                Download Agreement
                                            </a>
                                        </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
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
                <h5 class="modal-title" id="statusModalLabel">Add/Edit Charges</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modalClose()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" action="<?= base_url('admin/add_payment'); ?>" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" id="payment_id"> <!-- for edit -->
                    <input type="hidden" name="application_id" value="<?= $application['id']; ?>">
                    <div class="form-group">
                        <label>Type</label>
                        <select name="type" id="payment_type" class="form-control" required>
                            <option value="">Type</option>
                            <?php foreach (PAYMENT_CHARGES as $val): ?>
                                <option value="<?= $val; ?>"><?= $val; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" id="payment_amount" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="payment_status" class="form-control" required>
                            <option value="">Select Status</option>
                            <option value="1">Paid</option>
                            <option value="0">Pending</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="modalClose()">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="fileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modalClose()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" action="<?= base_url('admin/add_payment'); ?>" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="application_id" value="<?= $application['id']; ?>">
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="agreement_file" id="agreement_file" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="modalClose()">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>