<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Insurance</title>
  <style>
    @font-face {
      font-family: "MyCustomFont";
      src: url('<?php echo base_url('assets/template/NimbusRoman.ttf'); ?>') format("truetype");
    }

    body {
      font-family: "MyCustomFont", "Times New Roman", Times, serif;
      font-size: 14px;
      color: #000;
      margin: 20px;
    }

    /* Watermark (every page) */
    @page {
      background: url('<?php echo base_url('assets/img/watermark.png'); ?>') no-repeat center center;
      background-size: 400px 400px;
    }

    .container {
      max-width: 768px;
      margin: auto;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .header-right {
      text-align: right;
    }

    .header-right img {
      width: 200px;
      height: auto;
    }

    .title {
      font-size: 18px;
      font-weight: bold;
      color: #7f1d1d;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .section {
      margin-top: 15px;
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .highlight {
      background-color: #7f1d1d;
      color: white;
      padding: 4px 8px;
    }

    .list {
      margin: 8px 0 8px 20px;
    }

    .signature-block {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-top: 30px;
      gap: 30px;
    }

    .signature-block img {
      display: block;
    }

    .sign {
      text-align: center;
    }

    .sign img {
      width: 200px;
      height: 80px;
    }

    .watermark-img {
      position: fixed;
      top: 50%;
      left: 50%;
      width: 400px;
      /* Adjust size as needed */
      opacity: 0.4;
      /* Adjust transparency */
      transform: translate(-50%, -50%);
      z-index: 0;
      pointer-events: none;
      /* So it doesn't block clicks */
    }

    .background {
      background-image: url("<?php echo base_url('assets/img/watermark.png') ?>");
      /* The image used */
      height: 200px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      position: absolute;
      opacity: 0.25;
      width: 100%;
      top: 8%;
      text-align: center;
      z-index: 0;
      -webkit-print-color-adjust: exact;

    }

    .background2 {
      background-image: url("<?php echo base_url('assets/img/watermark.png') ?>");
      /* The image used */
      height: 200px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      position: absolute;
      opacity: 0.25;
      width: 100%;
      top: 20%;
      text-align: center;
      z-index: 0;
      -webkit-print-color-adjust: exact;

    }

    .background3 {
      background-image: url("<?php echo base_url('assets/img/watermark.png') ?>");
      /* The image used */
      height: 200px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      position: absolute;
      opacity: 0.25;
      width: 100%;
      top: 30%;
      text-align: center;
      z-index: 0;
      -webkit-print-color-adjust: exact;

    }

    .background4 {
      background-image: url("<?php echo base_url('assets/img/watermark.png') ?>");
      /* The image used */
      height: 200px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      position: absolute;
      opacity: 0.25;
      width: 100%;
      top: 40%;
      text-align: center;
      z-index: 0;
      -webkit-print-color-adjust: exact;

    }
  </style>
</head>

<body>



  <div class="container">
    <!-- header -->
    <!-- <img src="<?php echo base_url('assets/img/watermark.png') ?>" alt="" style="position: absolute;left:0;top: 241px;width:100%;opacity:0.4;z-index:-10;"> -->
    <!-- <img src="<?php echo base_url('assets/img/watermark.png') ?>" alt="" alt="watermark" class="watermark-img"> -->
    <p style="font-size:18px; margin-bottom:5px;">Aadhar Credit Pvt Ltd</p>
    <div class="header">
      <div></div>
      <div class="header-right">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo">
        <p style="font-size:16px;">Date: 23/08/2025</p>
      </div>
    </div>

    <!-- salutation -->
    <div class="section">
      <p style="font-weight:bold; margin:0;">Dear,</p>
      <p style="font-weight:bold; margin:0;"><?php echo $application['name']; ?></p>
      <p>Your phone no is <?php echo $application['mobile']; ?>.</p>
      <p>Your email is <?php echo $application['email']; ?>.</p>
      <p>Your account number is <?php echo $application['bank_account']; ?> .</p>
      <p>Your Loan Amount Rs. <?php echo $application['loan_amount']; ?> </p>
      <p style="margin-top:15px; margin-bottom:15px;">
        Your transaction failed, and loan insurance is under Process, please complete the<br>
        <span style="font-weight:bold;">insurance charge of Rs. 5,900.00.</span>
        This payment is fully refundable within 10 minutes.
      </p>
    </div>

    <!-- highlight -->
    <div class="section">
      <p class="highlight">Aadhar Credit Loan Protect Insurance (Individual) - Policy Wording</p>
    </div>

    <!-- Policy Sections -->
    <div class="section">
      <h1 class="title">1. Operative Clause</h1>
      <p>
        Aadhar Credit Pvt. Ltd. (We, Our or Us) will provide the insurance described in this
        Policy and any endorsements thereto...
      </p>
    </div>
    <div class="background4"></div>
    <div class="section">
      <h1 class="title">2. Definitions</h1>
      <p>This Policy, the Schedule and any Clauses thereon shall be considered one document...</p>
    </div>

    <div class="section">
      <h1 class="title">Accident</h1>
      <p>An accident is a sudden, unforeseen and involuntary event caused by external, visible & violent mean.</p>
    </div>

    <div class="section">
      <h1 class="title">Bank / Financial Institution</h1>
      <p>Means a banking company which transacts the business of banking...</p>
    </div>

    <div class="section">
      <h1 class="title">Civil War</h1>
      <p>Means war, whether declared or not...</p>
    </div>

    <div class="section">
      <h1 class="title">Dependent child</h1>
      <p>Means a child (natural or legally adopted)...</p>
    </div>

    <div class="section">
      <h1 class="title">Disclosure to information norm</h1>
      <p>The policy shall be void and all premium paid...</p>
    </div>

    <div class="section">
      <h1 class="title">Grace Period</h1>
      <p>Grace period means the specified period of time...</p>
    </div>

    <div class="section">
      <h1 class="title">Home / Insured Premises / Property</h1>
      <p>Means the building of standard construction...</p>
    </div>

    <div class="section">
      <h1 class="title">Loan EMI</h1>
      <p>Means the equated monthly instalment...</p>
    </div>
    <div class="background3"></div>
    <div class="section">
      <h1 class="title">Hospital</h1>
      <p>A hospital means any institution established for in-patient care...</p>
    </div>
    <div class="section">
      <h1 class="title">Illness</h1>
      <p>Illness means a sickness or a disease...</p>
    </div>

    <div class="section">
      <h1 class="title">Injury</h1>
      <p>Injury means accidental physical bodily harm...</p>
    </div>

    <div class="section">
      <h1 class="title">Insurable/Insured event</h1>
      <p>Means an event, loss or damage...</p>
    </div>

    <div class="section">
      <h1 class="title">Insured/ Named Insured</h1>
      <p>Insured means the persons...</p>
    </div>

    <div class="section">
      <h1 class="title">Medical Practitioner</h1>
      <p>Medical Practitioner means a person who holds a valid registration...</p>
    </div>

    <div class="section">
      <h1 class="title">Notification of Claim</h1>
      <p>Notification of claim means the process...</p>
    </div>

    <div class="section">
      <h1 class="title">Outstanding e loan</h1>
      <p>Means the amount outstanding...</p>
    </div>
    <div class="background4"></div>
    <div class="section">
      <h1 class="title">Permanent total Disability</h1>
      <ul class="list">
        <li>Loss of the sight of both eyes</li>
        <li>Loss of ability to use both hands or both feet</li>
        <li>Loss of ability to use one hand and one foot</li>
        <li>Loss of sight of one eye and one hand or foot</li>
      </ul>
    </div>

    <div class="section">
      <h1 class="title">Policy</h1>
      <p>Policy document is a legal document which is an evidence...</p>
    </div>

    <div class="section">
      <h1 class="title">Policy period/Period of insurance</h1>
      <p>The period between and including the start and end dates...</p>
    </div>

    <div class="section">
      <h1 class="title">Pre existing disease/Condition</h1>
      <p>Pre-Existing Disease means any condition...</p>
    </div>

    <div class="section">
      <h1 class="title">Renewal</h1>
      <p>Renewal means the terms on which the contract...</p>
    </div>

    <div class="section">
      <h1 class="title">Schedule</h1>
      <p>Means the document attached...</p>
    </div>

    <div class="section">
      <h1 class="title">Sum Insured</h1>
      <p>Means the sum as specified in the schedule...</p>
    </div>

    <div class="section">
      <h1 class="title">Surgery or Surgical procedure</h1>
      <p>Surgery or Surgical Procedure means manual and operative procedure...</p>
    </div>

    <div class="section">
      <h1 class="title">Terrorism</h1>
      <p>Means activities against persons, organizations...</p>
      <ol class="list">
        <li>Use or threat of force or violence</li>
        <li>Commission or threat of a dangerous act</li>
        <li>Interferes with or disrupts an electronic system</li>
      </ol>
    </div>

    <div class="section">
      <h1 class="title">We, Our, Us, The company</h1>
      <p>Means the Mudara General Insurance Company Limited.</p>
    </div>


    <div class="section">
      <h1 class="title">3. Product Information</h1>
      <h1 class="title">Eligibility Criteria:</h1>
      <p>This product may be obtained by any Indian Citizen / FI’s / Banks.</p>
      <h1 class="title">Age Limit:</h1>
      <p>18 years to 65 years...</p>
    </div>

    <div class="section">
      <h1 class="title">4. Duration of Coverage:</h1>
      <ol class="list">
        <li>The policy can be opted for 1, 2 or 3 years.</li>
        <li>The cover commences from date of premium receipt.</li>
        <li>Terminates after claim...</li>
      </ol>
    </div>
    <div class="background2"></div>
    <!-- Stamps and signatures -->
    <div class="signature-block">
      <p style="font-size:16px;">Thanks & Regards,</p>
      <div>
        <img src="<?php echo base_url('assets/img/seal.png'); ?>" alt="seal" style="width:120px; height:auto;">
      </div>
      <div class="sign">
        <img src="<?php echo base_url('assets/img/signature.png'); ?>" alt="signature">
        <p>(Mr. Sangeet Nair)</p>
        <p>Finance Manager</p>
      </div>
      <div>
        <img src="<?php echo base_url('assets/img/qr.png'); ?>" alt="qr" style="width:100px; height:auto;">
      </div>
    </div>
  </div>
</body>

</html>