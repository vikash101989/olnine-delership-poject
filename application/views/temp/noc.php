<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOC</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            color: #000;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 75%;
            margin: 0 auto;
            padding: 20px 40px;
        }

        .center {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .mt-12 {
            margin-top: 48px;
        }

        .mb-8 {
            margin-bottom: 32px;
        }

        .my-6 {
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .pl-4 {
            padding-left: 16px;
        }

        .list-disc {
            list-style-type: disc;
        }

        .text-gray {
            color: #6b7280;
        }

        .text-red {
            color: #ff0000;
        }

        .w-24 {
            width: 96px;
        }

        .underline {
            text-decoration: underline;
        }

        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 400px;
            height: 400px;
            opacity: 0.15;
            z-index: 0;
            transform: translate(-50%, -50%);
        }

        /* Watermark not supported by dompdf via CSS, use dompdf PHP watermark feature if needed */
    </style>
</head>

<body>
    <div class="container center">
        <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" alt="" class="w-24" style="height:auto;">
        <h1 class="bold" style="font-size: 22px; letter-spacing: 1px;">Aadhar Credit Pvt Ltd</h1>
        <p class="bold text-gray" style="font-size: 20px; margin: 4px 0;">NO OBJECTION CERTIFICATE</p>

        <ol class="list-disc my-6 pl-4" style="line-height: 2;text-align:left;">
            <li style="margin-top:20px;">NOC Fee: <?php echo $payment[0]['amount'] ? number_format($payment[0]['amount'], 2) : 17,200; ?>/- It is hereby declared that
                <u><?php echo $application['name']; ?></u> and Aadhar Credit are the top providers of loans to you under
                government regulation.</li>
            <li style="margin-top:20px;">We received the document copy as an agreement with the owner Permission.</li>
            <li style="margin-top:20px;">The Department of Loan will sanction a loan for you after our internal process
                is finished.</li>
            <li style="margin-top:20px;"> Government Tax of Rs. <?php echo $payment[0]['amount'] ? number_format($payment[0]['amount'], 2) : 17,200; ?>/- Service Tax Customer have to pay within 2 days
                after sending the NOC form and documents.</li>
            <li style="margin-top:20px;">Note 1: If the applicant is not eligible, the company will refund the
                registration and other amounts in cash or on his bank account.</li>
            <li style="margin-top:20px;"> Note 2: After clearance of the government tax, the company will issue
                Agreement by Which Company Will Sanction the Loan You Requested.</li>
        </ol>

        <div
            style="position: fixed; top: 40%; left: 50%; transform: translate(-50%, -50%); opacity: 0.2; z-index: 0; pointer-events: none; font-size: 100px; color: #000;">
            <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" alt="" style="width:500px;height:auto;">
        </div>

        <div style="width:100%;">
            <p class="bold underline" style="text-align:left;"><?php echo $application['address']; ?></p>
        </div>

        <div class="mb-8 mt-12" style="width:100%; margin-top:48px; margin-bottom:32px;">
            <p style="text-align:left;">
                <u>Approved Borrower complete address</u><span>:-</span>
                <span class="text-red bold">All amount RS. <?php echo $application['loan_amount']; ?>/-</span>
            </p>
        </div>

        <div class="mt-12" style="width:100%; margin-top:48px;">
            <p class="bold" style="text-align:right;">Aadhar Credit Pvt. Ltd.</p>
        </div>
    </div>
</body>

</html>