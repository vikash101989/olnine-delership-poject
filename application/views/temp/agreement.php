<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agreement Letter</title>
</head>
<body style="font-family: 'Nimbus Roman', 'Times New Roman', Times, serif;">
  <div style="margin:0.25rem; padding-left:1rem; padding-right:1rem; padding-top:0.25rem; padding-bottom:0.25rem;">
    <div style="width:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; font-size:16px; margin-top:1rem;">
      <img src="<?php echo base_url('assets'); ?>/img/template/agreement.jpg" alt="Dhani Logo"
        style="width:90%; height:fit-content; object-fit:contain;">
      <p style="margin-bottom:0.5rem; margin-top:3rem; text-decoration:underline; text-underline-offset:4px; font-weight:600; font-size:1rem; text-align:center;">LOAN AGREEMENT</p>
      <p style="margin-top:0.5rem; margin-bottom:0.5rem; font-weight:600; font-size:0.875rem;text-align:center;">THIS LOAN AGREEMENT (this "Agreement") dated this <?php echo date("j \o\\f F, Y"); ?></p>
      <p style="margin-top:0.5rem; margin-bottom:0.5rem; font-weight:600; font-size:0.875rem;text-align:center;">Note: Kindly Pay Agreement Fee Rs 12,600/- today and this amount is refundable</p>
      <h1 style="font-weight:700; font-size:1.125rem; text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;text-align:center;">BETWEEN</h1>
      <p style="text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">
        Aadhar Credit Pvt. Ltd. D 114, 1st Floor, Eastern Business District, off Lal Bahadur Shastri Marg, GaneshNagar,
        Bhandup West, Mumbai, Maharashtra 400078
      </p>
      <p style="text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">(the "Lender")</p>
      <h1 style="font-weight:700; font-size:1.125rem; text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">OF THE FIRST PART</h1>
      <h1 style="font-weight:700; font-size:1.125rem; text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">AND</h1>
      <p style="text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">
        <?php echo $application['name']; ?> has applied for a loan amount of Rs.<?php echo number_format($application['loan_amount'], 2); ?>. His contact email id is <?php echo $application['email']; ?>
      </p>
      <p style="text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">(the "Borrower")</p>
      <h1 style="font-weight:700; font-size:1.125rem; text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">OF THE SECOND PART</h1>
      <p style="text-align:center; margin-top:0.5rem; margin-bottom:0.5rem;">
        IN CONSIDERATION OF the Lender loaning certain monies (the "Loan") to the Borrower, and the
        Borrower repaying the Loan to the Lender, both parties agree to keep, perform and fulfil the promises and
        conditions set out in this Agreement:
      </p>
    </div>

    <div style="display:flex; flex-direction:column; margin-top:0.5rem; margin-bottom:0.5rem;">
      <h1 style="text-decoration:underline; text-underline-offset:4px; font-size:1.125rem; font-weight:700; margin-top:0.25rem; margin-bottom:0.25rem;">Loan Amount & Interest</h1>
      <p style="margin-bottom:0.5rem;">
        1. The Lender promises to loan Rs 50000.00 to the Borrower and the Borrower promises to repay this
        principal amount to the Lender, with interest payable on the unpaid principal at the rate of 6.99% per annum,
        calculated yearly not in advance, beginning on <?php echo date("F j, Y", strtotime("2025-08-23")); ?>.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Payment</h1>
      <p style="margin-bottom:0.5rem;">
        2. This Loan will be repaid in consecutive monthly instalments of principal and interest on the first day of
        each month commencing the month following the beginning of the loan under this Agreement and continuing
        until <?php echo date("j \o\\f F, Y"); ?> with the balance then owing under this Agreement being paid at that time.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Default</h1>
      <p style="margin-bottom:0.5rem;">
        3. Notwithstanding anything to the contrary in this Agreement, if the Borrower defaults in the performance of
        any obligation under this Agreement, then the Lender may declare the principal amount owing and interest
        due under this Agreement at that time to be immediately due and payable.
      </p>
      <p style="margin-bottom:0.5rem;">
        4. Further, if the Lender declares the principal amount owing under this Agreement to be immediately due
        and payable, and the Borrower fails to provide full payment, interest at the rate of 1.00 per cent per annum,
        calculated yearly not in advance, will be charged on the outstanding amount, commencing the day the
        principal amount is declared due and payable, until full payment is received by the Lender.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Governing Law</h1>
      <p style="margin-bottom:0.5rem;">
        5. This Agreement will be construed in accordance with and governed by the laws of the State of Maharashtra.
      </p>
      <p style="margin-bottom:0.5rem;">
        6. The Borrower shall be liable for all costs, expenses and expenditures incurred including, without
        limitation, the complete legal costs of the Lender incurred by enforcing this Agreement as a result of any
        default by the Borrower and such costs will be added to the principal then outstanding and shall be due and
        payable by the Borrower to the Lender immediately upon demand of the Lender.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Binding Effect</h1>
      <p style="margin-bottom:0.5rem;">
        7. This Agreement will pass to the benefit of and be binding upon the respective heirs, executors,
        administrators, successors and permitted assigns of the Borrower and Lender. Borrower waives presentment
        for payment, notice of non-payment, protest, and notice of protest.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Amendments</h1>
      <p style="margin-bottom:0.5rem;">
        8. This Agreement may only be amended or modified by a written instrument executed by both the Borrower
        and the Lender.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Severability</h1>
      <p style="margin-bottom:0.5rem;">
        9. The clauses and paragraphs contained in this Agreement are intended to be read and construed
        independently of each other. If any term, covenant, condition or provision of this Agreement is held by a
        court of competent jurisdiction to be invalid, void or unenforceable, it is the parties intention that such
        provision be reduced in scope by the court only to the extent deemed necessary by that court to render the
        provision reasonable and enforceable and the remainder of the provisions of this Agreement will in no way
        be affected, impaired or invalidated as a result.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">General Provisions</h1>
      <p style="margin-bottom:0.5rem;">
        10. Headings are inserted for the convenience of the parties only and are not to be considered when
        interpreting this Agreement. Words in the singular mean and include the plural and vice versa. Words in the
        masculine mean and include the feminine and vice versa.
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">Entire Agreement</h1>
      <p style="margin-bottom:0.5rem;">
        11. This Agreement constitutes the entire agreement between the parties and there are no further items or
        provisions, either oral or otherwise.
      </p>

      <p style="margin-bottom:0.5rem;">
        IN WITNESS WHEREOF, the parties have duly affixed their signatures under hand and seal on this <?php echo date("j \o\\f F, Y"); ?>
      </p>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">SIGNED, SEALED, AND DELIVERED</h1>
      <p>this <?php echo date("j \o\\f F, Y"); ?></p>
      <hr style="color:#000; background:#000; border:1px solid #000;" />
      <div style="display:flex; justify-content:flex-end;">
        <p>Shivam</p>
      </div>

      <h1 style="text-decoration:underline; text-underline-offset:4px; margin-top:0.25rem; margin-bottom:0.25rem; font-size:1.125rem; font-weight:700;">SIGNED, SEALED, AND DELIVERED</h1>
      <p>this <?php echo date("j \o\\f F, Y"); ?></p>

      <div style="display:flex; flex-direction:column; text-align:center; justify-content:flex-start;">
        <p>Aadhar Credit Pvt Ltd.</p>
        <p>Finance Manager Sangeet Nair</p>
        <img src="<?php echo base_url('assets'); ?>/img/template/approved.png" alt="Dhani Logo"
          style="margin-top:0.25rem; margin-bottom:0.25rem; width:40%; height:auto; display:block; margin-left:auto; margin-right:auto;">
        <p style="text-align:center;">
          Note: Kindly Pay Agreement Fee Rs 12,600 today and this amount is refundable. This is a Computer
          Generated Document, it Doesn't Require Signature
        </p>
      </div>
    </div>
  </div>
</body>
</html>
