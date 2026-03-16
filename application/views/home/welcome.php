
    <style>
        :root {
            --primary: #0044cc;
            --secondary: #f6f7fb;
            --text: #0f172a;
            --muted: #6b7280;
            --highlight: #ffebeb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--secondary);
            color: var(--text);
            padding: 20px;
        }

        .card {
            max-width: 800px;
            margin: auto;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #f5fdf5;
            padding: 20px;
            position: relative;
        }

        .header h2 {
            font-size: 28px;
            color: var(--primary);
        }

        .header small {
            color: var(--muted);
            display: block;
            margin-top: 5px;
        }

        .details {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .details div {
            margin: 10px 0;
        }

        .details strong {
            display: block;
            font-size: 14px;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .loan-status {
            background: #f8e6e6;
            padding: 20px;
        }

        .loan-status h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .loan-status p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .loan-status ul {
            margin-left: 20px;
            margin-top: 10px;
        }

        .loan-status ul li {
            margin: 5px 0;
        }

        .contact {
            background: #dff7f7;
            padding: 20px;
            text-align: center;
        }

        .contact h4 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact a {
            color: var(--primary);
            font-weight: bold;
            text-decoration: none;
        }

        .chat-btn {
            margin-top: 15px;
            display: inline-block;
            padding: 10px 18px;
            border-radius: 25px;
            border: 1px solid var(--primary);
            color: var(--primary);
            background: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .chat-btn:hover {
            background: var(--primary);
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .header h2 {
                font-size: 24px;
            }

            .details {
                flex-direction: column;
            }
        }
    </style>
<section class="box2 animated flipInX">
    <div class="container">
        <div class="">
            <div class="col-md-12 col-lg-12 col-sm-12  col-xs-12">
                <ul class="list-inline">
                    <li><a href="<?php echo base_url(); ?>">Home</a> &nbsp;| &nbsp; User Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="box1">
    <div class="container aboutPage">
        <h1 class="lineHead pageHead text-center">Welcome, <?php echo htmlspecialchars($application['name']); ?>!</h1>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                 
                <div class="about1" >
                    <img width="100%" src="<?php echo base_url('assets'); ?>/img/loan_mount.avif"
                        alt="About Image" style="height: 402px !important;border-radius: 8% !important; width:100% !important;">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="card">
                    <!-- Header Section -->
                    <div class="header">
                        <?php
                       
                        if ($application['loan_appr_status'] == 0) {
                            $amountColor = '#ff9800';
                            $application['loan_emi'] ='0.00';
                            echo '<h4 class="mb-3" style="color: #ff9800;">Your loan application is under review</h4>
                                  <p>Please wait while we process your application. We will notify you once a decision has been made.</p>';
                        } elseif ($application['loan_appr_status'] == 2) {
                            $amountColor = '#f44336';
                            $application['loan_emi'] ='0.00';
                            echo '<h4 class="mb-3" style="color: #f44336;">We are sorry! your loan application has been rejected</h4>
                                  <p>If you have any questions, please contact our support team for more information.</p>';
                        } elseif ($application['loan_appr_status'] == 1) {
                             $amountColor = '#2e7d32';
                            echo '<h4 class="mb-3" style="color: #2e7d32;">Congratulations! your loan amount has approved</h4>';
                        }
                        ?>
                        <h2  style="color: <?php echo $amountColor; ?>;"> ₹ <?php echo isset($application['loan_amount']) ? number_format($application['loan_amount'], 2) : '0.00'; ?></h2>
                        <small>Loan Amount</small>

                        <div class="details">
                            <div>
                                <strong>EMI</strong>
                                <span> ₹ <?php echo isset($application['loan_emi']) ? number_format($application['loan_emi'], 2) : '0.00'; ?></span>
                            </div>
                            <div>
                                <strong>Bank Account</strong>
                                <span> ₹ <?php echo isset($application['bank_account']) ? $application['bank_account'] : 'N/A'; ?></span>
                            </div>
                            <div>
                                <strong>Bank Holder</strong>
                                <span> ₹ <?php echo isset($application['bank_holder']) ? $application['bank_holder'] : 'N/A'; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Loan Status -->
                    <div class="loan-status">
                        <h3>Loan Status</h3>
                        <p>
                            Hi <b><?php echo  $application['name'] ?></b>, We have received your loan application.
                            Please send your documents for verification on this WhatsApp extension to get your loan
                            approval letter.
                        </p>
                        <p>These are the documents required:</p>
                        <ul>
                            <li>Aadhaar card</li>
                            <li>PAN card</li>
                            <li>Bank passbook, cancelled cheque, or statement</li>
                            <li>Two passport-size photographs</li>
                            <li>2 reference contact numbers</li>
                        </ul>
                    </div>

                    <!-- Contact Section -->
                    <div class="contact">
                        <h4>Still can’t find what you looking for?</h4>
                        <p>Whatsapp Us: <a href="https://wa.me/918584061749" target="_blank">+91-8584061749</a></p>
                        <a href="https://wa.me/918584061749" class="chat-btn">Chat Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>