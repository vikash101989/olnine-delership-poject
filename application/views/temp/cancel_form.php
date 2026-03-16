<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cancel Form</title>
  <style>
    @font-face {
      font-family: "MyCustomFont";
      src: url('<?php echo base_url('assets/template/DejaVuSans_2.ttf'); ?>') format("truetype");
    }
    *{
        padding: 0;
        margin: 0;
    }
    body {
      font-family: "MyCustomFont","Times New Roman", Times, serif;
      font-size: 12px;
      margin: 10px;
      position: relative;
      z-index: 1;
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
    .border {
      border: 1px solid #000;
    }
    .bold {
      font-weight: bold;
    }
    .center {
      text-align: center;
    }
    .underline {
      text-decoration: underline;
    }
    .mt-10 {
      margin-top: 0px;
    }
    .mb-10 {
      margin-bottom: 0px;
    }
    .px-2 {
      padding-left: 2px;
      padding-right: 2px;
    }
    .py-1 {
      padding-top: 0px;
      padding-bottom: 0px;
    }
    .w-25 {
      width: 25%;
    }
    .w-100 {
      width: 100%;
    }
    .small {
      font-size: 10px;
    }
    .large {
      font-size: 12px;
    }
    .xlarge {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" class="watermark" alt="Watermark" />
  <div style="border:2px solid #000; padding:5px;">
    <!-- header -->
    <p class="center large bold">APPLICATION FOR CANCELLATION OF LOAN</p>
    <table style="width:100%; margin-bottom:2px;">
      <tr>
        <td class="bold" style="vertical-align:top;">
          <p>To:</p>
          <p>The Manager.</p>
          <p>Aadhar Credit Pvt Ltd.</p>
          <p>Retail Loan Service Center.</p>
          <p>_______________________Center.</p>
        </td>
        <td style="text-align:right; vertical-align:top;">
          <p class="xlarge bold">No.</p>
          <p class="bold">Date : <?php echo date('d/m/Y'); ?></p>
        </td>
      </tr>
    </table>
    <div>
      <p class="center bold">Sub : Cancellation of loan availed from our Bank - Loan Agreement No. ________________</p>
      <p class="center bold">In the name of <span class="underline">Shivam</span></p>
    </div>
    <!-- type of loan -->
    <div>
      <p class="underline bold large">Type of Loan</p>
      <table style="margin-left:40px; width:80%;">
        <tr>
          <td>☐ New Car Loan</td>
          <td>☐ Used Car Loan</td>
          <td>☐ Personal Loan</td>
        </tr>
        <tr>
          <td>☐ Two Wheeler Loan</td>
          <td>☐ Commercial Vehicle Loan</td>
          <td>☐ Other, please verify____________</td>
        </tr>
      </table>
    </div>
    <div>
      <p class="bold">Dear Sir,</p>
      <p class="bold">I/We wish to cancel the above loan availed from your bank. Following is the reason for cancellation of the loan</p>
      <table style="margin-left:40px; width:80%;">
        <tr>
          <td>☐ Delay in disbursement</td>
          <td>☐ Model not available.</td>
          <td>☐ Looking to change the Make/Mode</td>
        </tr>
      </table>
      <p class="bold">Any other reason, Please specify__________________________________________________________________________________________</p>
    </div>
    <table style="width:100%; margin-top:2px; margin-bottom:2px;">
      <tr>
        <td class="bold" style="width:40%;">Disbursement cheque encashed</td>
        <td style="width:30%;"><span style="font-size:14px;">☐</span> <span style="font-size:14px;">Yes</span></td>
        <td style="width:30%;"><span style="font-size:14px;">☐</span> <span style="font-size:14px;">No</span></td>
      </tr>
    </table>
    <div>
      <p class="bold">I am returning herewith the Manager's Cheque / Demand Draft issued by you in respect of above loan with following details</p>
      <p class="bold">(If Disbursement Cheque is not encashed)</p>
      <table class="w-100 border" style="border-collapse:collapse;">
        <tr>
          <td class="border px-2 w-25">MC / DD No</td>
          <td class="border px-2 w-25"></td>
          <td class="border px-2 w-25">Amount (Rs)</td>
          <td class="border px-2 w-25"></td>
        </tr>
        <tr>
          <td class="border px-2 w-25">Date</td>
          <td class="border px-2 w-25"></td>
          <td class="border px-2 w-25">Payable to</td>
          <td class="border px-2 w-25"></td>
        </tr>
      </table>
    </div>
    <div class="bold" style="margin-top:2px;">
      <p>Current Address :  _______________________________________________________________________________________________________________________</p>
      <p style="margin-left:120px;">_______________________________________________________________________________________________________________________________</p>
    </div>
    <table style="margin-left:120px; margin-top:2px; margin-bottom:2px;">
      <tr>
        <td class="bold">Telephone No: _________________________</td>
        <td class="bold">Cell Phone: _________________________</td>
        <td class="bold">Email: _________________________</td>
      </tr>
    </table>
    <div>
      <p>I hereby confirm and accept as follows:</p>
      <p>➢ The Loan was granted by the Bank on basis of my application and on Terms/ Conditions accepted by me.</p>
      <p>➢ Acceptance of request for cancellation of loan is at sole discretion of the Bank</p>
      <p>➢ Processing fees or any other charges levied at the time of sanction/ disbursement will not be refunded</p>
      <p>➢ In case of vehicle loans, cancellation is subject to refund of Loan amount from the Dealer/ Direct Selling Associate through whom the deal was negotiated</p>
      <p>➢ Cancellation charge of Rs. 1000/- will be levied by the Bank</p>
      <p>➢ Interest from date of disbursement to date of cancellation will be charged at the contracted rate on the loan amount.</p>
      <p class="bold">Name and Signature of Customer / Bearer: _______________________________________________________</p>
    </div>
    <div>
      <p class="center underline large bold">For Branch Use only</p>
      <table style="width:100%; margin-bottom:2px;">
        <tr>
          <td class="bold" style="width:40%;">MC / Instruction received from:</td>
          <td style="width:30%;"><span style="font-size:14px;">☐</span> <span style="font-size:14px;">Dealer</span></td>
          <td style="width:30%;"><span style="font-size:14px;">☐</span> <span style="font-size:14px;">Customer</span></td>
        </tr>
      </table>
    </div>
    <table class="w-100 border" style="border-collapse:collapse;">
      <tr>
        <td class="border px-2 w-25">Date of cancellation request</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Date of receipt of MC/Instruction</td>
        <td class="border px-2 w-25"></td>
      </tr>
      <tr>
        <td class="border px-2 w-25">MC/DD No (If applicable)</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Amount (Rs)</td>
        <td class="border px-2 w-25"></td>
      </tr>
      <tr>
        <td class="border px-2 w-25">GR Account No</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Date of credit in GR</td>
        <td class="border px-2 w-25"></td>
      </tr>
      <tr>
        <td class="border px-2 w-25">SFR No.</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Date of SFR authorisation</td>
        <td class="border px-2 w-25"></td>
      </tr>
    </table>
    <div style="">
      <p style="font-size:10px;">❑ <span class="small">Address mentioned above, matches with address mentioned in system</span></p>
      <p style="font-size:10px;">❑ <span class="small">Informed the customer on Cancellation charge of Rs. 1000/- and Interest for the period from date of disbursement to date of recovery at the contracted rate on the loan amount.</span></p>
    </div>
    <div style="margin-top:2px;">
      <table style="width:100%;">
        <tr>
          <td class="small bold">Checked by:</td>
          <td class="small bold">Signature of Official:</td>
        </tr>
      </table>
      <p class="small bold">Employee Code: __________________________________________________________________________________________________________</p>
    </div>
    <p class="center underline large bold">For CPU Use only</p>
    <table class="w-100 border" style="border-collapse:collapse;">
      <tr>
        <td class="border px-2 w-25">MC / DD No</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Refund issued on</td>
        <td class="border px-2 w-25"></td>
      </tr>
      <tr>
        <td class="border px-2 w-25">Date of MC</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Customer intimated on</td>
        <td class="border px-2 w-25"></td>
      </tr>
    </table>
    <div style="margin-top:2px;">
      <table style="width:100%;">
        <tr>
          <td class="small bold">Checked by:</td>
          <td class="small bold">Signature of Official:</td>
        </tr>
      </table>
      <p class="small bold">Employee Code: __________________________________________________________________________________________________________</p>
    </div>
    <!-- ACKNOWLEDGEMENT -->
    <p class="center underline large bold">ACKNOWLEDGEMENT</p>
    <table style="width:100%; margin-bottom:2px;">
      <tr>
        <td class="bold">We acknowledge the receipt of your cancellation request and confirm receipt of the below MC/DD issued (if applicable)</td>
        <td class="bold">DATE : 23/08/2025</td>
      </tr>
    </table>
    <table class="w-100 border" style="border-collapse:collapse;">
      <tr>
        <td class="border px-2 w-25">MC / DD No</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Refund issued on</td>
        <td class="border px-2 w-25"></td>
      </tr>
      <tr>
        <td class="border px-2 w-25">Date of MC</td>
        <td class="border px-2 w-25"></td>
        <td class="border px-2 w-25">Customer intimated on</td>
        <td class="border px-2 w-25"></td>
      </tr>
    </table>
    <p class="bold large">Note:</p>
    <p style="">Please allow upto 15 days to cancel the loan in our books. In case next installment falls due prior to said date, the EMI already lodged with us will be presented for payment.</p>
    <p style="">✹ In case of vehicle loans cancellation is subject to receipt of Loan Amount from Dealer.</p>
    <p style="">✹ A charge of Rs. 1000/- will be levied for cancellation.</p>
    <p style="">✹ Interest from the date of disbursement to date of cancellation will be charged at the contracted rate on the loan amount.</p>
    <p style="">✹ If any of your EMI is realized, same will be refunded after adjusting above dues and proceeds if any, will be despatched to your mailing address within 15 days along with detailed working of cancellation.</p>
    <p style="">✹ All refunds etc. will only be made in name of the first/ sole Applicant only.</p>
    <p style="">✹ Please contact our customer service cell at numbers provided below or write to us at loansupport@adharcreadit.com in case any further assistance is required.</p>
    <table style="width:100%; margin-top:2px;">
      <tr>
        <td class="small bold">Signature and Stamp of Receiving Office</td>
        <td class="small bold">Date of Receipt</td>
        <td class="small bold">Name & Employee No</td>
      </tr>
    </table>
    <p class="small bold" style="margin-top:2px;">Your loan application has been submitted for cancellation. Your payment will be fully refundable to your bank account within the next 7 working days.</p>
    <div class="small bold" style="margin-top:2px;">
      <p>Finance Manager</p>
      <p>Sangeet Nair</p>
    </div>
  </div>
</body>
</html>
