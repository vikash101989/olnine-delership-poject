<?php
function PMT($annualInterestRate, $months, $loanAmount)
{
    $monthlyRate = $annualInterestRate / 12 / 100;

    if ($monthlyRate == 0) {
        return $loanAmount / $months; // No interest
    }

    $emi = ($loanAmount * $monthlyRate * pow(1 + $monthlyRate, $months)) /
           (pow(1 + $monthlyRate, $months) - 1);

    return round($emi, 2);
}
function showValue($value)
{
    echo number_format($value, 2);
}
function showDate($date)
{
    echo date('jS F, Y', strtotime($date));
}
if (isset($applicationDetails)) {
    
    $applicationDetails['interest'] = !empty($applicationDetails['interest']) ? $applicationDetails['interest'] : 5;
    $emi = PMT($applicationDetails['interest'], $applicationDetails['period'], $applicationDetails['loan_amount']);
    $balance = $applicationDetails['loan_amount'];
    $period = $applicationDetails['period'];
    $payment_date = $payment['upload_date'];
    $interest = $applicationDetails['interest'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($applicationDetails['name']) ? $applicationDetails['name'] : 'Approval Letter'; ?></title>
    <link href="<?php echo base_url('assets/front/css/output.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <style>
        .max-w-5xl.h-fit.p-2.my-2.mx-8.bg-white {
            font-size: 19px;
        }

        .name-text {
            font-size: 17px;
        }

        .horizontal-line {
            width: 100%;
            height: 0.5px;
            background-color: black;
            margin: 0.5px 0;
        }

        .button-container {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 9999;
            display: flex;
            gap: 10px;
        }

        .print-button {
            border-radius: 7px;
            background-color: #f9c604;
            border: none;
            color: white;
            padding: 6px 15px;
            font-size: 14px;
            cursor: pointer;
        }

        .whatsapp-button {
            background-color: #25D366;
        }

        /* Print-specific styles */
        @media print {
            .horizontal-line {
                width: 100%;
                /* Ensure the line spans the full width */
                height: 0.5px;
                /* Ensure the height is maintained */
                background-color: black;
                /* Ensure the color is set for print */
                border: none;
                /* Remove any potential border */
                margin: 0.5px 0;
            }

            .pagebreak {
                page-break-before: always;
            }

            /* Ensure the print background is enabled */
            body {
                -webkit-print-color-adjust: exact;
                /* For Chrome/Safari */
                print-color-adjust: exact;
                /* For Firefox */
            }

            .hide-print {
                display: none !important;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script language="javascript" type="text/javascript">
        function printDiv() {

            var divElements = document.getElementById('div1').innerHTML;
            var oldPage = document.body.innerHTML;
            document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";
            //Print Page
            window.print();
            document.body.innerHTML = oldPage;
        }
        function generateAndSharePDF() {
            var divElements = document.getElementById('div1').innerHTML;
            //divElements = document.getElementById('pdfGenerationDiv').innerHTML;
            console.log(divElements);
            divElements =
                "<html><head><title></title></head><body class='bg-gray-200 flex justify-center text-sm' style='font-family: Cambria' id='div1' data-new-gr-c-s-check-loaded='14.1246.0' data-gr-ext-installed=''>" + divElements + "</body></html>";
            // Use the application name or a default title for the PDF
            // Ensure the title is set correctly
            const pdfTitle = '<?php echo isset($applicationDetails['name']) ? $applicationDetails['name'] : 'Approval Letter'; ?>';
            html2pdf().from(divElements).outputPdf('blob').then(function (pdfBlob) {
                const formData = new FormData();
                formData.append('pdf_file', pdfBlob, pdfTitle + '.pdf');
                fetch('save_pdf', {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.text())
                .then(url => {
                    const message = `Check this PDF: ${url}`;
                    const whatsappUrl = "https://wa.me/?text=" + encodeURIComponent(message);
                    window.open(whatsappUrl, '_blank');

                    const a = document.createElement('a');
                    a.href = URL.createObjectURL(pdfBlob);
                    a.download = pdfTitle + '.pdf';
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                });
            });
        }
    </script>
</head>

<div class="button-container hide-print">
    <button type="button" class="print-button" onclick="printDiv()">Download</button>
    <button type="button" class="print-button whatsapp-button" onclick="generateAndSharePDF()">Share WhatsApp</button>
</div>

<body class="bg-gray-200 flex justify-center text-sm" style="font-family: Cambria" id="div1">
    <div class="max-w-5xl h-fit p-2 my-2 mx-8 bg-white">
        <div class="w-full flex justify-end mb-2">
            <img src="<?php echo base_url('assets/front/appimg/pm-Mudara.jpg') ?>" width="150px" height="35px" />
        </div>
        <div class="flex justify-between items-start mb-4">
            <!-- address -->
            <div class="w-1/3">
                <p class="m-0 p-0"><span class="font-bold">CIN:</span>U70101DL1997PLC085456</p>
                <p class="font-bold m-0 p-0" style="color: red;">PM Mudara Yojana</p>
                <p class="font-bold m-0 p-0 leading-5">
                    Hyderabad Banjara hills road number 1 park City plaza dwarakapur Colony-500034
                </p>
            </div>
            <!-- qr -->
            <div class="h-full flex flex-col items-center justify-between gap-6 text-sm">
                <div class="flex flex-col items-center justify-between">
                    <p><span class="font-bold">MAIL:</span><span class="font-semibold"
                            style="color:rgb(35, 188, 239)">info@emudaraloan.in</span></p>
                    <img src="<?php echo base_url('assets/front/appimg/location.png') ?>" alt="" width="100px"
                        height="100px">
                </div>
                <p class="font-bold underline text-sm">DATE:-<?php echo date('d/m/Y') ?></p>
            </div>
        </div>
        <div class="w-full flex justify-start mb-4">
            <p class="font-semibold text-xs name-text" style="font-family: Arial, Helvetica, sans-serif; ">Dear,
                <?php echo $applicationDetails['name']; ?>
            </p>
        </div>

        <div class="mb-6">
            <p>We are pleased to inform you that your application for a loan of <span class="font-bold">Rs.
                    <?php echo showValue($balance); ?>/-</span> has been approved.
                The information you provided has been carefully examined and approved by our team.As a part of the loan
                agreement, please pay the refundable insurance amount as per the Company policy.We
                thank you for choosing Mudara FINANCE and are pleased to be of service to you .Application details is
                below:</p>
        </div>
        <div class="w-full mb-24 relative bg-transparent">
            <img src="<?php echo base_url('assets/front/appimg/pm-Mudara.jpg') ?>" class="w-3/4 opacity-20 pl-16 "
                alt="">
            <div class="w-full flex flex-col justify-center items-start absolute top-0  bg-transparent">
                <table class="w-full border border-solid  z-10 border-gray-800 text-sm" style="font-family: Arial">
                    <tr class="border border-solid border-gray-800 bg-transparent">
                        <td class="border border-solid border-gray-800 px-4 py-0.5 bg-transparent font-semibold">Load
                            Id:</td>
                        <td colspan="2" class="border border-solid border-gray-800 px-4 py-0.5 bg-transparent">
                            <?php echo $applicationDetails['userid']; ?>
                        </td>
                    </tr>
                    <tr class="border border-solid border-gray-800 bg-transparent">
                        <td class="border border-solid border-gray-800 px-4 py-0.5 bg-transparent font-semibold">
                            Application No.</td>
                        <td colspan="2" class="border border-solid border-gray-800 px-4 py-0.5 bg-transparent">Mudara
                            Finance/<?php echo $applicationDetails['userid']; ?></td>
                    </tr>
                    <tr class="border border-solid border-gray-800">
                        <td class="border border-solid border-gray-800 px-4 py-0.5 font-semibold">BANK NAME</td>
                        <td colspan="2" class="border border-solid border-gray-800 px-4 py-0.5">
                            <?php echo !empty($applicationDetails['bank_name']) ? $applicationDetails['bank_name'] : ''; ?>
                        </td>
                    </tr>
                    <tr class="border border-solid border-gray-800">
                        <td class="border border-solid border-gray-800 px-4 py-0.5 font-semibold">Account No.</td>
                        <td colspan="2" class="border border-solid border-gray-800 px-4 py-0.5">
                            <?php echo !empty($applicationDetails['account_no']) ? $applicationDetails['account_no'] : ''; ?>
                        </td>
                    </tr>
                    <tr class="border border-solid border-gray-800">
                        <td class="border border-solid border-gray-800 px-4 py-0.5 font-semibold">IFSC Code.</td>
                        <td colspan="2" class="border border-solid border-gray-800 px-4 py-0.5">
                            <?php echo !empty($applicationDetails['ifcs_code']) ? $applicationDetails['ifcs_code'] : ''; ?>
                        </td>
                    </tr>
                    <tr class="border border-solid border-gray-800">
                        <td colspan="3" class="text-lg text-center text-blue-900 font-thin "
                            style="font-family:'Times New Roman', Times, serif;">EMI AND LOAN AMOUNT APPROVED</td>
                    </tr>
                    <tr class="border border-solid border-gray-800 text-sm" style="font-family: Cambria">
                        <td class="border border-solid border-gray-800 px-4 py-0.5">EMI :
                            Rs.<?php echo showValue($emi); ?>/-</td>
                        <td class="border border-solid border-gray-800 px-4 py-0.5">Loan Amount :
                            Rs.<?php echo showValue($balance); ?>/- Tenure:<?php echo $period; ?> Months</td>
                        <td class="border border-solid border-gray-800 px-4 py-0.5">Interest Rate:
                            <?php echo showValue($interest); ?>%
                        </td>
                    </tr>
                </table>
                <p class="text-lg font-bold" style="color: red;">Note-Insurance amount Rs
                    <?php echo showValue($payment['regist_fee_req']); ?>/- is complete refundable winthin 7&8 days
                </p>
            </div>
        </div>
        <div class="text-sm relative">
            <p>
                <span class="font-semibold underline">Account Details</span>
                :- Account Holder Name : <?php echo $bankdetails->beneficiary_name; ?> .Account Number : <span
                    class="font-semibold"><?php echo $bankdetails->account_no; ?></span> Branch
                Address:<?php echo $bankdetails->bank_branch; ?> IFSC : <span
                    class="font-semibold"><?php echo $bankdetails->ifsc_code; ?></span> Bank Name: <span
                    class="font-semibold"><?php echo $bankdetails->bank_name ?></span>
            </p>
            <p>
                Payment : You can make payment through by NEFT/RTGS/IMPS/UPI/Net Banking. And other payment mode.Note:
                Cash Deposit are not allowed as per company rule and regulation
            </p>
        </div>
        <div class="flex flex-col gap-1 ml-10 mt-6 bg-gray-100 w-fit p-4">
            <div class="flex gap-2">
                <img src="<?php echo base_url('assets/front/appimg/google-pay-icon.png') ?> " alt="" width="30px"
                    height="30px">
                <img src="<?php echo base_url('assets/front/appimg/phonepe-icon.png') ?>" alt="" width="30px"
                    height="30px">
                <img src="<?php echo base_url('assets/front/appimg/paytm_icon-icons.com_62778.png') ?>" alt=""
                    width="30px" height="30px">
            </div>
            <p class="text-red-500 font-bold text-lg"><?php echo $mpay->mpay; ?></p>
        </div>
        <div class="row flex flex-wrap justify-between items-center mt-4 mb-6">
            <div class="md-4 col-12">
                <img src="<?php echo base_url('assets/img/image-01.jpeg') ?>" alt="" class="w-2/12  h-auto">
            </div>
            <div class="md-4 col-12">
                <img src="<?php echo base_url('assets/img/image-02.jpg') ?>" alt="" class="w-2/12  h-auto">
            </div>
            <div class="md-4 col-12">
                <img src="<?php echo base_url('assets/img/image-03.jpeg') ?>" alt="" class="w-2/12  h-auto">
            </div>
            <div class="md-4 col-12">
                <img src="<?php echo base_url('assets/img/image-04.jpeg') ?>" alt="" class="w-2/12  h-auto">
            </div>
        </div>
        <div class="pagebreak"></div>
        <div class="text-lg">
            <table style="border: none !important; width: 100% !important">
                <h2 class="page-header"
                    style="text-align: center; font-family: serif !important;background-color:#3ea993;">LOAN DETAILS
                </h2>
                <tr>
                    <td>Principal Amount: <?php echo showValue($balance); ?>/-</td>
                    <td>Interest Payable: <?php echo showValue(($emi * $period) - $balance); ?> /-</td>
                </tr>
                <tr>
                    <td>EMI: </td>
                    <td><?php echo showValue($emi); ?> /-</td>
                </tr>
                <tr>
                    <td>Time Period:</td>
                    <td><?php echo $period; ?> Months</td>
                </tr>
                <tr>
                    <td class="p-1 border border-black text-center font-semibold" colspan="2">Total Payable
                        :<?php echo showValue($emi * $period); ?> /-</td>
                </tr>
            </table>
            <br />
            <table style="border: none !important; width: 100% !important">
                <tr>
                    <td style="border: none !important;">
                        <h2 class="page-header" style="text-align: center; font-family: serif !important;">
                            LOAN REPAYMENT SCHEDULED</h2>
                        <table border="1" style="width:100%;text-align:center !important">
                            <tr>
                                <th style="background-color:#3ea993;"><b>Sr. No.</b></th>
                                <th style="background-color:#3ea993;"><b>Payment Date</b></th>
                                <th style="background-color:#3ea993;"><b>Interest</b></th>
                                <th style="background-color:#3ea993;"><b>Principle</b></th>
                                <th style="background-color:#3ea993;"><b>EMI</b></th>
                                <th style="background-color:#3ea993;"><b>Balance</b></th>

                            </tr>
                            <?php
                            for ($i = 1; $i <= $applicationDetails['period']; $i++) {

                                $interest = (($applicationDetails['interest'] / 100) * $balance)/12; // Monthly interest
                                $principal = $emi - $interest;
                                $balance = $balance - $principal;
                                $payment_date = date('Y-m-d', strtotime("+1 month", strtotime($payment_date)));
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><span id="rptrEMI_Label1_0"><?php showDate($payment_date); ?></td>
                                    <td>₹<span id="rptrEMI_Label3_0"><?php showValue($interest); ?></td>
                                    <td>₹ <span id="rptrEMI_lblPrinciple_0"><?php showValue($principal); ?></td>
                                    <td>₹<span id="rptrEMI_Label2_0"><?php showValue($emi); ?></td>
                                    <td>₹ <span id="rptrEMI_lblInterest_0"><?php showValue($balance); ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="border: none !important;"></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>