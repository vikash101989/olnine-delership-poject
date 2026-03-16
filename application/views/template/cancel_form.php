<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cancel Form</title>
  <link href="./output.css" rel="stylesheet">
  <style>
        /* Watermark styles for printing */
         @font-face {
          font-family: "MyCustomFont";
          src: url("../assets/DejaVuSans_2.ttf") format("truetype");
        }
        body {
            font-family: "MyCustomFont","Times New Roman", Times, serif;
        }
        @media print {
          body::before {
            content: "";
            position: fixed;
            top: 50%;
            left: 50%;
            width: 500px;   /* adjust size */
            height: 500px;
            background: url('../assets/watermark.png') no-repeat center;
            background-size: contain; /* fit the image */
            opacity: 0.2;   /* light transparency */
            transform: translate(-50%, -50%);
            pointer-events: none; /* don’t block text */
          }
        }
    </style>
</head>
<body>
    <div class="m-1 border-2 border-black h-fit px-4 py-1 font-normal text-xs leading-tight">
        <!-- header -->
        <p class="text-center text-[16px] font-black">APPLICATION FOR CANCELLATION OF LOAN</p>
        
        <div class="flex justify-between items-center">
            <div class="font-bold">
                <p>To:</p>
                <p>The Manager.</p>
                <p>Aadhar Credit Pvt Ltd.</p>
                <p>Retail Loan Service Center.</p>
                <p>_______________________Center.</p>
            </div>
            <div class="">
                <p class="text-[18px] font-bold">No.</p>
                <p class="font-bold">Date : 23/08/2025</p>
            </div>
        </div>

        <div>
            <p class="text-center font-bold">Sub : Cancellation of loan availed from our Bank - Loan Agreement No. ________________</p>
            <p class="text-center font-bold">In the name of <span class="underline underline-offset-2">Shivam</span></p>
        </div>

        <!-- type of loan -->
        <div>
            <h1 class="underline font-bold text-[14px]">Type of Loan</h1>
            <div class="grid grid-cols-3 ml-12 text-[16px] font-normal">
                <div>☐  New Car Loan</div>
                <div>☐  Used Car Loan</div>
                <div>☐  Personal Loan</div>
                <div>☐  Two Wheeler Loan</div>
                <div>☐  Commercial Vehicle Loan</div>
                <div>☐  Other, please verify____________</div>
            </div>
        </div>

        <div>
            <p class="font-bold">Dear Sir,</p>
            <p class="font-bold">I/We wish to cancel the above loan availed from your bank. Following is the reason for cancellation of the loan</p>
            <div class="grid grid-cols-3 gap-4 ml-12 text-[16px] font-normal">
                <div>☐  Delay in disbursement</div>
                <div>☐  Model not available.</div>
                <div>☐  MLooking to change the Make/Mode</div>
            </div>
            <p class="font-bold">Any other reason, Please specify__________________________________________________________________________________________</p>
        </div>

        <div class="grid grid-cols-3 gap-4 items-center font-normal py-1">
            <div class="font-bold">Disbursement cheque encashed</div>
            <p class="text-[18px]">☐  <span class="text-[14px]">Yes</span></p>
            <p class="text-[18px]">☐ <span class="text-[14px]">No</span></p>
        </div>

        <div>
            <p class="font-bold">I am returning herewith the Manager's Cheque / Demand Draft issued by you in respect of above loan with following details</p>
            <p class="font-bold">(If Disbursement Cheque is not encashed)</p>
            <table class="w-full border-collapse border border-black">
                <tr>
                    <td class="border px-2 border-black  w-1/4">MC / DD No</td>
                    <td class="border px-2 border-black  w-1/4"></td>
                    <td class="border px-2 border-black  w-1/4">Amount (Rs)</td>
                    <td class="border px-2 border-black  w-1/4"></td>
                </tr>
                <tr>
                    <td class="border px-2 border-black  w-1/4">Date</td>
                    <td class="border px-2 border-black  w-1/4"></td>
                    <td class="border px-2 border-black  w-1/4">Payable to</td>
                    <td class="border px-2 border-black  w-1/4"></td>
                </tr>
            </table>
        </div>

        <div class="font-bold">
            <p>Current Address :  _______________________________________________________________________________________________________________________</p>
            <p class="ml-36">_______________________________________________________________________________________________________________________________</p>
        </div>

        <div class="flex justify-start gap-6 ml-32 font-bold">
            <p>Telephone No: _________________________</p>
            <p>Cell Phone: _________________________</p>
            <p>Email: _________________________</p>
        </div>

        <div>
            <p>I hereby confirm and accept as follows:</p>
            <p>➢ The Loan was granted by the Bank on basis of my application and on Terms/ Conditions accepted by me.</p>
            <p>➢ Acceptance of request for cancellation of loan is at sole discretion of the Bank</p>
            <p>➢ Processing fees or any other charges levied at the time of sanction/ disbursement will not be refunded</p>
            <p>➢ In case of vehicle loans, cancellation is subject to refund of Loan amount from the Dealer/ Direct Selling Associate throughcwhom the deal was negotiated</p>
            <p>➢ Cancellation charge of Rs. 1000/- will be levied by the Bank</p>
            <p>➢ Interest from date of disbursement to date of cancellation will be charged at the contracted rate on the loan amount.</p>
            <p class="font-bold">Name and Signature of Customer / Bearer: _______________________________________________________</p>
        </div>

        <div>
            <h1 class="text-center underline text-[16px] font-bold">For Branch Use only</h1>
            <div class="grid grid-cols-3 gap-4 items-center">
                <p class="font-bold">MC / Instruction received from:</p>
                <p class="text-[18px]">☐  <span class="text-[14px]">Dealer</span></p>
                <p class="text-[18px]">☐ <span class="text-[14px]">Customer</span></p>
            </div>
        </div>

        <table class="w-full border-collapse border border-black">
            <tr>
                <td class="border px-2 border-black  w-1/4">Date of cancellation request</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Date of receipt of MC/Instruction</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
            <tr>
                <td class="border px-2 border-black  w-1/4">MC/DD No (If applicable)</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Amount (Rs)</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
            <tr>
                <td class="border px-2 border-black  w-1/4">GR Account No</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Date of credit in GR</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
            <tr>
                <td class="border px-2 border-black  w-1/4">SFR No.</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Date of SFR authorisation</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
        </table>

        <div>
            <p class="text-[16px] p-0 m-0">❑    <span class="text-xs">Address mentioned above, matches with address mentioned in system</span></p>
            <p class="text-[16px] p-0 m-0">❑    <span class="text-xs">Informed the customer on Cancellation charge of Rs. 1000/- and Interest for the period from date of disbursement to date of recovery at the contracted rate on the loan amount.</span></p>
        </div>

        <div>
            <div class="grid grid-cols-2 gap-4 text-[16px] font-normal">
                <p class="text-xs font-bold">Checked by:</p>
                <p class="text-xs font-bold">Signature of Official:</p>
            </div>
            <p class="text-xs font-bold">Employee Code: __________________________________________________________________________________________________________</p>
        </div>

        <h1 class="text-center underline text-[16px] font-bold">For CPU Use only</h1>
        <table class="w-full border-collapse border border-black">
            <tr>
                <td class="border px-2 border-black  w-1/4">MC / DD No</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Refund issued on</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
            <tr>
                <td class="border px-2 border-black  w-1/4">Date of MC</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Customer intimated on</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
        </table>
        <div>
            <div class="grid grid-cols-2 gap-4 text-[16px] font-normal p-0 m-0">
                <p class="text-xs font-bold">Checked by:</p>
                <p class="text-xs font-bold">Signature of Official:</p>
            </div>
            <p class="text-xs font-bold p-0 m-0">Employee Code: __________________________________________________________________________________________________________</p>
        </div>



        <!-- ACKNOWLEDGEMENT -->
        <h1 class="text-center underline text-[16px] font-bold p-0 m-0">ACKNOWLEDGEMENT</h1>
        <div class="flex justify-start gap-4">
            <p class="font-bold">We acknowledge the receipt of your cancellation request and confirm receipt of the below MC/DD issued (if applicable)</p>
            <p class="font-bold">DATE : 23/08/2025</p>
        </div>
        <table class="w-full border-collapse border border-black">
            <tr>
                <td class="border px-2 border-black  w-1/4">MC / DD No</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Refund issued on</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
            <tr>
                <td class="border px-2 border-black  w-1/4">Date of MC</td>
                <td class="border px-2 border-black  w-1/4"></td>
                <td class="border px-2 border-black  w-1/4">Customer intimated on</td>
                <td class="border px-2 border-black  w-1/4"></td>
            </tr>
        </table>

        <h1 class="font-bold text-[14px] ">Note:</h1>
        <p class="pb-1">Please allow upto 15 days to cancel the loan in our books. In case next installment falls due prior to said date, the EMI already lodged with us will be presented for payment.</p>
        <p class="pb-0.5">✹ In case of vehicle loans cancellation is subject to receipt of Loan Amount from Dealer.</p>
        <p class="pb-0.5">✹ A charge of Rs. 1000/- will be levied for cancellation.</p>
        <p class="pb-0.5">✹ Interest from the date of disbursement to date of cancellation will be charged at the contracted rate on the loan amount.</p>
        <p class="pb-0.5">✹ If any of your EMI is realized, same will be refunded after adjusting above dues and proceeds if any, will be despatched to your mailing address within 15 days along with detailed working of cancellation.</p>
        <p class="pb-0.5">✹ All refunds etc. will only be made in name of the first/ sole Applicant only.</p>
        <p class="pb-0.5">✹ Pleasecontactourcustomer servicecellat numbers providedbeloworwritetousatloansupport@dhanifinance.com incaseanyfurtherassistanceis required.</p>

        <div class="grid grid-cols-3 gap-4 my-2">
            <p class="text-xs font-bold">Signature and Stamp of Receiving Office</p>
            <p class="text-xs font-bold">Date of Receipt</p>
            <p class="text-xs font-bold">Name & Employee No</p>
        </div>

        <p class="text-xs font-bold my-1">Your loan application has been submitted for cancellation. Your payment will be fully refundable to your bank account within the next 7 working days.</p>
        <div class="text-xs font-bold my-1">
            <p>Finance Manager</p>
            <p>Sangeet Nair</p>
        </div>
    </div>
</body>
</html>
