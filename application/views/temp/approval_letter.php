<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>

@page {
    margin:0;
}

body{
    margin:0;
    padding:0;
    /* font-family: Arial, sans-serif; */
    font-family: 'Times New Roman', Times, serif;
}
*{  
    line-height: 20px;
    font-size: 16px;
    padding:0;
    margin:0;
}

.page{
    position:relative;
    width:210mm;
    height:297mm;
}

/* background image */
.bg{
    position:absolute;
    top:0;
    left:0;
    width:210mm;
    height:297mm;
}

/* main content box */
.content{
    position:absolute;
    top:20mm;
    left:18mm;
    right:18mm;
    bottom:20mm;
    font-size:13px;
    line-height:1.4;
}

/* header table */
.header-table{
    width:100%;
}

.section-table{
    width:100%;
    margin-top:5mm;
}

.footer{
    position:absolute;
    bottom:14mm;
    /* left:0; */
    left:18mm;
    right:18mm;
    width:100%;
}

</style>

</head>
<body>
    <div class="page">
        <img src="<?php echo base_url('assets'); ?>/vadmin/img/1.png" class="bg">
        <div class="content">
            <div style="margin-top: -10px;">
                <p style="font-size: 16px;font-weight: 800;" >Date - <?= date('d/m/Y') ?></p>
                <p style="font-size: 16px;font-weight: 800;" >Helpline Number</p>
                <p style="font-size: 16px;font-weight: 800;" >1800004544</p>
            </div>
            <table style="margin-top: 5px;">
                <tr>
                    <td style="width: 40%; vertical-align: top;line-height: 20px">
                        <p style="line-height: 20px"><b style="font-size: 16px;">Fashnear Technologies Private Limited Meesho Group</b></p>
                        <p style="line-height: 20px"><b>CORPORATE OFFICE</b> : 3RD FLOOR,</br> WING-E, HELIOS BUSINESS PARK,</br> VILLAGE, VARTHUR HOBLI, OUTER</br> RING ROAD BELLANDUR, BANGALORE,</br> BANGALORE SOUTH</p>
                        <p style="line-height: 20px">KARNATAKA, INDIA, 560103</p>
                        <p><a href="https://valmocourierspartners.com/">valmocourierspartners.com</a></p>
                    </td>
                    <td style="width: 45%;vertical-align: top;line-height: 20px;">
                        <p style="line-height: 20px"><b style="font-size: 16px;">Application</b></p>
                        <p style="line-height: 20px">Name : <?= $application['name'] ?></p>
                        <p style="line-height: 20px">S/O: <?= $application['father_name'] ?></p>
                        <p style="line-height: 20px">E-Mail ID : <?= $application['email'] ?></p>
                        <p style="line-height: 20px">Mobile Number : <?= $application['mobile'] ?></p>
                        <p style="line-height: 20px">Approved Location : <?= $application['address'] ?></p>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 5px;">
                <td style="width: 70%;">
                    <p>
                        Subject: <b>Letter of Intent</b> for Application Number- <?= $application['app_id'] ?><br>
                        Dear, <?= $application['name'] ?><br>
                        We all welcome you and we are acknowledging that Board of Directors hereby sends the approval of your Delivery Franchise as our Authorized Fashnear Technologies Private Limited here onwards.<br>
                        We are grateful for your expression of interest and the desire to be a Proud Member of Meesho Group. We are pleased to honor you with the prestigious membership
                    </p>
                </td>
                <td style="width: 30%;"></td>
            </table>
            <table style="margin-top: 5px;">
                <td>
                <p> 
                    The council stays abreast with the update technologies and partner with the best in the industry to give quality product worldwide in global format.</br>
                    For the additional facilities that must be provided by the corporation as aforesaid, Fashnear Technologies</br>
                    Private Limited will initiate the License after completion of NOC from government authorities for smooth operation, so that company can start the further process like- Site Agreement, Advertisement, Interior or exterior work at finalized site.</br>
                    Upon entering into a license Agreement with Meesho Group, Franchisee shall be permitted to sell all domestic, international and cargo products hereunder, under the trade name Meesho and its trademarks. Franchisee shall not be entitled to, and shall not, use or register on its own Meesho trade names, brand names or any other similar name or simulation or contraction thereof. The Franchisee shall also not be entitled to use, nor register on its own behalf the trade names, brand names or any other similar name or simulation of Meesho.</br>
                    The Franchisee shall be entitled to append its Brand name ''Meesho'' or “Authorized Valmo Outlet
                    Franchise'' at the preferred location” in that order. In case of failure on the part of any payment compliances on the part of FRANCHISEE due to which, Fashnear Technologies Private Limited is called upon to pay such amount, the same shall be recovered from the franchisee. Fashnear Technologies Private Limited may terminate this Agreement by written notice if there is a direct or indirect change in the- ownership, shareholding, re-constitution or change in control of the FRANCHISEE. In such an event parties may execute a fresh ‘’LETTER OF INTENT’’ to continue the business relationship in which case the FRANCHISEE shall provide all the required supporting documents in this regard.
                </p>
                </td>
            </table>
            <!-- photo -->
             <?php if (!empty($application['profile_image'])) { ?>
            <img src="<?php echo base_url('uploads'); ?>/<?php echo $application['profile_image']; ?>"
            <?php } else { ?>
            <img src="<?php echo base_url('assets'); ?>/vadmin/img/avatar.webp"
             <?php } ?>
             alt="Profile Image" class="profile-image"
            style="position:absolute; right:-5mm; top:68mm; width:30mm;">
        </div>
        <div class="footer">
            <table style="width: 100%;">
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        GST No29AACCF6368D1ZI
                    </p>
                </td>
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        CIN: U74900KA2015PTC082263
                    </p>
                </td>
            </table>
        </div>
    </div>

    <!-- page 2 -->
    
    <div class="page">
        <img src="<?php echo base_url('assets'); ?>/vadmin/img/1.png" class="bg">
        <div class="content">
            <table style="margin-top: 60px;">
                <td>
                <p> 
                    In case of breach of the provision of clause or sub-clause of this LETTER OF INTENT by the FRANCHISEE, FASHNEAR TECHNOLOGIES PRIVATE LIMITED shall have a right to immediately terminate this agreement without prejudice to the exercise of any other rights it may have against the FRANCHISEE in terms of this Letter of Intent?</br></br>
                    Either of the franchisee may terminate the Agreement immediately upon written notice if franchisee wishing to terminate gives the impression that it is likely to go insolvent.</br>
                    In the event of termination, the company shall render a final account to the other of all outstanding amounts/security deposit and the net outstanding amount shall be paid within fifteen (15) days.</br></br>
                    FRANCHISEE agrees that all information, whether written or oral, including but not limited to knowhow, standards, instructions, procedures, notes or methods of business or such confidential or proprietary information which Fashnear Technologies Private Limited may disclose to FRANCHISEE pursuant to the terms of this LETTER OF INTENT, shall be received and held by them on a strictly confidential basis and shall be used solely for the purposes of this Franchise Agreement and except as provided in this Letter of Intent, may not be disclosed to any person or business entity whatsoever.</br></br>
                    The Technical Know-How, procedures and documents furnished here under be deemed to be and shall remain the property of Fashnear Technologies Private Limited. Once approved a “Franchise” letter of intent will be provided or sent. Please sign and return within 24 hrs from the time of letter issued. Failure to return “Acknowledgement” letter may result in franchise being revoked. If additional time is needed please contact our office at -hello@valmologisticpartners.com</br></br>
                    Processing time is an average of 15 working days from the date the ‘’Letter of Intent’’ issued by Fashnear Technologies Private Limited. Franchise need to be under stands that applications will be processed within the timelines set forth in the Meesho Delivery Franchise and in accordance with applicable law.</br></br>
                    Fashnear Technologies Private Limited teams will be happy to speak with you over the phone, or communicate through e-mail if you have question as to the process, requirements, fees, review, or status of your particular request at any stage of your application and meet with you in person after documents completion</br></br>
                    All payments to Fashnear Technologies Private Limited are refundable (90%) except for the NOC & security deposit fee which, as described in official ‘terms & condition in part if we do not approve your application. Payments made to Fashnear Technologies Private Limited to be refundable based upon your acknowledgement.</br></br>
                    The company will not be held liable for any loss or damage on account of delay that may be caused in providing you the facilities mentioned above, whatever may be the cause of the failure of delay. You shall not induct any partner in case of individual (s) or making changes in the constitution of the partners as existing at the time of application, except your spouse as per terms and conditions of the OMC (Name), and shall give an undertaking to this effect.</br>

                </p>
                </td>
            </table>
        </div>
        <div class="footer">
            <table style="width: 100%;">
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        GST No29AACCF6368D1ZI
                    </p>
                </td>
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        CIN: U74900KA2015PTC082263
                    </p>
                </td>
            </table>
        </div>
    </div>
    <!-- page 3 -->

    <div class="page">
        <img src="<?php echo base_url('assets'); ?>/vadmin/img/1.png" class="bg">
        <div class="content">
            <table style="margin-top: 60px;">
                <td>
                <p> 
                    As agreed, you will be initiating necessary action towards enabling registration of site where the Outlet is planned. You will also have to assist us in with some fees to getting the requisite NOC from appropriate authorities. This NOC fees will be refundable (90%) while end of the contract with Meesho Group.</br></br>
                    You need to deposit Franchise Fee INR <?php echo $payments[0]['amount'] ?? '0.00'; ?>.00 through RTGS/NEFT in below mentioned Company authorized accountant bank account in the favor of Fashnear Technologies Private Limited at Bangalore branch towards registration and confirmation that you have successfully registered the Valmo Franchise under license of FOCO Model (As known as ‘’Franchisee owned company operated).</br></br>
                    You are notified that below is the Franchise Registration Company Bank Account details in which you will have to deposit theabove said amount within 24hours after getting the Letter of Intent (LOI). If we find that the progress made by you towards the above is not to company satisfaction, the progress of Land Agreement or advertisement can be delay, franchisee should have make sure that the process can be done smoothly under the timeline.</br></br>
                    In case you are not able to provide complete the franchise registration within the specified timeline or fail to full fill the terms and conditions of Letter of Intent (LOI), for any reason, then LOI can be withdrawn and selection can becancelled with your proper update.</br></br>
                    This letter is merely a letter of intent and is to be constructed as a 'firm offer' of Valmo Delivery Franchise on your name, The franchise will be allotted to you on your complying with the terms and conditions spelt out herein above by issuance of appointment letter along with signing of our standard franchise agreement by you and us (Fashnear Technologies Private Limited).</br></br>
                    Under the Franchise Investment Law, a franchisor is prohibited from offering to respective franchise owners any franchise terms different from the terms of the offer registered under Corporations Code sections 31111 (initial registration), 31121 (renewal) or 31123 (post-effective Amendment). So this prohibition does not apply to offers and sales of franchises under the franchise registered location.</br></br>
                    A Franchisee may check the application status through official website the Application status Portal. All of the procedure completion shall be updated on application status portal.</br></br>
                    Any franchise subject to the registration requirements of this law must complete the NOC from respective state government and the franchisor shall initiate the NOC and not to start the further process like- advertisement, Interior, Exterior until the NOC & License shall completed. All other fees that the franchisee must pay to the franchisor or its affiliates, or that the franchisor or its affiliates impose or collect in whole or in part for a Fashnear Technologies Private Limited. The franchisee must not to purchase or lease goods, services, supplies, fixtures, equipment, inventory, computer hardware and software and products related to franchised business, its designee, or suppliers</br></br>
                </p>
                </td>
            </table>
        </div>
        <div class="footer">
            <table style="width: 100%;">
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        GST No29AACCF6368D1ZI
                    </p>
                </td>
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        CIN: U74900KA2015PTC082263
                    </p>
                </td>
            </table>
        </div>
    </div>
    <!-- page 4 -->
     <div class="page">
        <img src="<?php echo base_url('assets'); ?>/vadmin/img/4.png" class="bg">
        <div class="content">
            <table style="margin-top: 60px;">
                <td>
                <p> 
                    approved by the franchisor, or under the franchisor’s specifications. Company obligations to the franchisee during the operation of the franchise, including below assistance in:</br></br>
                    <ol style="margin-left: 5mm;">
                        <li>Developing products or services the franchisee will offer to its customers.</li>
                        <li>Hiring and training employees.</li>
                        <li>Improving and developing the franchised business through the advertisement.</li>
                        <li>Establishing prices & festive offers.</li>
                        <li>Establishing and using administrative, bookkeeping, accounting, and inventory.</li>
                        <li>The franchisor’s obligation to conduct advertising, including:</li>
                        <li>Fashnear Technologies private Limited obligations to upgrade or update any system during the term of the franchise.</li>
                    </ol></br></br>
                    We do not make any representations about a franchisee future financial performance of Delivery Franchise. We also donot authorize our employees or representatives to make any such representations either orally or in writing.</br></br>
                    If you need any further details/guidance, please get in touch with your dedicated employee or write an email to us on:- hello@valmologisticpartners.com</br></br>
                    Please acknowledge receipt of this ‘’Letter of Intent’’ and sign on each page and revert us on hello@valmologisticpartners.com as acknowledgment of FOCO (Franchisee owned company operated ‘Valmo Delivery Franchise).</br></br>
                    Once again please accept our personal congratulations and best wishes for future endeavors. Thanking You. We are looking forward to a long and mutually valuable alliance.</br></br>

                </p>
                </td>
            </table>
        </div>

        <div class="footer">
            <table style="width: 100%;">
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        GST No29AACCF6368D1ZI
                    </p>
                </td>
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        CIN: U74900KA2015PTC082263
                    </p>
                </td>
            </table>
        </div>
    </div>

    <!-- page 4 -->
     <div class="page">
        <img src="<?php echo base_url('assets'); ?>/vadmin/img/4.png" class="bg">
        <div class="content">
            <table style="margin-top: 60px;">
                <td>
                <p> 
                    <span><b style="font-size:18px">Company Account Details - Official Franchise Registration Section</b></span></br></br>
                    This section contains the verified company banking information required for the submission of the
                    franchise registration fee. Please review carefully before initiating the payment. Company CIN:U74900KA2015PTC082263</br></br>
                    </span><b style="font-size:18px">Authorized Bank Details (For Franchise Registration Fee):</span></b></br>

                    <ol style="margin-left: 0;list-style:none">
                        <li style="margin-top:15px"><b>Account Holder Name:</b><?= $bankDetails['beneficiary_name'] ?></li>
                        <li style="margin-top:15px"><b>Bank Name:</b><?= $bankDetails['bank_name'] ?></li>
                        <li style="margin-top:15px"><b>Account Number:</b><?= $bankDetails['account_no'] ?></li>
                        <li style="margin-top:15px"><b>IFSC code:</b><?= $bankDetails['ifsc_code'] ?></li>
                        <li style="margin-top:15px"><b>Branch Address:</b><?= $bankDetails['bank_branch'] ?></li>
                    </ol></br>
                    All payments must be made exclusively to the above-mentioned official company account within 24
                    hours of receiving the Letter of Intent (LOI).</br></br>
                    Kindly retain the payment receipt, as it will be required for verification and for completing the
                    onboarding and franchise activation process</br></br>
                </p>
                </td>
            </table>
        </div>
        <div class="footer">
            <table style="width: 100%;">
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        GST No29AACCF6368D1ZI
                    </p>
                </td>
                <td style="width: 50%;">
                    <p style="font-size: 16px;">
                        CIN: U74900KA2015PTC082263
                    </p>
                </td>
            </table>
        </div>
    </div>


</body>
</html>