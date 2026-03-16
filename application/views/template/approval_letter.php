<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Approval Letter</title>
  <style>
    *{
        padding:0;
        margin:0;
    }
    body {
      font-family: "Nimbus Roman", "Times New Roman", Times, serif;
      font-size: 16px;
      margin: 0;
      line-height: 1.5;
    }
    table {
      border-collapse: separate;
      border-spacing: 2px;
      width: 100%;
      background: #fff;
    }
    td, th {
      border: 1px solid black;
      padding: 4px;
      font-size: 15px;
    }
    .pie {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: conic-gradient(
        yellow 0deg 10deg,
        blue 10deg 180deg,
        red 180deg 360deg
      );
      margin: 0 auto;
    }
    .section-title {
      text-decoration: underline;
      text-underline-offset: 4px;
      font-weight: bold;
      font-size: 1.5rem;
      margin-top: 3rem;
      margin-bottom: 0.5rem;
      text-align: left;
    }
    .info-label, .info-value {
      font-weight: 600;
      font-size: 15px;
      padding-left: 1rem;
      padding-right: 1rem;
    }
    .table-header {
      background-color: #1e3a8a;
      color: #fff;
      font-size: 1.125rem;
      font-weight: 600;
      text-align: left;
      padding: 0.125rem;
    }
    .blue-bg-title {
      background-color: #1e3a8a;
      color: #fff;
      font-weight: 600;
      padding-left: 0.125rem;
      padding-right: 0.125rem;
      font-size: 1.25rem;
    }
    .w-28-h-fit {
      width: 7rem;
      height: auto;
      object-fit: contain;
    }
    .mt-section { margin-top: 1.5rem; }
    .mb-section { margin-bottom: 0.5rem; }
    .font-bold { font-weight: bold; }
    .text-lg { font-size: 1.125rem; }
    .text-xl { font-size: 1.25rem; }
    .text-2xl { font-size: 1.5rem; }
    .text-4xl { font-size: 2.25rem; }
    .text-sm { font-size: 0.875rem; }
    .my-2 { margin-top: 0.5rem; margin-bottom: 0.5rem; }
    .my-1 { margin-top: 0.25rem; margin-bottom: 0.25rem; }
    .my-4 { margin-top: 1rem; margin-bottom: 1rem; }
    .my-6 { margin-top: 1.5rem; margin-bottom: 1.5rem; }
    .mt-4 { margin-top: 1rem; }
    .mt-6 { margin-top: 1.5rem; }
    .mt-8 { margin-top: 2rem; }
    .mt-12 { margin-top: 3rem; }
    .mb-2 { margin-bottom: 0.5rem; }
    .mb-4 { margin-bottom: 1rem; }
    .mt-32 {margin-top: 6rem;}
    .pl-2 { padding-left: 0.5rem; }
    .pr-4 { padding-right: 1rem; }
    .px-4 { padding-left: 1rem; padding-right: 1rem; }
    .px-8 { padding-left: 2rem; padding-right: 2rem; }
    .gap-1 > * + * { margin-top: 0.25rem; }
    .gap-2 > * + * { margin-top: 0.5rem; }
    .gap-4 > * + * { margin-top: 1rem; }
    .flex { display: flex; }
    .flex-col { flex-direction: column; }
    .justify-between { justify-content: space-between; }
    .justify-start { justify-content: flex-start; }
    .justify-center { justify-content: center; }
    .items-center { align-items: center; }
    .items-end { align-items: flex-end; }
    .overflow-x-auto { overflow-x: auto; }
    .text-center { text-align: center; }
    .text-left { text-align: left; }
    .list-decimal { list-style-type: decimal; }
    .list-none { list-style-type: none; }
    .page-break { page-break-before: always; }
    @media print {
      .page-break {
        page-break-before: always;
      }
      body::before {
        content: "";
        position: fixed;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 500px;
        background: url('../assets/watermark.png') no-repeat center;
        background-size: contain;
        opacity: 0.2;
        transform: translate(-50%, -50%);
        pointer-events: none;
      }
    }
  </style>
</head>
<body>
  <div class="px-4">
    <h1 class="section-title">Loan Approval Letter</h1>
    <div class="pl-2 pr-4 flex flex-col gap-2 mt-12 mb-2">
      <p class="text-lg font-bold mb-4">Aadhar Credit Pvt Ltd</p>
      <p class="my-2 text-sm font-bold">RBI : Active Approved Status</p>
      <p class="my-2 text-sm font-bold">GST NO : 07AAACM0725H1ZU</p>
      <p class="my-2 text-sm font-bold">CIN NO : U74899DL1994PLC062407</p>
      <div class="flex justify-between items-end mt-8 mb-4">
        <div style="width:50%;">
          <p class="mb-4">
            Complex in, G Block BKC, Bandra Kurla
            Complex, Bandra East, Mumbai, Maharashtra
            400051
          </p>
          <p class="my-1">Phone No : +91 +91-8728030360</p>
          <p class="my-1">Email : support@dhanifinanceonline.net</p>
          <p class="my-1">Website : https://dhanifinanceonline.net</p>
        </div>
        <div style="width:50%; text-align:right;" >
          <img src="<?php echo base_url('assets/img/dhani.png'); ?>" alt="" class="w-28-h-fit">
          <p class="my-1">Document: MCB/0</p>
          <p class="my-1">Proposal: MCB/0</p>
          <p class="my-1">Date : 23-08-2025</p>
        </div>
      </div>
      <div class="flex flex-col mt-4 mb-4">
        <p>To,</p>
        <p class="font-bold">Shivam</p>
        <p>129/6a nand puri kanker kheta</p>
        <p>250001</p>
        <p>Phone No. : 9557333145, 9557333145</p>
        <p>Email : shivamkumar.sk.1470@gmail.com</p>
      </div>
    </div>
    <div class="mt-6">
      <div>
        <p>Dear! <span class="font-bold">Shivam</span></p>
        <p>
          Aadhar Credit Pvt. Ltd. Welcomes you. We are Please to inform you that your application for Mudara
          Loan of amount Rs 50,000.00 has been accepted. The information mentioned by you has been
          investigation secretly by the Company team through online addhar/pan no based given below are the
          details as captured in the Aadhar Credit Pvt. Ltd. Recorded with us. Please go through the carefully
          and intimate to us immediately in case of any discrepancy. Your Application Details below:
        </p>
        <img src="<?php echo base_url('assets/img/approved_stamp.png'); ?>" alt="" class="w-40 my-6" style="width:10rem;height:auto;display:block;">
      </div>
      <table class="mt-6">
        <thead>
          <tr>
            <th colspan="2" class="table-header">
              APPLICATION DETAILS
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="info-label">Serial No</td>
            <td class="info-value">MCB/24449</td>
          </tr>
          <tr>
            <td class="info-label">Reference No</td>
            <td class="info-value">MCB/9C6DA9D2EA</td>
          </tr>
          <tr>
            <td class="info-label">Application No</td>
            <td class="info-value">MCB/A49EAB63C2</td>
          </tr>
          <tr>
            <td class="info-label">Applicant Name</td>
            <td class="info-value"><?php echo $application['name']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Applicant Address</td>
            <td class="info-value"><?php echo $application['address']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Applicant State</td>
            <td class="info-value"><?php echo $application['state']; ?></td>
          </tr>
          <tr>
            <td class="info-label">PAN Card No</td>
            <td class="info-value"><?php echo $application['pancard']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Aadhar No</td>
            <td class="info-value"><?php echo $application['aadhar']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Account No</td>
            <td class="info-value"><?php echo $application['bank_account']; ?></td>
          </tr>
          <tr>
            <td class="info-label">IFSC CODE</td>
            <td class="info-value"><?php echo $application['bank_ifsc']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Bank Name</td>
            <td class="info-value"><?php echo $application['bank_name']; ?></td>
          </tr>
        </tbody>
      </table>
      <table class="mt-8">
        <thead>
          <tr>
            <th colspan="2" class="table-header">
              EMI AND LOAN AMOUNT APPROVED
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="info-label">Emi</td>
            <td class="info-value"><?php echo $application['emi']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Loan Amount</td>
            <td class="info-value"><?php echo $application['loan_amount']; ?></td>
          </tr>
          <tr>
            <td class="info-label">Interest Rate</td>
            <td class="info-value"><?php echo $application['interest']; ?> %</td>
          </tr>
          <tr>
            <td class="info-label">Total Interest Amount</td>
            <td class="info-value"><?php echo $application['total_interest']; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex justify-start items-center gap-4 mt-4">
      <img src="<?php echo base_url('assets/img/qr.png'); ?>" alt="" class="w-28-h-fit">
      <img src="<?php echo base_url('assets/img/seal.png'); ?>" alt="" class="w-28-h-fit">
    </div>
    <div class="mt-6 flex flex-col gap-1 mt-4">
      <p>(Mr. Amol PB)</p>
      <p>Finance Manager</p>
    </div>
    <div class="flex flex-col gap-1 my-2">
      <img src="<?php echo base_url('assets/img/signature.png'); ?>" alt="" class="w-28-h-fit">
      <p class="font-bold">Date : <?php echo date('d-m-y'); ?></p>
    </div>
    <div>
      <h1 class="blue-bg-title text-xl">Kindly submit complete all documents.</h1>
      <ol class="list-decimal mt-6" style="padding-left:1rem;">
        <li>Self attested copy of Voter Card / Aadhar Card</li>
        <li>Self attested copy of PAN card</li>
        <li>Self attested passport size photograph (two)</li>
        <li>Two references from your locality (having good goodwill in the society)
          with full details including contact numbers</li>
        <li>Copy of bank statement /Cancel cheque /bank passbook copy</li>
        <li>Processing amount: 1,999/- which is refundable.</li>
        <li>Note-Processing fee is completely refundable be within 15 days.</li>
      </ol>
    </div>
    <div class="mt-32">
      <p class="my-4">Company Account Details:</p>
      <h1 class="blue-bg-title text-lg" style="width:50%;">Pay Processing Fee 1,999</h1>
      <ol class="list-none mt-6">
        <li>Account Holder Name: Aadhar Credit Pvt Ltd</li>
        <li>Account Number: 8102971854</li>
        <li>Account Type: Current Account</li>
        <li>IFSC CODE: IDIB000M567</li>
        <li>Bank Name: Indian bank</li>
        <li>Payment Mode: You can make payment through NEFT/RTGS/IMPS/UPI/Net Banking.</li>
        <li>Note: Cash deposit are not allowed as per company rule and regulation.</li>
      </ol>
    </div>
    <div class="page-break"></div>
    <div>
      <p class="text-4xl font-bold text-center mt-4">EMI Rs <?php echo $application['emi']; ?></p>
      <div class="flex justify-center items-center my-4">
        <div class="pie"></div>
      </div>
      <h2 class="text-2xl font-bold text-center mb-4">Loan Repayment Schedule</h2>
      <div class="overflow-x-auto text-left">
        <table class="text-sm text-center">
          <thead>
            <tr style="background:#1e3a8a;color:#fff;">
              <th class="border text-left">MONTH</th>
              <th class="border text-left">INTEREST</th>
              <th class="border text-left">BEGINNING BALANCE</th>
              <th class="border text-left">PRINCIPLE</th>
              <th class="border text-left">TOTAL PAYMENT</th>
              <th class="border text-left">ENDING BALANCE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border text-left">23-Aug-2025</td>
              <td class="border text-left">291.25</td>
              <td class="border text-left">50,000.00</td>
              <td class="border text-left">2,642.77</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">47,357.23</td>
            </tr>
            <tr>
              <td class="border text-left">23-Sep-2025</td>
              <td class="border text-left">275.86</td>
              <td class="border text-left">47,357.23</td>
              <td class="border text-left">2,658.17</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">44,699.06</td>
            </tr>
            <tr>
              <td class="border text-left">23-Oct-2025</td>
              <td class="border text-left">260.37</td>
              <td class="border text-left">44,699.06</td>
              <td class="border text-left">2,673.65</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">42,025.41</td>
            </tr>
            <tr>
              <td class="border text-left">23-Nov-2025</td>
              <td class="border text-left">244.80</td>
              <td class="border text-left">42,025.41</td>
              <td class="border text-left">2,689.22</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">39,336.19</td>
            </tr>
            <tr>
              <td class="border text-left">23-Dec-2025</td>
              <td class="border text-left">229.13</td>
              <td class="border text-left">39,336.19</td>
              <td class="border text-left">2,704.89</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">36,631.30</td>
            </tr>
            <tr>
              <td class="border text-left">23-Jan-2026</td>
              <td class="border text-left">213.38</td>
              <td class="border text-left">36,631.30</td>
              <td class="border text-left">2,720.64</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">33,910.65</td>
            </tr>
            <tr>
              <td class="border text-left">23-Feb-2026</td>
              <td class="border text-left">197.53</td>
              <td class="border text-left">33,910.65</td>
              <td class="border text-left">2,736.49</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">31,174.16</td>
            </tr>
            <tr>
              <td class="border text-left">23-Mar2026</td>
              <td class="border text-left">181.59</td>
              <td class="border text-left">31,421.73</td>
              <td class="border text-left">2,768.47</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">25,653.26</td>
            </tr>
            <tr>
              <td class="border text-left">23-Apr2026</td>
              <td class="border text-left">165.56</td>
              <td class="border text-left">28,421.73</td>
              <td class="border text-left">2,768.47</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">25,653.26</td>
            </tr>
            <tr>
              <td class="border text-left">23-May2026</td>
              <td class="border text-left">149.43</td>
              <td class="border text-left">25,653.26</td>
              <td class="border text-left">2,784.59</td>
              <td class="border text-left">2,934.02</td>
              <td class="border text-left">22,868.67</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div>
      <p class="text-center mt-4 px-8">
        Note: Kindly Pay File Charge Rs 1,999 today. This is a Computer Generated Document, it Doesn't
        Require Signature
      </p>
    </div>
  </div>
</body>
</html>