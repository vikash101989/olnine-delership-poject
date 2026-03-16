<?php

function random_string($type = 'alnum', $length = 8) {
  $pool = '';
  switch ($type) {
    case 'alnum':
      $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      break;
    case 'alpha':
      $pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      break;
    case 'numeric':
      $pool = '0123456789';
      break;
    default:
      $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  $str = '';
  $max = strlen($pool) - 1;
  for ($i = 0; $i < $length; $i++) {
    $str .= $pool[random_int(0, $max)];
  }
  return $str;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Transaction Hold</title>
  <style>
    @font-face {
      font-family: "MyCustomFont";
      src: url("<?php echo base_url('assets/template/NimbusRoman_2.ttf'); ?>") format("truetype");
      
    }
    body {
      font-family: DejaVu Sans, sans-serif;
      margin: 0;
      background-color: #fff;
      font-size: 14px;
      line-height: 1.4;
    }
    .container {
      width: 100%;
      margin: 40px auto 40px auto;
      box-sizing: border-box;
      background: #fff;
    }
    .bold { font-weight: bold; }
    .center { text-align: center; }
    .right { text-align: right; }
    .orange { color: #f2951a; }
    .btn {
      background-color: #f2951a;
      color: #fff;
      font-size: 14px;
      padding: 10px 24px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      border-radius: 3px;
      text-decoration: none;
      display: inline-block;
    }
    .btn-outline {
      border: 2px solid #f2951a;
      color: #ea580c;
      font-size: 14px;
      padding: 10px 24px;
      font-weight: bold;
      background: transparent;
      cursor: pointer;
      border-radius: 3px;
      text-decoration: none;
      display: inline-block;
    }
    .row-space { margin-bottom: 18px; }
    .table-full { width: 100%; border-collapse: collapse; }
    .table-half { width: 49%; }
    .td-pad { padding: 6px 12px; }
    .banner-table { width: 100%; border-collapse: collapse; margin-top: 8px; }
    .banner-left {
      background-color: #f2951a;
      color: #fff;
      vertical-align: top;
      width: 60%;
      padding: 32px 24px;
    }
    .banner-right {
      background-color: #f3f4f6;
      vertical-align: top;
      width: 40%;
      text-align: center;
      padding: 0;
    }
    .banner-title {
      font-size: 32px;
      font-weight: bold;
      line-height: 1.1;
      margin-bottom: 24px;
      margin-top: 0;
    }
    .banner-btn {
      border: 1px solid #fff;
      border-radius: 4px;
      padding: 2px;
      display: inline-block;
      margin-top: 12px;
    }
    .banner-btn a {
      background: #fff;
      color: #f2951a;
      font-weight: bold;
      padding: 8px 20px;
      font-size: 14px;
      border: 1px solid #fff;
      text-decoration: none;
      border-radius: 3px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- top paragraph -->
    <p class="row-space" style="font-weight:bold; margin-top:0;">
      Dear Customer, <?php echo $application['name']; ?> Your A/C No. is <?php echo $application['bank_account']; ?>. Credited INR: <?php echo $application['loan_amount']; ?> <?php echo date('d/m/Y'); ?> Transaction Successful. But not clear holdcharge (this INR is hold). Please make payment. You hold charge of 9,999/- only. This charge is refundable. Receive your amount in 15 minutes. Aadhar Credit Have a nice day.
    </p>

    <!-- Bank logo + reference / date row -->
    <table class="table-full row-space">
      <tr>
        <td style="width:50%; vertical-align:top;">
          <img src="<?php echo base_url('assets/img/banklogo.png') ?>" alt="ICICI" style="width:120px; height:auto; display:block;" />
        </td>
        <td style="width:50%; vertical-align:top; text-align:right;">
          <span>Transaction Reference Number: <span class="bold"><?=$application['transaction_ref']; ?></span></span><br>
          <span>Transaction Date : <span class="bold"><?php echo date('d/m/Y'); ?></span></span>
        </td>
      </tr>
    </table>

    <!-- From / To headings -->
    <table class="table-full row-space">
      <tr>
        <td class="bold td-pad" style="text-align:left;">From ICICI bank Account</td>
        <td class="bold td-pad" style="text-align:right;">To Payee</td>
      </tr>
    </table>

    <!-- banks -->
    <table class="table-full row-space">
      <tr>
        <td style="text-align:left;">
          <img src="<?php echo base_url('assets/img/iclogo.png') ?>" alt="bank-icon" style="margin-left:50px; width:40px; height:auto; display:inline-block;" />
        </td>
        <td style="text-align:right;">
          <img src="<?php echo base_url('assets/img/bank.png') ?>" alt="bank" style="margin-right:30px; width:40px; height:auto; display:inline-block;" />
        </td>
      </tr>
    </table>

    <!-- account holders -->
    <table class="table-full row-space">
      <tr>
        <td style="vertical-align:top;">
          <span style="font-size:16px; font-weight:bold;">Aadhar Credit Pvt. Ltd.</span><br>
          <span style="color:#4b5563;">XXXXXXX1854</span>
        </td>
        <td style="vertical-align:top; text-align:right;">
          <span style="font-size:18px; font-weight:bold;"><?php echo $application['name']; ?></span><br>
          <span style="font-size:14px; color:#4b5563;"><?php echo $application['bank_account']; ?></span>
        </td>
      </tr>
    </table>

    <!-- 3-column summary: Amount, Transaction Type, Remarks -->
    <table class="table-full row-space">
      <tr>
        <td class="td-pad" style="vertical-align:top;">
          <span class="bold">Amount Transferred</span><br>
          <span style="font-size:15px;">INR <?php echo $application['loan_amount']; ?></span>
        </td>
        <td class="td-pad" style="vertical-align:top;">
          <span class="bold">Transaction Type</span><br>
          <span style="font-size:15px;">Transfer Funds to any other bank account</span>
        </td>
        <td class="td-pad" style="vertical-align:top; text-align:right;">
          <span class="bold">Remarks</span><br>
          <span style="font-size:15px;">Loan amt</span>
        </td>
      </tr>
    </table>

    <!-- Buttons row -->
    <table class="table-full row-space">
      <tr>
        <td style="text-align:left;">
          <button class="btn">DONE</button>
        </td>
        <td style="text-align:right;">
          <button class="btn-outline">SAVE AS FAVOURITE</button>
        </td>
      </tr>
    </table>

    <!-- Large banner: left orange block + right image -->
    <table class="banner-table">
      <tr>
        <td class="banner-left">
          <h2 class="banner-title">
            Don't wait till the<br/>due date<br/>pay bill quickly!
          </h2>
          <div class="banner-btn">
            <a href="#pay">PAY NOW</a>
          </div>
        </td>
        <td class="banner-right">
          <img src="<?php echo base_url('assets/img/office.png') ?>" alt="office" style="width:100%; height:180px; object-fit:cover; display:block;" />
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
