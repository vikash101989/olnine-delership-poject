<main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">



    <style>
        ul li {
            color: #000;
            font-size: var(--menu-font-size);
            font-weight: var(--font-weight-normal);
        }

        .custom-block-profile span,
        .custom-block-profile p a {
            max-width: -webkit-fill-available;
        }

        b,
        strong {
            margin-right: 10px;
        }
    </style>


    <div class="title-group mb-3">
        <h1 class="h2 mb-0">Profile</h1>
    </div>

    <div class="row my-4">
        <div class="col-lg-7 col-12">
            <div class="custom-block custom-block-profile">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-3">
                        <h6>General</h6>
                    </div>

                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-profile-image-wrap">
                            <img src="<?php echo base_url('fronted'); ?>/website/customer/images/medium-shot-happy-man-smiling.jpg"
                                class="custom-block-profile-image img-fluid" alt="">

                            <a href="<?php echo base_url('home/setting'); ?>" class="bi-pencil-square custom-block-edit-icon"></a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <p class="d-flex flex-wrap mb-2">
                            <strong>Name:</strong>

                            <span><?php echo $application['name']; ?></span>
                        </p>

                        <p class="d-flex flex-wrap mb-2">
                            <strong>Email:</strong>

                            <a href="#">
                                <?php echo $application['email']; ?>
                            </a>
                        </p>

                        <p class="d-flex flex-wrap mb-2">
                            <strong>Phone:</strong>

                            <a href="#">
                                <?php echo $application['mobile']; ?>
                            </a>
                        </p>

                        <p class="d-flex flex-wrap mb-2">
                            <strong>Aadhar:</strong>

                            <span><?php echo $application['aadhar']; ?></span>
                        </p>

                        <p class="d-flex flex-wrap mb-2">
                            <strong>PanCard:</strong>

                            <span><?php echo $application['pancard']; ?></span>
                        </p>

                        <p class="d-flex flex-wrap">
                            <strong>Address:</strong>

                            <span><?php echo $application['address']; ?></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="custom-block custom-block-profile bg-white">
                <h6 class="mb-4">Bank Information</h6>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Holder:</strong>

                    <span><?php echo $application['bank_holder']; ?></span>
                </p>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Account:</strong>

                    <span><?php echo $application['bank_account']; ?></span>
                </p>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Bank:</strong>

                    <span><?php echo $application['bank_name']; ?></span>
                </p>

                <p class="d-flex flex-wrap mb-2">
                    <strong>IFSC:</strong>

                    <span><?php echo $application['bank_ifsc']; ?></span>
                </p>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Branch:</strong>

                    <span><?php echo $application['bank_address']; ?></span>
                </p>

            </div>
        </div>

        <div class="col-lg-5 col-12">



            <div class="custom-block custom-block-transations">
                <h6 class="mb-4">Loan Information</h6>

                <div class="border-top pt-4 mt-4 text-center">
                    <p class="d-flex flex-wrap mb-2">
                        <strong>Type: </strong>

                        <span><?php echo $application['loan_type']; ?></span>
                    </p>

                    <p class="d-flex flex-wrap mb-2">
                        <strong>Amount:</strong>

                        <span> ₹ <?php echo number_format($application['loan_amount'], 2); ?></span>
                    </p>

                    <p class="d-flex flex-wrap mb-2">
                        <strong>Tenure:</strong>

                        <span> <?php echo $application['period']; ?> Months</span>
                    </p>

                    <p class="d-flex flex-wrap mb-2">
                        <strong>EMI:</strong>

                        <span> ₹ <?php echo number_format($application['loan_emi'], 2); ?></span>
                    </p>

                    <p class="d-flex flex-wrap mb-2">
                        <strong>Interest:</strong>

                        <span> ₹ <?php echo number_format($application['loan_intrest'], 2); ?></span>
                    </p>
                </div>
            </div>
        </div>

    </div>