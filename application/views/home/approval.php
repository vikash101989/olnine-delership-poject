<style>
    .apv-container-wrap {
        width: 100%;
        overflow: auto;
        padding: 10px 10px 0px;
    }

    .apv-wrap {
        width: 900px;
        margin: 0 auto;
        background: #f8f9fa;
        padding: 20px;
        box-shadow: 0px 0px 12px #aaaaaa;
        margin-bottom: 50px;
    }

    img.avl-hdr-logo {
        max-width: 200px;
    }

    .apv-sub-wrap {
        position: relative;
        /* required for ::before */
        border: 1px solid grey;
        padding: 20px;
        background: none;
        /* remove direct background-image */
    }

    .apv-sub-wrap::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("<?php echo base_url(); ?>assets/img/water-m.png") no-repeat center center;
        background-size: 500px;
        opacity: 0.2;
        /* adjust 0.1–0.3 as needed */
        z-index: 0;
        /* behind content */
    }

    .apv-sub-wrap>* {
        position: relative;
        z-index: 1;
        /* keep text above watermark */
    }

    .avl-dtl-wrap table,
    .avl-dtl-wrap table td,
    .avl-dtl-wrap table th {
        border: 1px solid grey;
        padding: 5px 10px;
    }

    .avl-dtl-wrap table {
        width: 100%;
        border-collapse: collapse;
    }

    .td-hdr>td:nth-child(1) {
        width: 60%;
    }

    .td-hdr>td:nth-child(2) h2 {
        color: #004899;
        font-size: 25px;
        margin-bottom: 0px;
    }

    .td-hdr>td:nth-child(2) p span {
        font-size: 14px;
        font-weight: 700;
    }

    .td-hdr>td:nth-child(2) p {
        font-size: 14px;
        margin: 0;
        line-height: 16px;
    }

    tr.td-hdr {
        border-bottom: 2px solid #004899;
    }

    .td-hdr>td {
        padding-bottom: 10px;
    }

    .avl-h {
        color: #004899;
        text-transform: uppercase;
        font-size: 25px;
        text-decoration: underline;
        font-weight: 500;
        /*margin-bottom: 50px !important;*/
    }

    img.stamp-img {
        width: 100%;
        display: block;
        margin: 20px 0px 20px 0px;
    }

    .c-tdl p span,
    .s-b {
        font-weight: 600;
        color: #606060;
    }

    .apv-wrap p {
        line-height: 20px;
    }

    .c-tdl p {
        margin: 0;
        line-height: 20px;
    }

    .c-tdl {
        margin-bottom: 30px;
    }

    tr.td-hdr.td-ftr p {
        font-size: 11px;
        margin: 0;
        line-height: 0px;
        text-align: center;
        margin-top: 20px;
    }

    tr.g-text p {
        text-align: center;
        line-height: 20px;
        font-size: 13px;
    }

    tr.g-text.rtext p {
        color: #ff5959;
        font-weight: 600;
    }

    tr.g-text.gtext p {
        color: #004899;
        font-weight: 600;
    }

    tr.td-hdr.td-ftr>td:nth-child(1) {
        width: 100%;
    }

    tr.g-text.fter-sin>td:nth-child(2) {
        text-align: center;
    }

    tr.g-text.fter-sin>td:nth-child(2) img {
        width: 150px;
        position: absolute;
        top: 0;
        left: 28%;
    }

    .sin-wrap {
        position: relative;
        height: 90px;
    }

    tr.g-text.fter-sin>td:nth-child(2) p {
        text-align: center;
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }

    table.avl-ftr-wrap {
        margin-top: 50px;
    }

    .s-b-b {
        color: #004899;
    }

    .s-b-b-r {
        color: #ff0000;
    }

    .pdf-btn .pull.pull-right {
        text-align: center;
    }

    img.p-img {
        width: 100px;
        display: block;
        float: inline-end;
        border-radius: 5px;
        border: 2px solid gray;
    }

    @media screen and (max-width: 900px) {
        .apv-wrap {
            width: 100%;
        }

        @media screen and (max-width: 767px) {
            .apv-wrap {
                width: 100%;
            }

            .apv-sub-wrap {

                background-size: 300px;
            }

            tr.td-hdr {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .apv-wrap p {
                text-align: justify;
            }

            tr.g-text.fter-sin {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            tr.g-text.fter-sin td {
                width: 100%;
                text-align: center;
            }

            img.avl-hdr-logo {
                max-width: 150px;
            }

            tr.g-text.fter-sin>td:nth-child(2) img {
                left: 25%;
            }

            tr.td-hdr.td-ftr p {

                line-height: 14px;

            }

        }
    }
</style>
<!-- Approval  Start-->
<div class="container apv-container-wrap canvas_div_pdf" id="print-section">
    <div class="apv-wrap">
        <div class="apv-sub-wrap">
            <div class="avl-wrap">
                <div class="avl-suv-wrap">
                    <div class="avl-hdr">
                        <table style="width:100%">
                            <tbody>
                                <tr class="td-hdr">
                                    <td><img class="avl-hdr-logo"
                                            src="<?php echo base_url('assets/img/apv-log.png'); ?>" alt="image"></td>
                                    <td>
                                        <h2>
                                            Mudara Loan Service
                                        </h2>
                                        <p><span>Email Id : </span>

                                            support@mudaraloan.com
                                        </p>
                                        <!--<p> <span>Helpline No. : </span>-->
                                        <!--   +919038910090-->
                                        <!--</p>-->
                                        <p> <span>Website : </span>
                                            www.mudaraloan.com

                                        </p>
                                        <!--<p> <span>GST No. : </span>-->
                                        <!--     27AAACM0725H1ZS-->
                                        <!--</p>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right"><span>Date</span>&nbsp;&nbsp;<?php echo date('Y-m-d'); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <h3 class="avl-h">dsadas</h3>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <img class="stamp-img" src="<?php echo base_url('assets/img/What-is-Stamp.png'); ?>"
                            alt="image">
                        <?php if (!empty($application['profile_image'])): ?>
                            <img class="p-img" src="<?php echo base_url('uploads/' . $application['profile_image']); ?>"
                                alt="image">
                        <?php endif; ?>

                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div class="c-tdl">
                                            <p><span>To</span></p>
                                            <p><span>Mr./Mrs. </span><?php echo $application['name']; ?></p>
                                            <p> <span>Application Id :</span> <?php echo $application['app_id']; ?></p>
                                            <p> <span>Aadhaar Number :</span> <?php echo $application['aadhar']; ?></p>
                                            <p><span>Subject :</span> </p>
                                        </div>
                                        <span class="s-b">Dear Sir/Madam,</span>
                                        <p>We wish to confirm that your loan <span class="s-b">Registration No :
                                                <?php echo $application['app_id']; ?></span> with us on <span
                                                class="s-b">Aadhaar No.
                                                <?php echo $application['aadhar']; ?></span>
                                            is now sanction/approve based on your analysis of credit, employment,
                                            Income, and assets Information
                                            that you provided to us, we believe that you would quality for the
                                            following:
                                        </p>
                                    </td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="avl-dtl-wrap">
                            <br>
                            <span class="s-b s-b-b">Loan Details</span>
                            <table>

                                <tr>
                                    <td class="s-b">Applicant Name</td>
                                    <td><?php echo $application['name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="s-b">Loan Amount</td>
                                    <td><?php echo $application['loan_amount']; ?></td>
                                </tr>
                                <tr>
                                    <td class="s-b">Interest Rate</td>
                                    <td><?php echo $application['interest']; ?>%</td>
                                </tr>
                                <tr>
                                    <td class="s-b">Loan Period</td>
                                    <td><?php echo $application['period']; ?> months</td>
                                </tr>
                                <tr>
                                    <td class="s-b">EMI</td>
                                    <td><?php echo number_format($application['loan_emi'], 2); ?></td>
                                </tr>
                            </table>
                            <br>
                            <p>The loan amount will be transferred in your account in one working hour after paying
                                the amount for Mudara loan finance as your loan security.</p>
                            <p>All payment will paid as per your relationship manager guidance.</p>
                            <p>it's your pleasure to serve you as a Mudara finance limited customer and we hope
                                that you will choose us for your future financial need as will if you have any
                                suggestion by which we could extend better service please feel ti contact us.</p>
                            <p> <span class="s-b s-b-b-r">Loan Processing Charges : 1234/-</span></p>


                            <span class="s-b s-b-b">Payment this account</span>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="s-b">A/C Holder Name</td>
                                        <td><?php echo $application['bank_holder']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">Bank Name</td>
                                        <td><?php echo $application['bank_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">A/C No.</td>
                                        <td><?php echo $application['bank_account']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">IFSC Codeee</td>
                                        <td><?php echo $application['bank_ifsc']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">Google Pay</td>
                                        <td><?php echo $application['googlepay']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">Phonepe</td>
                                        <td><?php echo $application['phonepe']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="s-b">Paytm</td>
                                        <td><?php echo $application['paytm']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table style="width:100%" class="avl-ftr-wrap">
                            <tbody>
                                <tr class="g-text rtext">
                                    <td colspan="2">
                                        <p>Note : Cash Deposited Not Accepted by Company (Online Transaction Needed
                                            for your Bank Account/Transaction Verification).</p>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr class="g-text gtext">
                                    <td colspan="2">
                                        <p>Thank you for choosing Mudara loan service and assuring you of our best
                                            services at all time, Looking forward to a great and long relationship
                                            with you.</p>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr class="g-text fter-sin">
                                    <td>
                                        <img class="avl-hdr-logo"
                                            src="<?php echo base_url('assets/img/apv-log.png'); ?>" alt="image">
                                    </td>
                                    <td>
                                        <p>Regards</p>
                                        <div class="sin-wrap">
                                            <img class="avl-hdr-logo"
                                                src="<?php echo base_url('assets/img/sign1_final.png'); ?>" alt="image">
                                            <img class="avl-mhr-logo"
                                                src="<?php echo base_url('assets/img/bajaj-m.png'); ?>" alt="image">
                                        </div>
                                        <p>Mr. Sameer Gehlaut</p>
                                        <p>Finance Manager</p>
                                    </td>
                                </tr>
                                <tr class="td-hdr td-ftr">
                                    <td colspan="2">
                                        <p><span>Address : </span>
                                            Bandra Kurla Complex
                                            Building complex in Mumbai, Maharashtra - 400051
                                        </p>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br><br>
</div>
<!-- Approval  End-->
<?php if (!empty($messages)) { ?>
    <?php foreach ($messages as $message) {
        $style = ($message['status'] == 1) ? 'background:#d4edda!important;' : 'background:#f5b6b6!important;';

        ?>
        <div class="apv-wrap">
            <div class="apv-sub-wrap" style="<?php echo $style; ?>">
                <div class="avl-wrap">
                    <div class="avl-suv-wrap">

                        <span class="s-b">Dear Customer </span>
                        <p><span class="s-b">Subject :</span> <?php echo $message['title']; ?></p>
                        <p> <?php echo $message['description']; ?> </p>

                    </div>
                </div>
            </div>
        </div>
    <?php }
} ?>