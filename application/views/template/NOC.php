<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>NOC</title>
    <style>
        /* Import the .ttf font */
        @font-face {
          font-family: "MyCustomFont";
          src: url("../assets/NimbusRoman_2.ttf") format("truetype");
        }
        body {
            font-family: "MyCustomFont","Times New Roman", Times, serif;
        }
        /* Watermark styles for printing */
        @media print {
          body::before {
            content: "";
            position: fixed;
            top: 50%;
            left: 50%;
            width: 500px;   /* adjust size */
            height:500px;
            background: url('../assets/watermark.png') no-repeat center;
            background-size: contain; 
            opacity: 0.2;   
            transform: translate(-50%, -50%);
            pointer-events: none;
          }
        }
    </style>
</head>
<body class="flex items-center text-base text-black justify-center">
    <div class="w-3/4 px-10 flex flex-col items-center justify-center py-2">
        <img src="../assets/dhani.png" alt="" class="w-24 h-fit">
        <h1 class="text-xl font-bold tracking-wider">Aadhar Credit Pvt Ltd</h1>
        <p class="text-xl my-0.5 font-semibold text-gray-500 tracking-wider">NO OBJECTION CERTIFICATE</p>
        
        
        <ol class="list-disc leading-8 my-6 pl-4 flex flex-col gap-4">
            <li> NOC Fee: 17,200/- It is hereby declared that <span class="underline underline-offset-2 decoration-[0.2px]">Shivam</span>  and Aadhar Credit are the top providers of loans to you under government regulation.</li>
            <li>We received the document copy as an agreement with the owner Permission.</li>
            <li>The Department of Loan will sanction a loan for you after our internal process is finished.</li>
            <li> Government Tax of Rs. 17,200/- Service Tax Customer have to pay within 2 days after sending the NOC form and documents.</li>
            <li>Note 1: If the applicant is not eligible, the company will refund the registration and other amounts in cash or on his bank account.</li>
            <li> Note 2: After clearance of the government tax, the company will issue Agreement by Which Company Will Sanction the Loan You Requested.</li>
        </ol>

        <div class="w-full">
            <p class="text-left font-bold underline underline-offset-4 decoration-[0.2px]">129/6a nand puri kanker kheta 250001 INDIA</p>
        </div>

        <div class="w-full mb-8 mt-12">
            <p class="text-left"><span class="underline-offset-4 underline decoration-[0.2px]">Approved Borrower complete address</span><span>:-</span><span class="text-[#ff0000] font-bold">All amount RS. 50,000.00/-</span></p>
        </div>

        <div class="w-full mt-12">
            <p class="text-right font-bold">Aadhar Credit Pvt. Ltd.</p>
        </div>
    </div>
</body>
</html>