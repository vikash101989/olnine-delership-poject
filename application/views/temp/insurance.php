<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Removed Tailwind CSS link -->
    <title>Insurance</title>
    <style>
      *{
        padding: 0;
        margin: 0;
      }
        @font-face {
          font-family: "MyCustomFont";
          src: url('<?php echo base_url('assets/template/NimbusRoman.ttf'); ?>') format("truetype");
        }
        body {
            font-family: "MyCustomFont","Times New Roman", Times, serif;
        }
        .container {
            width: 100%;
            max-width: 768px;
            margin: 0 auto;
            padding: 0 1rem;
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
        .header-table {
            width: 100%;
            margin-bottom: 1rem;
        }
        .header-table td {
            vertical-align: top;
        }
        .header-logo {
            width: 130px;
            height: auto;
        }
        .section-title {
            color: #7f1d1d;
            font-weight: bold;
            font-size: 1.25rem;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
        .note-red {
            background: #7f1d1d;
            color: #fff;
            padding: 0.25rem;
        }
        .my-4 { margin-top: 1rem; margin-bottom: 1rem; }
        .my-6 { margin-top: 1.5rem; margin-bottom: 1.5rem; }
        .my-2 { margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .text-xl { font-size: 1.25rem; }
        .font-bold { font-weight: bold; }
        .underline { text-decoration: underline; }
        .list-decimal { list-style-type: decimal; margin-left: 1.5rem; }
        .list-disc { list-style-type: disc; margin-left: 1.5rem; }
        .pl-6 { padding-left: 1.5rem; }
        .table-sign {
            width: 100%;
            margin-top: 2rem;
        }
        .table-sign td {
            vertical-align: top;
            padding-right: 1.5rem;
        }
        @media print {
          body::before {
            content: "";
            position: fixed;
            top: 50%;
            left: 50%;
            width: 500px;
            height: 500px;
            background: url('../assets/watermark.png') no-repeat center;
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
    <div class="container" style="margin-top:2rem;">
        <!-- header -->
        <p class="text-xl">Aadhar Credit Pvt Ltd</p>
        <table class="header-table">
            <tr>
                <td style="width:50%"></td>
                <td style="width:50%; text-align:right;">
                    <img src="<?php echo base_url('fronted'); ?>/website/Images/logo.webp" alt="logo" class="header-logo"/>
                    <p class="text-xl">Date: <?php echo date('d/m/Y'); ?></p>
                </td>
            </tr>
        </table>
        <!-- salutation -->
        <div>
            <p class="font-bold" style="margin:0;">Dear,</p>
            <p class="font-bold" style="margin:0;"><?php echo $application['name']; ?></p>
            <p>Your phone no is <?php echo $application['mobile']; ?>.</p>
            <p>Your email is <?php echo $application['email']; ?></p>
            <p>Your account number is <?php echo $application['bank_account']; ?></p>
            <p>Your Loan Amount Rs. <?php echo $application['loan_amount']; ?></p>
            <p class="my-6">
                Your transaction failed, and loan insurance is under Process, please complete the<br>
                <span class="font-bold">
                    insurance charge of Rs. 5,900.00.
                </span>
                This payment is fully refundable within 10 minutes.</p>
        </div>
        <div class="my-4">
            <p class="note-red">Aadhar Credit Loan Protect Insurance (Individual) - Policy Wording</p>
        </div>


            <div>
                <h1 class="section-title font-bold text-xl">1. Operative Clause</h1>
                <p class="my-4"> 
                    Aadhar Credit Pvt. Ltd. (We, Our or Us) will provide the insurance described in this
                    Policy and any endorsements thereto for the Insured Period as defined in this Policy, to
                    the Insured Persons detailed in the Policy Schedule and in Mudara upon the statements
                    contained in the Proposal and Declaration Form filled and signed by the Policyholder,
                    which shall be the basis of this Policy and are deemed to be incorporated herein in return
                    for the payment of the required premium when due and compliance with all applicable
                    provisions of this Policy.
                </p>
                <p class="my-4">
                    The insurance provided under this Policy is only with respect to such and so many of the
                    benefits as are indicated by a specific amount set opposite in the Policy Schedule.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">2. Definitions</h1>
                <p class="my-4"> 
                    This Policy, the Schedule and any Clauses thereon shall be considered one document and
                    any word or expression to which a specific meaning has been attached in Definitions
                    bears that specific meaning wherever it appears in this Policy
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Accident</h1>
                <p class="my-4">
                    An accident is a sudden, unforeseen and involuntary event caused by external, visible &
                    violent mean.
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Bank / Financial Institution</h1>
                <p class="my-4">
                    Means a banking company which transacts the business of banking in India or abroad and
Financial Institution engaged in activity of providing loans and duly reco gnised by
appropriate authority.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Civil War</h1>
                <p class="my-4">
                    means war, whether declared or not, or any warlike activities, including use of military
force by any sovereign nation to achieve economic, geographic, nationalistic, political,
racial, religious or other ends.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Dependent child</h1>
                <p class="my-4">
                    Means a child (natural or legally adopted), who is financially dependent on the primary
insured or proposer and does not have his/her independent source of income. Further, the
age of the child must be between 5 years to 21 years and who shall be unmarried.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Disclosure to information norm</h1>
                <p class="my-4">
                    The policy shall be void and all premium paid thereon shall be forfeited to the Company
in the event of misrepresentation, miss-description or non-disclosure of any material fact.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Grace Period</h1>
                <p class="my-4">
                    Grace period means the specified period of time immediately following the premium due
date during which a payment can be made to renew or continue a policy in force without
loss of continuity benefits such as waiting periods and coverage of preexisting diseases.
Coverage is not available for the period for which no premium is received.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Home / Insured Premises / Property</h1>
                <p class="my-4">
                    Means the building of standard construction at the address mentioned in the Schedule,
which has been constructed or purchased out of the home loan being covered under this
Policy.
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Loan EMI</h1>
                <p class="my-4">
                    Means the equated monthly instalment payable by the Insured to a financial institution
for the loan
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Hospital</h1>
                <p class="my-4">
                    A hospital means any institution established for in-patient care and day care treatment of
illness and/or injuries and which has been registered as a hospital with the local
authorities under Clinical Establishments (Registration and Regulation) Act 2010 or
under enactments specified under the Schedule of Section 56(1) and the said act Or
complies with all minimum criteria as under:
1. has qualified nursing staff under its employment round the clock;
2. has at least 10 in-patient beds in towns having a population of less than 10,00,000 and
at least 15 inpatient beds in all other places;
3. has qualified medical practitioner(s) in charge round the clock;
4. has a fully equipped operation theatre of its own where surgical procedures are carried
out;
5. maintains daily records of patients and makes these accessible to the insurance
company’s authorized personnel;
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Illness</h1>
                <p class="my-4">
                    Illnessmeans a sickness or a disease or pathological condition leading to the impairment
of normal physiological function and requires medical treatment.
                </p>
                <p>
                    1. Acute condition - Acute condition is a disease, illness or injury that is likely to
                    respond quickly to treatment which aims to return the person to his or her state of health
                    immediately before suffering the disease/ illness/ injury which leads to full recovery
                </p>
                <p>
                    2.Chronic condition- A chronic condition is defined as a disease, illness, or injury that
                    has one or more of the following characteristics: 1. it needs ongoing or long-term
                    monitoring through consultations, examinations, check-ups, and /or tests 2. it needs
                    ongoing or long-term control or relief of symptoms 3. it requires rehabilitation for the
                    patient or for the patient to be specially trained to cope with it 4. it continues indefinitely
                    5. it recurs or is likely to recur
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Injury</h1>
                <p class="my-4">
                    Injury means accidental physical bodily harm excluding illness or disease solely and
directly caused by external, violent, visible and evident means which is verified and
certified by a Medical Practitioner.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Insurable/Insured event</h1>
                <p class="my-4">
                    Means an event, loss or damage for which the Insured is entitled to benefit/s under this
Policy.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Insured/ Named Insured</h1>
                <p class="my-4">
                    Insured means the persons, or his Family members, named in the Schedule.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Medical Practitioner</h1>
                <p class="my-4">
                    Medical Practitioner means a person who holds a valid registration from the Medical
Council of any State Aadhar Credit or Medical Council of India or Council for Indian
Medicine or for Homeopathy set up by the Government of India or a State Government
and is therebyentitled to practice medicine within its jurisdiction; and is acting within its
scope and jurisdiction of license.
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Notification of Claim</h1>
                <p class="my-4">
                    Notification of claim means the process of intimating a claim to the insurer or TPA
through any of the recognized modes of communication.
                </p>
            </div>



            <div>
                <h1 class="section-title font-bold text-xl">Outstanding e loan</h1>
                <p class="my-4">
                    Means the amount outstanding on any given day to a financial institution of the principal
loan and interest thereon payable by the Insured.
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Permanent total Disability</h1>
                <p class="my-4">
                    A disability condition certified by Civil Surgeon of Government hospital stating the
continuous and permanent:
                </p>
                <ul class="list-disc pl-6">
                    <li>loss of the sight of both eyes</li>
                    <li>physical separation of or the loss of ability to use both hands or both feet</li>
                    <li>physical separation of or the loss of ability to use one hand and one foot.</li>
                    <li>loss of sight of one eye and the physical separation of or the loss of ability to use
either one hand or one foot</li>
                </ul>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Policy</h1>
                <p class="my-4">
                    Policy document is a legal document which is an evidence of the contract of Insurance
between the Proposer/Insured and the Insurer and inter Alia, includes the Proposal Form,
Declaration Form, the Policy Schedule, Company’s covering letter to the Insured, any
enrolment forms, endorsements, papers or riders attaching to or forming part hereof,
issued either at the inception or during the policy period.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Policy period/Period of insurance</h1>
                <p class="my-4">
                    The period between and including the start and end dates shown in the schedule
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Pre existing disease/Condition</h1>
                <p class="my-4">
                    Pre-Existing Disease means any condition, ailment or injury or related condition(s) for
which there were signs or symptoms, and / or were diagnosed, and / or for which medical
advice / treatment was received within 48 months prior to the first policy issued by the
insurer and renewed continuously thereafter.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Renewal</h1>
                <p class="my-4">
                    Renewal means the terms on which the contract of insurance can be renewed on mutual
consent with a provision of grace period for treating the renewal continuous for the
purpose of gaining credit for preexisting diseases, time-bound exclusions and for all
waiting persiods.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Schedule</h1>
                <p class="my-4">
                    Means the document attached na me so and to and the forming part of this Policy
mentioning the details of the Insured/ Insured Person/s, the Sum Insured, the period and
the limits to which benefits under the Policy are subject to
                </p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">Sum Insured</h1>
                <p class="my-4">
                    Means the sum as specified in the schedule, which sum represents the Company's
maximum liability for any or all claims under this Policy during the Policy period.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Surgery or Surgical procedure</h1>
                <p class="my-4">
                    Surgery or Surgical Procedure means manual and / or operative procedure (s) required for
treatment of an illness or injury, correction of deformities and defects, diagnosis and cure
of diseases, relief from suffering and prolongation of life, performed in a hospital or day
care centre by a medical practitioner.
                </p>
            </div>


            <div>
                <h1 class="section-title font-bold text-xl">Terrorism</h1>
                <p class="my-4">
                    Means activities against persons, organizations or property of any nature:
                </p>
                <p class="my-4">1. That involve the following or preparation for the following:</p>
                <ol class="list-decimal pl-6 my-4">
                    <li>Use or threat of force or violence; or</li>
                    <li>Commission or threat of a dangerous act; or</li>
                    <li>Commission or threat of an act that interferes with or disrupts an electronic,
                        communication, information or mechanical system; and
                    </li>
                </ol>
                <p class="my-4">2. When one or both of the following applies:</p>
                <ol class="list-decimal my-4 pl-6">
                    <li>
                        The effect is to intimidate or coerce a government or the civilian population or any
                        segment thereof, or to disrupt any segment of the economy; or</li>
                    <li>
                        It appears that the intent is to intimidate or coerce a government, or to further
                        political, ideological, religious, social or economic objectives or to express (or
                        express opposition to) a philosophy or ideology.
                    </li>
                </ol>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">You, Your, Yourself/ Your Family</h1>
                <p class="my-4">Name in the schedule means the person or persons that we insure as set out in the
 Schedule.</p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">We, Our, US, Ours, The company</h1>
                <p class="my-4">Means the Mudara General Insurance Company Limited.</p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">3. PRODUCT INFORMATION</h1>
                <h1 class="section-title font-bold text-xl">Eligibility Criteria:</h1>
                <p class="my-2">This product may be obtained by any Indian Citizen / FI’s / Banks.</p>
                <h1 class="section-title font-bold text-xl">Age Limit:</h1>
                <p class="my-2">To be eligible to be covered under the Policy or get any benefits under the Policy, the
Insured should have attained the age of at least 18 years and shall not have completed the
age of 65 years on the date of commencement of the Policy Period as applicable</p>
            </div>

            <div>
                <h1 class="section-title font-bold text-xl">4. Duration of Coverage:</h1>
                <ol class="list-decimal my-4 pl-6">
                    <li>The policy can be opted for 1, 2 or 3 years.</li>
                    <li>The Cover under the policy commences from date of premium receipt.</li>
                    <li>The cover under this Policy, for the specific Insured, shall terminate in the event of
a claim under any section of the policy in respect of that insured becoming
admissible and accepted by the Company and only upon full sum insured being
payable to the insured except under loss of job.</li>
                    <li>Critical Illness and Unemployment cover operates after a three month waiting period
from inception of the policy.</li>
                </ol>
            </div>

            <!-- stamps and images -->
            <!-- <div class="grid grid-cols-4"> -->
            <table class="table-sign">
            <tr>
                <td style="width:30%; vertical-align:center;">
                    <p class="text-xl">Thanks & Regards,</p>
                </td>
                <td style="width:20%; vertical-align:top;">
                    <img src="<?php echo base_url('assets/img/seal.png') ?>" alt="seal" style="width:120px; height:auto;" />
                </td>
                <td style="width:30%; vertical-align:top; text-align:center;">
                    <img src="<?php echo base_url('assets/img/signature.png') ?>" alt="signature" style="width:100px; height:auto;" />
                    <p>(Mr. Sangeet Nair)</p>
                    <p>Finance Manager</p>
                </td>
                <td style="width:20%; vertical-align:top;">
                    <img src="<?php echo base_url('assets/img/qr.png') ?>" alt="qr" style="width:90px; height:auto;">
                </td>
            </tr>
        </table>
    </div>
</body>
</html>