<html>

<head>
  <title>Invoice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    #page-wrap {
      margin: 0 auto;
      box-shadow: 0px 5px 7px #ccc;
      border: 2px solid #000;
      padding: 20px;
      font-family: arial;
      max-width: 1000px;
    }

    .grey {
      background: grey;
    }

    h2 {
      text-transform: uppercase;
      font-size: 20px;
      font-weight: bold;
      color: #000;
      font-family: arial;
    }

    .background {
      background-image: url("<?php echo base_url('assets/vadmin/img/valmologo.png') ?>");
      /* The image used */
      height: 200px;
      margin-left: 20%;
      background-repeat: no-repeat;
      position: absolute;
      opacity: 0.25;
      width: 76%;
      top: 29%;
      text-align: center;
      z-index: 0;
      -webkit-print-color-adjust: exact;

    }

    h3.franchisee {
      text-align: center;
      font-size: 35px;
      color: #c62c2c;
    }

    td.logo-image {
      background: #fff;
      width: 100px;
      height: 100px;
    }

    @media (max-width: 768px) {
      #page-wrap {
        padding: 15px;
        border: 1px solid #000;
      }

      h2 {
        font-size: 16px;
      }

      td.logo-image {
        width: 80px;
        height: 80px;
      }

      table {
        font-size: 14px;
      }

      .table td, .table th {
        padding: 8px 5px;
      }

      .background {
        height: 150px;
        width: 60%;
        margin-left: 20%;
        top: 35%;
      }

      button {
        width: 100%;
        margin-bottom: 10px;
      }
    }

    @media (max-width: 480px) {
      #page-wrap {
        padding: 10px;
      }

      h2 {
        font-size: 14px;
      }

      td.logo-image {
        width: 60px;
        height: 60px;
      }

      table {
        font-size: 12px;
      }

      .table td, .table th {
        padding: 5px 3px;
      }

      .background {
        height: 100px;
        width: 50%;
        top: 40%;
      }

      .center-justified {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <?php

  $orderid = $payments[0]['orderid'] ? $payments[0]['orderid'] : '';
  $upload_date = $payments[0]['created_at'] ? $payments[0]['created_at'] : '';
  $regist_fee_req = $payments[0]['amount'] ? floatval
  ($payments[0]['amount']) . '.00' : 00.00;
  $tax = !empty($regist_fee_req) ? floatval(($payments[0]['amount'] * 0) / 100) . '.00' : 00.00;
  $total = !empty($regist_fee_req) ? ($regist_fee_req + $tax) . '.00' : 00.00;
  $typev = $payments[0]['type'] ? $payments[0]['type'] : '';
  $type = ['Approval' => 'Approval letter Invoice', 'Agreement' => 'Agreement Invoice', 'Transport' => 'Transport Invoice', 'NOC' => 'NOC Invoice'];
  ?>
  <button onclick="history.back()">Go Back</button> ||
  <div class="container">

    <div id="page-wrap">

      <table class="table table-bordered table-striped">
        <div class="background"></div>
        <tr>
          <td class="logo-image">
            <img src="<?php echo base_url('assets/vadmin/img/valmologo.png') ?>"
              style="text-align: center;width: 39%;background-color: #092d5e;">
          </td>
          <td class="logo-image">
            <h2><?= $type[$typev] ?? '' ?></h2>
          </td>

        </tr>
        <tr>
          <td class="bg-warning">
            <h2>TAX INVOICE</h2>
            <hr>
            <strong>Date:</strong> <?php echo date('d F Y') ?><br>
            <strong>Invoice Number:</strong> <?php echo $orderid; ?><br>
            <strong>Due Date:</strong> <?php echo $upload_date; ?><br>
            <strong>GST No:- <span style="color:blue;">27AADFT3025B1ZP</span></strong><br>
          </td>
          <td class="bg-warning">
            <h2>User Details</h2>
            <hr>
            <strong>Name: </strong><?php echo $userDetails['name']; ?><br>
            <strong>Email Id: </strong><?php echo $userDetails['email']; ?><br>
            <strong>Mobile No: </strong><?php echo $userDetails['mobile']; ?><br>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>
            <div class="center-justified"><strong>Invoice Amount:</strong> </div>
          </td>
          <td> Rs. <?php echo $regist_fee_req; ?> </td>
        </tr>

        <tr>
          <td>
            <div class="center-justified"> <strong> Status:</strong>
              <?php if ($typev == 1) { ?>
                <span style="color: green;"> Approval letter </span>
              <?php } elseif ($typev == 2) { ?>
                <span style="color: green;"> Insurance </span>
              <?php } elseif ($typev == 3) { ?>
                <span style="color: green;"> TDS </span>
              <?php } ?>

            </div>
          </td>
          <td><span class="btn btn-success" style="text-transform:capitalize;"><?php echo $regist_fee_req; ?></span></td>
        </tr>
        </tbody>

        <table class="table table-bordered table-striped">

          <tr class="border-bottom border-right grey">
            <td colspan="3"><strong>Summary</strong></td>
          </tr>
          <tr class="border-bottom border-right center">
            <td width="45%"><strong>Activity</strong></td>
            <td width="25%"><strong>Tax</strong></td>
            <td width="30%"><strong>Amount (INR)</strong></td>
          </tr>
          <tr class="border-right">
            <td class="pad-left">Registration</td>
            <td class="center">Tax percent </td>
            <td class="right-center">Rs.
              0%

            </td>
          </tr>
          <tr class="border-right">
            <td class="pad-left">&nbsp;</td>
            <td class="right border-top">Total</td>
            <td class="right border-top">Rs. <?php echo $regist_fee_req; ?>

            </td>
          </tr>
          <tr class="border-right">
            <td class="pad-left">&nbsp;</td>
            <td class="right border-top">Tax</td>
            <td class="right border-top">Rs.<?php echo $tax; ?></td>
          </tr>
          <tr class="border-right">
            <td class="pad-left">&nbsp;</td>
            <td class="right border-top">Grand Total</td>
            <td class="right border-top">Rs. <?php echo $total; ?> </td>
          </tr>

        </table>
        <table class="table table-bordered table-striped ">

          <tr>
            <td width="50%">
              <div class="center-justified">
                <strong>Address</strong><br>
                3RD FLOOR,</br> WING-E, HELIOS BUSINESS PARK,</br> VILLAGE, VARTHUR HOBLI, OUTER</br> RING ROAD BELLANDUR, BANGALORE,</br> BANGALORE SOUTH
                        </br>KARNATAKA, INDIA, 560103

          </tr>

        </table>
        <p>&nbsp;</p>
        <table>
          <tbody>
            <tr>
              <td> This is a Computer Generated Document does not Require Signature </td>
            </tr>
          </tbody>
        </table>
    </div>
    <hr>
    <button class="btn btn-success text-center" onClick="myFunction()">Print this page</button>
    <hr>
  </div>
  </div>
  <script>
    function myFunction() {
      window.print();
    }
  </script>
</body>

</html>