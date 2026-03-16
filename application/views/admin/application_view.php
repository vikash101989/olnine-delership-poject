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
                                <div class="row">
                                    <div class="col">
                                        <p><strong>Application ID: </strong>&nbsp;<?php echo $application['id']; ?></p>
                                        <p><strong>Application Number:
                                            </strong>&nbsp;<?php echo $application['userid']; ?></p>
                                        <p><strong>Status:
                                            </strong>&nbsp; <a href="javascript:void(0)">
                                                <span
                                                    class="badge badge-warning"><?php echo $application['status']; ?></span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <a href="" title="send-custom-mail" class="btn btn-sm btn-info m-1">Send Custom
                                            Mail</a>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h3>Applicant Details.</h3>
                                        <div class="table-responsive mb-4 mt-4">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Name</th>
                                                        <td><?php echo $application['name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email Address</th>
                                                        <td><?php echo $application['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mobile</th>
                                                        <td>+91 <?php echo $application['mobile']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">WhatsApp</th>
                                                        <td>+91 <?php echo $application['whatsapp']; ?></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <th scope="row">Reference No.</th>
                                                        <td><?php echo $application['reference_no']; ?></td>
                                                    </tr> -->
                                                    <tr>
                                                        <th scope="row">Aadhar Card No.</th>
                                                        <td><?php echo $application['aadhar']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pan Card No.</th>
                                                        <td><?php echo $application['pancard']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address</th>
                                                        <td><?php echo $application['address']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Occupation</th>
                                                        <td>Self Employed</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4>Applicant Bank Details.</h4>
                                        <div class="table-responsive mb-4 mt-4">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Account Holder</th>
                                                        <td><?php echo $application['bank_holder']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Account Number</th>
                                                        <td><?php echo $application['bank_account']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">IFSC</th>
                                                        <td><?php echo $application['bank_ifsc']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Bank Name</th>
                                                        <td><?php echo $application['bank_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Bank Address</th>
                                                        <td><?php echo $application['bank_address']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h3>Loan Details</h3>
                                        <div class="table-responsive mb-4 mt-4">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Amount</th>
                                                        <td><?php echo $application['loan_amount']; ?> Rs.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tenure</th>
                                                        <td><?php echo $application['period']; ?> Months</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Type</th>
                                                        <td><?php echo $application['loan_type']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Interest Rate</th>
                                                        <td><?php echo $application['interest']; ?> Rs.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">EMI Amount</th>
                                                        <td><?php echo $application['loan_emi']; ?> Rs.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Interest Amount</th>
                                                        <td><?php echo $application['loan_intrest']; ?> Rs.</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <th scope="row">EMI Start Date</th>
                                                        <td><?php echo $application['emi_start_date']; ?></td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="d-flex align-items-center">
                                    <div>Send Docs To Mail</div>
                                    <!-- <div class="checkbox-apple" id="enabled-mail">
                                        <input class="yep" id="check-apple" type="checkbox"
                                            onchange="location.href='ajax/sandmail2.php'"
                                            title="please Click on this is mail not send">
                                        <label for="check-apple" title="please Click on this is mail not send"></label>
                                    </div> -->
                                </h4>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','App No:3C43B1EE00 Congratulations!! Your Loan is Approved' , 'APPROVAL', '','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL2FwcHJvdmFsLWZlZXMucGhwP2lkPTI0NDcw&filename=loanApprovedFees-24470', 'Jatin-Approval-fees.pdf', '24470')">Approval</button>

                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan Approved' , '', '','', '')">Approval</button>



                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan Holdings' , 'please find the related document','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL2hvbGRpbmcucGhwP2lkPTI0NDcw&filename=Holding-24470','Jatin-Laon-Holding.pdf')">Holding</button>


                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan Insurance' , 'INSURANCE','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL2luc3VyYW5jZS1kb2MucGhwP2lkPTI0NDcw&filename=Insurance-Docs-24470','Jatin-Laon-Insurance.pdf',24470,'insurance')">Insurance</button>


                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan NOC' , 'please find the related document','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL25vYy5waHA/aWQ9MjQ0NzA=&filename=NOC-24470','Jatin-Loan-NOC.pdf')">NOC</button>

                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan Invoice' , 'please find the related document','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL2ludm9pY2UucGhwP2lkPTI0NDcw&filename=Invoice-24470','Jatin-Invoice-bill.pdf',24470,'invoice')">Invoice</button>


                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Loan Agreement' , 'AGREEMENT','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL0RPQy0yLnBocD9pZD0yNDQ3MA==&filename=Agreement-24470','Jatin-Agreement.pdf', '24470')">Agreement</button>


                                        <button class="btn btn-primary mt-2"
                                            onclick="sendEmail('jatintandon007@gmail.com','Cancel Form' , 'Your loan application has been submitted for cancellation. Your payment will be fully refundable to your bank account within the next 7 working days. <br><br>Finance Manager <br>Sangeet Nair','Jatin','https://dhanifinanceonline.net/pdf-ganarator.php?remotepath=aHR0cHM6Ly9kaGFuaWZpbmFuY2VvbmxpbmUubmV0L2FkbWluL2NhbmNlbC1wYXBlci5waHA/aWQ9MjQ0NzA=&filename=cancel-form-24470&watermark=true','Jatin-cancel-form.pdf')">Cancel
                                            Form</button>



                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <h4 class="ml-3">Download Papers</h4>
                                    <div class="col-12">
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=approval_letter&download=1'); ?>"
                                            title="Invoice" class="btn btn-sm btn-success m-2">Approval Letter</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=holding&download=1'); ?>"
                                            title="Invoice" class="btn btn-sm btn-success m-1">Holding</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=insurance&download=1'); ?>"
                                            title="Insurance" class="btn btn-sm btn-success m-1">Insurance</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=noc&download=1'); ?>"
                                            title="noc" class="btn btn-sm btn-success m-1">NOC</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=invoice&download=1'); ?>"
                                            title="Invoice" class="btn btn-sm btn-success m-1">Invoice</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=agreement&download=1'); ?>"
                                            title="Agreement" class="btn btn-sm btn-success m-1">Agreement</a>
                                        <a href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id'] . '&template=cancel_form&download=1'); ?>"
                                            title="Cancel Form" class="btn btn-sm btn-success m-1">Cancel Form</a>
                                    </div>
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