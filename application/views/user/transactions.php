<main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">

    <style>
        ul li {
            color: #000;
            font-size: var(--menu-font-size);
            font-weight: var(--font-weight-normal);
        }
    </style>


    <div class="title-group mb-3">
        <h1 class="h2 mb-0">Wallet</h1>
    </div>

    <div class="row my-4">
        <div class="col-lg-12 col-12">
            <div class="custom-block bg-white">
                <h5 class="mb-4">Account Activities</h5>

                <div class="table-responsive">
                    <table class="account-table table">
                        <thead>
                            <tr>
                                <th scope="col">Description</th>

                                <th scope="col">Payment Type</th>

                                <th scope="col">Amount</th>

                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td scope="row"><?= $application['loan_type']; ?></td>

                                <td scope="row">Bank Transfer</td>

                                <td class="text-danger" scope="row">
                                    <span class="me-2">₹</span><?= $application['loan_amount']; ?>
                                </td>

                                <td scope="row">
                                    <span class="badge text-bg-danger">
                                        Under Process
                                    </span>
                                </td>
                            </tr>
                            <!--approval-->
                            <?php if (!empty($payments)) { 
                                foreach ($payments as $payment) {
                                    $class = $payment['status'] ? 'text-bg-success' : 'text-bg-danger';
                                ?>
                            <tr>
                                <td scope="row"><?= $payment['type'] ?> Fee</td>
                                <td scope="row">Bank Transfer</td>
                                <td class="text-danger" scope="row">
                                    <span class="me-2">₹</span><?= $payment['amount'] ?>
                                </td>

                                <td scope="row">
                                    <span class="badge <?= $class ?>"><?= $payment['status'] ? 'Approved' : 'Pending' ?></span>
                                </td>
                            </tr>
                            <?php }
                         } ?>


                            <!--agreement-->

                            <!--holding-->

                            <!--insurance-->


                            <!--noc-->

                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>

                        <!--<li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>-->

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="col-lg-7 col-12">
            <div class="custom-block custom-block-balance">
                <small>Loan Amount</small>

                <h2 class="mt-2 mb-3">₹ 500,000.00</h2>

                <div class="custom-block-numbers d-flex align-items-center">
                    <small style="margin-right: 10px;color: #000;">EMI</small>
                    <small style="color: #000;">₹ 11,740.22</small>
                </div>


                <div class="d-flex">
                    <div>
                        <small>Bank Account</small>
                        <p>23625312521</p>
                    </div>

                    <div class="ms-auto">
                        <small>Bank Holder</small>
                        <p>Amit jain</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-12">
            <div class="custom-block custom-block-transations">
                <h5 class="mb-4">Recent Transations</h5>
                <div class="border-top pt-4 mt-4 text-center">
                    <p class="text-danger">Not found any transaction</p>
                </div>
            </div>
        </div>
    </div>