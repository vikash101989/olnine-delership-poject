<?php
defined('BASEPATH') or exit('No direct script access allowed');

$payment = $payments[0] ? $payments[0] : []; // Adjusted to match the variable passed from the controller

if($payment) { 
    $payment['amount'] = isset($payment['amount']) ? number_format($payment['amount'], 2) : '0.00';
} else {
    $payment = ['amount' => '1999.00', 'gst' => '0.00', 'total' => '1999.00', 'type' => 'Approval', 'orderid' => $application['uniqueid']];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Adhar Credit Invoice</title>
  <style>
    @font-face {
      font-family: "MyCustomFont";
      src: url("<?php echo base_url('assets/template/NimbusRoman_2.ttf'); ?>") format("truetype");
    }
    body {
      font-family: DejaVu Sans, sans-serif;
      font-size: 13px;
      margin: 20px;
      color: #222;
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
    .border { border: 1px solid #ccc; }
    .bold { font-weight: bold; }
    .center { text-align: center; }
    .right { text-align: right; }
    .left { text-align: left; }
    .small { font-size: 11px; }
    .large { font-size: 18px; }
    .mt-2 { margin-top: 8px; }
    .mb-1 { margin-bottom: 4px; }
    .px-3 { padding-left: 12px; padding-right: 12px; }
    .py-2 { padding-top: 8px; padding-bottom: 8px; }
    .bg-gray { background: #f3f3f3; }
    .w-100 { width: 100%; }
    .logo { width: 180px; height: auto; }
    .logo-small { width: 100px; height: auto; margin-top: 6px; }
    .invoice-bar { background: #f3f3f3; padding: 8px 4px; font-size: 15px; margin-top: 8px; }
    .table-fixed { table-layout: fixed; }
    @media print {
      body::before {
        content: "";
        position: fixed;
        top: 50%;
        left: 50%;
        width: 500px;
        height:500px;
        background: url('<?php echo base_url('fronted'); ?>/website/Images/logo.webp') no-repeat center;
        background-size: contain;
        opacity: 0.2;
        transform: translate(-50%, -50%);
        pointer-events: none;
      }
    }
  </style>
</head>
<body>
    <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" class="watermark" alt="Watermark" />
  <main>
    <!-- HEADER TOP -->
    <header>
      <table style="width:100%; margin-bottom:10px;">
        <tr>
          <td style="vertical-align:bottom;">
            <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" alt="dhani" class="logo" />
          </td>
          <td style="vertical-align:top; text-align:right;">
            <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" alt="dhani" class="logo-small" /><br/>
            <div style="margin-top:18px; padding-bottom:8px; padding-right:8px;">
              <div>Aadhar Credit Pvt Ltd</div>
              <div>Phone : +91-8728030360</div>
              <div>Email : support@aadharcredit.online</div>
            </div>
          </td>
        </tr>
      </table>
      <div class="invoice-bar">
        <span class="bold large"><?php echo $payment['type']; ?> Invoice #CMF-<?php echo $payment['orderid']; ?></span><br/>
        <span>Invoice Date: <span class="bold"><?php echo date('d/m/Y'); ?></span></span><br/>
        <span>Due Date: <span class="bold"><?php echo date('d/m/Y', strtotime('+2 days')); ?></span></span>
      </div>
    </header>
    <!-- BILL TO -->
    <section style="margin-top:8px;">
      <div class="bold">Invoiced To</div>
      <div><?php echo $application['name']; ?></div>
      <div><?php echo $application['address']; ?></div>
    </section>
    <!-- ITEMS TABLE -->
    <section style="margin-top:8px;">
      <table class="w-100 table-fixed border" style="border-collapse:collapse;">
        <tr class="bg-gray">
          <th class="border center bold px-3 py-2" style="width:72%;">Description</th>
          <th class="border center bold px-3 py-2" style="width:28%;">Total</th>
        </tr>
        <tr>
          <td class="border px-3 py-2 left">Aadhar Loan <?php echo $payment['type']; ?> File Charge</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payment['amount']; ?></td>
        </tr>
        <tr class="bg-gray">
          <td class="border px-3 py-2 right">Sub Total</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payment['amount'] ; ?></td>
        </tr>
        <!-- <tr>
          <td class="border px-3 py-2 right">18.00% Goods and Services Tax (GST)</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payments['gst']; ?></td>
        </tr> -->
        <!-- <tr class="bg-gray">
          <td class="border px-3 py-2 right">Credit</td>
          <td class="border px-3 py-2 right">Rs. 0.00</td>
        </tr> -->
        <tr>
          <td class="border px-3 py-2 right">Total</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payment['amount'] ; ?></td>
        </tr>
      </table>
    </section>
    <!-- TRANSACTIONS -->
    <section style="margin-top:8px;">
      <div class="bold mb-1">Transactions</div>
      <table class="w-100 table-fixed border" style="border-collapse:collapse;">
        <tr class="bg-gray">
          <th class="border center bold px-3 py-2" style="width:28%;">Transaction Date</th>
          <th class="border center bold px-3 py-2" style="width:26%;">Gateway</th>
          <th class="border center bold px-3 py-2" style="width:28%;">Transaction ID</th>
          <th class="border center bold px-3 py-2" style="width:18%;">Amount</th>
        </tr>
        <tr>
          <td class="border px-3 py-2">&nbsp;</td>
          <td class="border px-3 py-2">&nbsp;</td>
          <td class="border px-3 py-2">&nbsp;</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payment['amount']; ?></td>
        </tr>
        <tr class="bg-gray">
          <td class="border px-3 py-2">&nbsp;</td>
          <td class="border px-3 py-2">&nbsp;</td>
          <td class="border px-3 py-2 right">Balance</td>
          <td class="border px-3 py-2 right">Rs. <?php echo $payment['amount']; ?></td>
        </tr>
      </table>
    </section>
    <!-- FOOTER NOTE -->
    <footer class="center" style="margin-top:12px;">
      Invoice Generated on <?php echo date('d/m/Y H:i A'); ?> <br/>
    </footer>
  </main>
</body>
</html>