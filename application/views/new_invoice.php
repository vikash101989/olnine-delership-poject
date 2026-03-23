

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Invoice letter|<?php echo $userDetails['name']; ?> </title>
<style>
  /* Set the physical page size and default margins for print */
  @page {
    size: A4;               /* or: size: 210mm 297mm; */
    margin: 20mm;          /* adjust as needed */
  }

  /* Optional: portrait or landscape explicitly */
  /* @page { size: A4 portrait; } */
  /* @page { size: A4 landscape; } */

  /* Page styling for screen and print */
  html, body {
    margin: 0;
    padding: 0;
    -webkit-print-color-adjust: exact; 
    /* keep colors in some browsers */
    font-size: 0.94em;
  }

  /* The "sheet" represents one printed A4 page */
  .sheet {
    box-sizing: border-box;
    width: 210mm;       /* exact A4 width */
    height: 297mm;      /* exact A4 height */
    padding: 20mm;      /* matches @page margin if you like */
    margin: 0 auto;     /* center on screen */
    position: relative;

    /* for debugging on screen: outline: 1px solid #eee; */
    page-break-after: always; /* force new page after each .sheet */
  }
  .page1{
    background-image: url('<?php echo base_url('assets/vadmin/img/invoice.jpg'); ?>');
    background-repeat: no-repeat;
    background-size: cover;
  background-size: 85% auto;   /* ðŸ‘ˆ reduce width */
    background-position: center top;
  }
  
.tbl1{
  margin-top:33%;
  margin-left:5%; 
  width:91%;  
  text-align:left;
}
.t2r2c1,.t2r2c2{
        padding-top:5mm;
    }
.tbl2{
  margin-left:5%;
  margin-top:5%;  
  width:91%; 
}
.tbl3{
  margin-left:1%;
   
  width:95%; 
  text-align:center;
}
.tbl4{
  margin-left:43%;
  width:60%;
  margin-top:4mm;
  text-align:center;
}
.bottom{
    padding-top:2mm;
}

  /* Nice-to-have print rules */
  @media print {
    /* Remove default page background gaps */
    body { background: none;  }

    /* Avoid content being split inside these blocks */
    .avoid-break { break-inside: avoid; page-break-inside: avoid; }

    /* Hide UI elements when printing */
    .no-print { display: none !important; }
    .t2r2c1,.t2r2c2{
        padding-top:4mm;
    }
    .bottom{
        padding-top:2mm;
    }
    
  }

  /* Control where to break pages manually */
  .page-break { page-break-before: always; break-before: page; }

  /* Example header/footer (simple) */
  .header {
    display: flex;
 
    font-size: 12pt;
    margin-bottom: 3mm;
    position: relative;
    top:-5mm;
  }
    
  .footer {
    display: block;
    text-align: center;
    font-size: 10pt;
    margin-top: 6mm;
  }

  /* Typography/layout helpers */
  h1 { font-size: 18pt; margin: 0 0 6mm 0; }
  p  { margin: 0 0 4mm 0;  }

  .div1{
    display: flex;
  
    position: absolute;
    top:76mm;
    width:160mm;
    padding-left:11mm;
    padding-top: 2mm;
    overflow: hidden;
    height: 41mm;
    /* align-items: center; */
  }
  .div1l{
    width:40%;
  }
  .div1r{
    width:55%;
  }
  .div2{
    display: flex;
    position: absolute;
    top:122mm;padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;

  }
  .div2l{
    width:40%;
  }
  .div2r{
    width:56%;
  }
  .div3{
    display: flex;
    position: absolute;
    top:132mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;
  }
  .div3l{
    width:40%;
  }
  .div3r{
    width:56%;
  }
  .div4{
    display: flex;
    position: absolute;
    top:142mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;
    text-align: center;
  }
  .div4l{
    width:40%;
  }
  .div4m{
    width:30%;
  }
  .div4r{
    width:30%;
  }
  .div5{
    display: flex;
    position: absolute;
    top:154mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;
    text-align: center;
  }
  .div5l{
    width:40%;
  }
  .div5m{
    width:30%;
  }
  .div5r{
    width:30%;
  }
  .div6{
    display: flex;
    position: absolute;
    top:166mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;
    text-align: center;
  }
  .div6l{
    width:40%;
  }
  .div6m{
    width:30%;
  }
  .div6r{
    width:30%;
  }
  .div7{
    display: flex;
    position: absolute;
    top:178mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 20mm;
    width: 160mm;
    text-align: center;
  }
  .div7l{
    width:40%;
  }
  .div7m{
    width:30%;
  }
  .div7r{
    width:30%;
  }
  .div8{
    display: flex;
    position: absolute;
    top:193mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 11mm;
    width: 160mm;
    text-align: center;
  }
  .div8l{
    width:40%;
  }
  .div8m{
    width:30%;
  }
  .div8r{
    width:30%;
  }
  .div9{
    display: flex;
    position: absolute;
    top:200mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 8mm;
    width: 160mm;
    text-align: center;
  }
  .div9l{
    width:40%;
  }
  .div9m{
    width:30%;
  }
  .div9r{
    width:30%;
  }
  .div10{
    display: flex;
    position: absolute;
    top:208mm;
    padding-left: 11mm;
    padding-top: 2mm;
    height: 8mm;
    width: 160mm;
    text-align: center;
  }
  
</style>
</head>
<body>
  <?php

  $orderid = $payments[0]['orderid'] ? $payments[0]['orderid'] : '';
  $upload_date = $payments[0]['created_at'] ? $payments[0]['created_at'] : '';
  $regist_fee_req = isset($payments[0]['amount']) 
    ? number_format((float)$payments[0]['amount'], 2, '.', '') 
    : '0.00';
  $sgst = !empty($regist_fee_req) ? number_format((($payments[0]['amount'] * 6) / 100), 2, '.', '') : 00.00;
  $cgst = !empty($regist_fee_req) ? number_format((($payments[0]['amount'] * 6) / 100), 2, '.', '') : 00.00;
  $total = !empty($regist_fee_req) ? ($regist_fee_req + $sgst + $cgst) : 00.00;
  $typev = $payments[0]['type'] ? $payments[0]['type'] : '';
  $type = ['Approval' => 'Approval letter Invoice', 'Agreement' => 'Agreement Invoice', 'Transport' => 'Transport Invoice', 'NOC' => 'NOC Invoice'];

  ?>
<!-- On-screen you can have multiple sheets (each becomes an A4 page when printed) -->
<div class="sheet page1">
    <div class="div1">
      <div class="div1l">
          Date: <b></b><?php echo date('d F Y') ?> <br>
          Invoice No: <b><?php echo $orderid; ?></b> <br> 
          REG :<b><?php echo $userDetails['app_id']; ?></b> <br>
          GST :<b>29AACCF6368D1ZI</b>
      </div>
      <div class="div1r">
          Name: <?php echo $userDetails['name']; ?>  <br> 
          Email: <?php echo $userDetails['email']; ?><br>
          Address: <?php echo $userDetails['address']; ?>      </div>

    </div>
        <div class="div2">
      <div class="div2l">
        Invoice To:Invoice Amount
      </div>
      <div class="div2r">
        <?= $type[$typev] ?? '' ?> Rs
      </div>
    </div>
    <div class="div3">
      <div class="div3l">
        <?= $type[$typev] ?? '' ?> Rs
      </div>
      <div class="div3r">
        â‚¹<?=$regist_fee_req?>      </div>
    </div>
    <div class="div4">
      <div class="div4l">
        Summanry
      </div>
      <div class="div4m">
         CGST
      </div>
      <div class="div4r">
        â‚¹<?=$cgst?>      </div>
    </div>
    <div class="div5">
      <div class="div4l">
        
      </div>
      <div class="div5m">
         SGST
      </div>
      <div class="div5r">
        â‚¹<?= $sgst ?>      </div>
    </div>
    <div class="div6">
      <div class="div6l">
        
      </div>
      <div class="div6m">
          UTR NO/Transaction ID
      </div>
      <div class="div6r">
          Amount
      </div>
    </div>
    <div class="div7">
      <div class="div7l">
        
      </div>
      <div class="div7m">
          XXXXXXXX
      </div>
      <div class="div7r">
          â‚¹  <?= $total ?>   </div>
    </div>
    <div class="div8">
      <div class="div8l">
        
      </div>
      <div class="div8m">
          Grand Total
      </div>
      <div class="div8r">
          â‚¹<?= $total ?>      </div>
    </div>
    <div class="div9">
      <div class="div9l">
        
      </div>
      <div class="div9m">
          Dues Amount
      </div>
      <div class="div9r">
          N/A
      </div>
    </div>
    <div class="div10">
      This invoice has been generated electronically and therefore does not require <br> physical signature
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
  
window.onload = function () {
  const element = document.body;

     const opt = {
         margin: 0,
         filename: '<?php echo $userDetails['app_id']; ?>.pdf',
         image: { type: 'jpeg', quality: 0.98 },
         html2canvas: { scale: 2, useCORS: true },
         jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
     };

     html2pdf().set(opt).from(element).save();
 };
</script>


<!-- UI controls that shouldn't print -->

</body>
</html>

