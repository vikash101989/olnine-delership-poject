<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dhani Proforma Invoice</title>
  <link href="./output.css" rel="stylesheet">
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
<body class="flex justify-center p-6 text-base">
  <main class="">
    <!-- HEADER TOP -->
    <header>
      <div class="flex items-end justify-between">
        <!-- Big left logo -->
        <img
          src="../assets/dhani.png"
          alt="dhani"
          class="w-64 h-fit object-contain"
        />

        <!-- Right logo + company details -->
        <div class="text-right leading-[1.25]">
          <div class="flex items-start justify-end gap-2">
            <img
              src="../assets/dhani.png"
              alt="dhani"
              class="w-36 h-fit object-contain mt-1"
            />
          </div>
          <div class="mt-6 pb-4 pr-2 text-gray-800">
            <div>Aadhar Credit Pvt Ltd</div>
            <div>Phone : +91-8728030360</div>
            <div>Email : support@dhanifinanceonline.net</div>
          </div>
        </div>
      </div>

      <!-- Grey invoice bar -->
      <div class="mt-2 bg-gray-100 text-gray-900 px-1 py-2 text-sm">
        <p class="font-semibold text-lg">Proforma Invoice #CMF-230824449</p>
        <p>Invoice Date:<span>23-08-2025</span></p>
        <p>Due Date:<span>30-08-2025</span></p>
      </div>


    <!-- BILL TO -->
    <section class="mt-1">
      <div class="font-semibold">Invoiced To</div>
      <div>Shivam</div>
      <div>129/6a nand puri kanker kheta 250001 INDIA</div>
    </section>

    <!-- ITEMS TABLE -->
    <section class="mt-1">
      <table class="w-full table-fixed border border-gray-300">
        <colgroup>
          <col class="w-[72%]"/>
          <col class="w-[28%]"/>
        </colgroup>
        <thead>
          <tr class="bg-gray-100">
            <th class="border border-gray-300 text-center font-semibold px-3 py-2">Description</th>
            <th class="border border-gray-300 text-center font-semibold px-3 py-2">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-300 px-3 py-2">Mudara Loan File Charge</td>
            <td class="border border-gray-300 px-3 py-2 text-right">Rs. 1,639</td>
          </tr>

          <tr>
            <td class="border border-gray-300 px-3 py-2 text-right bg-gray-100">Sub Total</td>
            <td class="border border-gray-300 px-3 py-2 text-right bg-gray-100">Rs. 1,639</td>
          </tr>

          <tr>
            <!-- Centered text like the screenshot -->
            <td class="border border-gray-300 px-3 py-2 text-right">
              18.00% Goods and Services Tax (GST)
            </td>
            <td class="border border-gray-300 px-3 py-2 text-right">Rs. 360</td>
          </tr>

          <tr>
            <td class="border border-gray-300 px-3 py-2 text-right bg-gray-100">Credit</td>
            <td class="border border-gray-300 px-3 py-2 text-right bg-gray-100">Rs. 0.00</td>
          </tr>

          <tr>
            <td class="border border-gray-300 px-3 py-2 text-right">Total</td>
            <td class="border border-gray-300 px-3 py-2 text-right">Rs. 1,999</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- TRANSACTIONS -->
    <section class="mt-1">
      <div class="font-semibold mb-1">Transactions</div>

      <table class="w-full table-fixed border border-gray-300">
        <colgroup>
          <col class="w-[28%]"/>
          <col class="w-[26%]"/>
          <col class="w-[28%]"/>
          <col class="w-[18%]"/>
        </colgroup>
        <thead>
          <tr class="bg-gray-100">
            <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Transaction Date</th>
            <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Gateway</th>
            <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Transaction ID</th>
            <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-300 px-3 py-2">&nbsp;</td>
            <td class="border border-gray-300 px-3 py-2">&nbsp;</td>
            <td class="border border-gray-300 px-3 py-2">&nbsp;</td>
            <td class="border border-gray-300 px-3 py-2 text-right">Rs. 1,999</td>
          </tr>
          <tr class="bg-gray-100">
            <td class="border border-gray-300 px-3 py-2">&nbsp;</td>
            <td class="border border-gray-300 px-3 py-2">&nbsp;</td>
            <td class="border border-gray-300 px-3 py-2 text-right">Balance</td>
            <td class="border border-gray-300 px-3 py-2 text-right">Rs. 1,999</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- FOOTER NOTE -->
    <footer class="text-center text-gray-900">
      Invoice Generated on 23-08-2025
    </footer>
  </main>
</body>
</html>
