<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Loan Applications</a></li>

            </ol>
        </nav>

        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                    data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                            <div class="widget-content widget-content-area br-6">
                                <h4>Loan Applications</h4>
                                <div class="filterBtns">
                                    <a href="?type=all" class="btn btn-primary" title="all">All</a>
                                    <a href="?type=today" class="btn btn-primary" title="today">Today</a>
                                    <a href="?type=yesterday" class="btn btn-primary" title="yesterday">Yesterday</a>
                                    <a href="?type=3days" class="btn btn-primary" title="Last 3 Days">Last 3
                                        Days</a>
                                    <a href="?type=7days" class="btn btn-primary" title="Last 1 Week">Last 1
                                        Week</a>
                                </div>
                                <!-- <a href="add_plans.php"><button class="btn btn-primary mb-2">Add New</button></a> -->

                                <div class="table-responsive mb-4 mt-4">
                                    <table id="zero-config" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Lone TYpe</th>
                                                <th>Lone Amount</th>
                                                <th>Whatsapp no</th>
                                                <th>EMI start Date</th>
                                                <th>View</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <!--<th>paper Download</th>-->
                                                <!-- <th>Send Mail</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($applications)) {
                                                $i = 1;
                                                foreach ($applications as $application) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $application['created_at'] ?></td>
                                                        <td><?= $application['name'] ?></td>
                                                        <td><?= $application['mobile'] ?></td>
                                                        <td><?= $application['loan_type'] ?></td>
                                                        <td><?= $application['loan_amount'] ?> </td>
                                                        <td> <a target="_blank"
                                                                href="https://api.whatsapp.com/send?phone=<?= $application['mobile'] ?>"><img
                                                                    height="32px"
                                                                    src="https://dhanifinanceonline.net/admin/img/whatsapp.png"><?= $application['mobile'] ?></a>
                                                        </td>
                                                        <td>
                                                             <?= $application['emi_start_date'] ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('admin/view_application/' . $application['id']) ?>"
                                                                class="badge badge-success">View</a>
                                                        </td>
                                                        <!-- <td>
                                                            <div data-toggle="modal" data-target="statusModal"
                                                                onclick="openModal(<?= $application['loan_appr_status'] ?>,<?= $application['id'] ?>)" class="badge badge-warning">
                                                                <?php echo $application['loan_appr_status'] == 1 ? 'Approved' : 'Pending';?></div>
                                                            </a>
                                                        </td> -->
                                                        <td>
                                                            <div class="badge badge-warning">
                                                                <?php echo $application['loan_appr_status'] == 1 ? 'Approved' : 'Pending';?></div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('admin/edit_application/' . $application['id']) ?>" title="Edit info"><svg width="24"
                                                                    height="24" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 512 512">

                                                                    <path
                                                                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                                </svg></a>
                                                                &nbsp;&nbsp;
                                                                <a href="<?= base_url('admin/charge_application/' . $application['id']) ?>" title="Add Payment">
                                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8 1a.5.5 0 0 1 .5.5v6.5H15a.5.5 0 0 1 0 1H8.5V15a.5.5 0 0 1-1 0V9.5H1a.5.5 0 0 1 0-1h6.5V1A.5.5 0 0 1 8 1z" />  
                                                                            </svg>
                                                                </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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