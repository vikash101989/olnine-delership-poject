<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>VALMO LOGISTICS in India </title>
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/851e524558f16384.css" data-precedence="next" />
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/58619cf52ee0589d.css" data-precedence="next" />
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/e13e05398bb1b282.css" as="style"
        data-precedence="dynamic" />

    <link rel="icon" href="<?php echo base_url('assets1/img/favicon.png'); ?>" type="image/jpg" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





    <style type="text/css">
        @media print {
            #div4 {
                display: none;
            }

            body .printable {
                display: block;
                /*height: 500px;*/
            }
        }

        .button1 {
            background-color: #04AA6D;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #04AA6D;
        }

        .button1:hover {
            background-color: #04AA6D;
            color: white;
        }














        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        /*button {*/
        /*  background-color: #04AA6D;*/
        /*  color: white;*/
        /*  padding: 14px 20px;*/
        /*  margin: 8px 0;*/
        /*  border: none;*/
        /*  cursor: pointer;*/
        /*  width: 100%;*/
        /*}*/

        /*button:hover {*/
        /*  opacity: 0.8;*/
        /*}*/

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 150px;
            border-radius: 150px;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #000000;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-collapse: collapse;
        }




        .pt45 {
            padding-top: 45px;
        }

        .order-tracking {
            text-align: center;
            width: 20%;
            position: relative;
            display: block;
        }

        .order-tracking .is-complete {
            display: block;
            position: relative;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            border: 0px solid #AFAFAF;
            background-color: #f7be16;
            margin: 0 auto;
            transition: background 0.25s linear;
            -webkit-transition: background 0.25s linear;
            z-index: 2;
        }

        .order-tracking .is-complete:after {
            display: block;
            position: absolute;
            content: '';
            height: 14px;
            width: 7px;
            top: -2px;
            bottom: 0;
            left: 5px;
            margin: auto 0;
            border: 0px solid #AFAFAF;
            border-width: 0px 2px 2px 0;
            transform: rotate(45deg);
            opacity: 0;
        }

        .order-tracking.completed .is-complete {
            border-color: #27aa80;
            border-width: 0px;
            background-color: #27aa80;
        }

        .order-tracking.completed .is-complete:after {
            border-color: #fff;
            border-width: 0px 3px 3px 0;
            width: 7px;
            left: 11px;
            opacity: 1;
        }

        .order-tracking p {
            color: #A4A4A4;
            font-size: 16px;
            margin-top: 8px;
            margin-bottom: 0;
            line-height: 20px;
        }

        .order-tracking p span {
            font-size: 14px;
        }

        .order-tracking.completed p {
            color: #000;
        }

        .order-tracking::before {
            content: '';
            display: block;
            height: 3px;
            width: calc(100% - 40px);
            background-color: #f7be16;
            top: 13px;
            position: absolute;
            left: calc(-50% + 20px);
            z-index: 0;
        }

        .order-tracking:first-child:before {
            display: none;
        }

        .order-tracking.completed:before {
            background-color: #27aa80;
        }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</head>

<body>

    <script>
        swal({
            title: "login successfully!",
            text: "<?php echo $application['name']; ?>, Welcome to Valmo Logistics",
            icon: "success",
            button: "ok!",
        });
    </script>




    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Titillium+Web");

        * {
            font-family: "Titillium Web", sans-serif;
        }

        .navbar .navbar-brand {
            font-size: 30px;
            color: white;
        }

        .navbar .nav-item {
            padding: 10px 20px;

        }

        .navbar .nav-link {
            font-size: 20px;
            margin-left: 10px;
            color: white;
        }

        .fa-bars {
            color: white;
            font-size: 30px;
        }
    </style>

    <body>

        <nav style="background-color: #092d5e;" class="navbar sticky-top navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img
                        src="<?php echo base_url('assets'); ?>/vadmin/img/valmologo.png" alt="Girl in a jacket"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <?php if ($application['status'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('home/logout'); ?>">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('home/status'); ?>">Check Status</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Track Order</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>





        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
    <main id="main">
        <section id="status" class="wow fadeInUp mt-4">
            <div class="container" id="apply">
                <div>


                </div>

                <!--<table>-->
                <!--                       <tr >-->
                <!--<th colspan="4" scope="row"><img src="images/logo.png" alt="ADANI TOTAL GAS LIMITED  Company in India" width="150" height="100"></th>-->
                <!--                        <th colspan="4" scope="row"><h1 style="text-align: center; color:#1d0aab;"><b>VALMO LOGISTICS </b></h1></th>-->
                <!--                        <th scope="row" style="text-align: center">-->
                <!--                             <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img width="48" height="48" src="https://img.icons8.com/glassmorphism/48/password.png" alt="password"/></button>-->
                <!--                             <button style="width:auto;"><a href="admin/logout.php"><img width="48" margin-left="50px" height="48" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/external-logout-screen-from-the-working-portfolio-of-a-user-classic-color-tal-revivo.png"/></a></button>-->
                <!--                        </th>-->

                <!--                    </tr>-->
                <!--</table>-->


                <div class="section-header pt-4">
                    <h1><b>Application No. <?php echo $application['app_id']; ?> </b></h1>
                    <marquee>
                        <p style="color:green;"><b>Congratulations <?= $application['name']; ?> - Your Location Has Been
                                Approved - <b> <?= $application['address']; ?></b> </p> </b>
                    </marquee>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <!-- <tr>-->
                                    <!--    <td></td>-->
                                    <!--    <td></td>-->
                                    <!--    <th>Apply Date</th>-->
                                    <!--    <td>2024-08-05 </td>-->
                                    <!--</tr>-->
                                    <tr class="text-nowrap">
                                        <th scope="row">Application No.</th>
                                        <td> <?= $application['app_id']; ?> </td>
                                        <th>Document No.</th>
                                        <td>DX12T08Y00</td>
                                    </tr>
                                    <tr class="text-nowrap">
                                        <th colspan="4" scope="row">Application Details</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Application Name</th>
                                        <td> <?= $application['name']; ?> </td>
                                        <th>Father / Husband Name</th>
                                        <td <b> <?= $application['father_name']; ?> </b></td>
                                    </tr>
                                    <tr class="text-nowrap">
                                        <th scope="row">Email</th>
                                        <td> <?= $application['email']; ?> </td>
                                        <th>Mobile</th>
                                        <td> <?= $application['mobile']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pin Code</th>
                                        <td> <b><?= $application['pincode']; ?></b> <b style="color:green;"> /
                                                Approved</b></td>
                                        <th>State</th>
                                        <td> <?= $application['state']; ?> </td>
                                    </tr>
                                    <tr class="text-nowrap">
                                        <th scope="row">Franchise Types :</th>
                                        <td> <?= $application['franchise_type']; ?> </td>
                                        <th>Status</th>
                                        <td style="color: <?= $application['status'] == 1 ? 'green' : 'red' ?>"> <b>
                                                <?= $application['status'] == 1 ? 'Active' : 'Inactive'; ?></b></td>

                                        <!--<th  scope="row">Refund Amount  :</th>-->
                                        <!--<td> </td>-->
                                    </tr>
                                    <tr scope="row">
                                        <th colspan="4" scope="row">Approved Location : <?= $application['address']; ?>
                                        </th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <table style="width:100%"><BR>
                            <h3 style="text-align:center ; ">Fashnear Technologies Private Limited Bank Details</h3>
                            <tr>

                                <th style="text-align:center ; ">Account Number </th>
                                <th style="text-align:center ; ">IFSC Code</th>
                                <th style="text-align:center ; ">Branch Name</th>
                                <th style="text-align:center ; ">Bank Name</th>

                            </tr>
                            <tr>
                                <th style="text-align:center ; "><?= $bankDetails['account_no'] ?></th>
                                <th style="text-align:center ; "><?= $bankDetails['ifsc_code'] ?></th>
                                <th style="text-align:center ; "><?= $bankDetails['bank_branch'] ?></th>
                                <th style="text-align:center ; "><?= $bankDetails['bank_name'] ?></th>
                            </tr>



                            <tr>


                            </tr>
                        </table>

                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr class="thead-dark">
                                        <th colspan="4" scope="row">Approval Letter </th>
                                        <th scope="row">


                                            <a target="_blank"
                                                href="<?php echo base_url('admin/generate_pdf_and_send_email?id=' . $application['id']) . '&download=1&type=approval_letter' ?>"
                                                class="btn btn-warning" class="btn btn-primary pull-right btn-sm"><i
                                                    class="bi bi-file-earmark-arrow-down"></i>&nbsp;&nbsp;&nbsp;Approval
                                                Letter Download</a>





                                        </th>

                                    </tr>




                                </tbody>
                            </table>



                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($payments)) {
                                            $i = 1;
                                            foreach ($payments as $payment) {
                                                $status = $payment['status'] == 1 ? 'Completed' : 'Pending';
                                                ?>
                                                <tr>
                                                    <td><?= $payment['type'] ?></td>
                                                    <td>
                                                        <span class="btn btn-sm btn-success m-1"><?= $status ?></span>

                                                        <?php if ($status == 'Completed') { ?>
                                                            <a href="<?php echo base_url('admin/invoice?id=' . $payment['id'] . '&userid=' . $payment['userid']); ?>"
                                                                title="Invoice" class="btn btn-sm btn-info m-1">Invoice</a>

                                                        <?php } ?>

                                                    </td>

                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-10 hh-grayBox pt45 pb20">
                                        <div class="row justify-content-between">
                                            <div class="order-tracking No_completed">
                                                <span class="is-complete"></span>
                                                <p></p>
                                            </div>
                                            <div class="order-tracking No_completed">
                                                <span class="is-complete"></span>
                                                <p></p>
                                            </div>
                                            <div class="order-tracking No_completed">
                                                <span class="is-complete"></span>
                                                <p></p>
                                            </div>
                                            <div class="order-tracking No_completed">
                                                <span class="is-complete"></span>
                                                <p></p>
                                            </div>
                                            <div class="order-tracking">
                                                <span class="is-complete"></span>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="background-color: #d8d8d8;
    border-radius: 20px;
    position: relative;
    margin: 15px 0;
    height: 30px;
    width: 100%;
" class="progress">
                                <div style="background: linear-gradient(to left, #F2709C, #FF9472);
    box-shadow: 0 3px 3px -5px #F2709C, 0 2px 5px #F2709C;
    border-radius: 20px;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 0;
    opacity: 0;
    transition: 1s ease 0.3s;" class="progress-done" data-done="0">
                                    Work Completed 0%
                                </div>
                            </div>

                            <div>
                                <div id="div3" style=" text-align: center;">




















                                </div>
                            </div> <br>
                            <div>
                                <iframe width="100%" height="500"
                                    src="https://maps.google.com/maps?q=<?= $application['pincode']; ?>&output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>

    <!--              <div id="id01" class="modal">-->

    <!--<form class="modal-content animate" method="post" enctype="multipart/form-data">-->
    <!--  <div class="imgcontainer">-->
    <!--    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->


    <!--  </div>-->

    <!--  <div class="container">-->
    <!--    <label  ><b style="text-align: center">Current Password : 7838315336</b></label><br>-->


    <!--    <label for="psw"><b>New Password</b></label>-->
    <!--    <input type="password" placeholder=" Enter New Password" name="koidpassword" >-->

    <!--    <button name="submit" type="submit">submit</button>-->
    <!--    <label>-->
    <!--      <input type="checkbox" checked="checked" name="remember"> Remember me-->
    <!--    </label>-->
    <!--  </div>-->


    <!--</form>-->
    </div>


    <footer class="styles_footer__D62n0">
        <div class="styles_container__0CKa2 styles_footer_container__VIymK">
            <div><img alt="Valmo - send more for less" loading="lazy" width="190" height="50" decoding="async"
                    data-nimg="1" style="color:transparent"
                    src="https://www.valmo.in/static-assets/valmo-web/valmo-logo-white.svg" /></div>
            <div class="styles_org_details__BLOIO">
                <div class="styles_org_details_sub__hB1IJ">
                    <h4>Fashnear Technologies Private Limited</h4>
                    <div class="styles_more_info__KuY4B">
                        <div class="styles_more_info_sub__ziXmm"><img alt="Valmo&#x27;s office address icon"
                                loading="lazy" width="23" height="23" decoding="async" data-nimg="1"
                                style="color:transparent"
                                src="https://www.valmo.in/static-assets/valmo-web/location-pin.svg" />
                            <p class="styles_valmo_contact_info__6BKPU">Fashnear Technologies Private Limited
                                <!-- -->,<br />CIN: U74900KA2015PTC082263<br /> 3rd Floor, Wing-E, Helios Business
                                Park,Kadubeesanahalli Village, Varthur Hobli, Outer Ring Road Bellandur, Bangalore,
                                Bangalore South, Karnataka, India, 560103
                            </p>
                        </div>
                        <div class="styles_more_info_sub__ziXmm"><img alt="Valmo&#x27;s email details icon"
                                loading="lazy" width="24" height="24" decoding="async" data-nimg="1"
                                style="color:transparent"
                                src="https://www.valmo.in/static-assets/valmo-web/email.svg" />
                            <p class="styles_valmo_contact_info__6BKPU"><a
                                    href="mailto:hello@valmologisticpartners.com">hello@valmologisticpartners.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="styles_legal_container__X1zCi">
                    <h4>Legal</h4>
                    <h6><a href="./privacy">Privacy Policy</a></h6>
                    <h6><a href="./terms">Terms of use</a></h6>
                </div>
            </div>
        </div>
        <div class="styles_container__0CKa2 styles_disclaimer__ieQPi"><i>
                Disclaimer: Any official communication for business related formalities will be sent by Valmo using our
                authorised official email addresses (@valmologisticpartners.com or @meesho.com).
                Kindly DO NOT interact with any communications or requests for payments from any other sources or share
                any personal information.
            </i></div>
        <div class="styles_divider__HIor8"></div>
        <div class="styles_container__0CKa2 styles_copyright_container__7XEUY">
            <div class="styles_copyright__eLvzX">Copyright © 2025. All rights reserved.</div>
        </div>
    </footer>
</body>
<script type="text/javascript">
    function divPrint() {
        // Some logic determines which div should be printed...
        // This example uses div3.
        $("#div3").addClass("printable");
        window.print();
    }
</script>
</body>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
<script type="text/javascript">
    function PrintDiv() {
        window.print();
    }
</script>




<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    const progress = document.querySelector('.progress-done');

    progress.style.width = progress.getAttribute('data-done') + '%';
    progress.style.opacity = 1;
</script>


</html>