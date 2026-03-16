<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Loan Calculator</h2>
                    <ul>
                        <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li>Loan Calculator</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Loan Calculator Area -->
<section class="loan-calculator ptb-100">
   <div class="container">
      <div class="calculator-form">
         <div class="text">
            <span>Loan Calculator</span>
            <h3>How much do you need?</h3>
         </div>
         <div class="emi-calculation-wrap">
            <div id="border">
               <!--border-->
               <div id="emi-calculation">
                  <!--calculation part-->
                  <!--<h2 id="title" class="mb-4">EMI Calculator</h2>-->
                  <div class="section">
                     <!--loan amount with input-->
                     <label id="loanamount" class="label">Loan Amount</label>
                     <input type="number" class="input" id="value1" placeholder="Enter Loan amount.."></input>
                  </div>
                  <!--loan amount with input closing-->
                  <div class="section">
                     <!--interest rate with input-->
                     <label id="interestrate" class="label">Interest Rate (%)</label>
                     <input type="number" class="input" id="value2" placeholder="Enter IR per year.."></input>
                  </div>
                  <!--interest rate with input closing-->
                  <div class="section">
                     <!--loan terms with input-->
                     <label id="loanduration" class="label">Loan Duration (Months)</label>
                     <input type="number" class="input" id="value3" placeholder="Enter loan duration.."></input>
                  </div>
                  <!--loan terms with input closing-->
                  <div class="submit calculator-btn">
                     <!--button-->
                     <button type="submit" id="calc" class="btn-one" onclick="calculation()">Calculate</button>
                     <button type="submit" id="reset" class="btn-two" onclick="reset()">Reset</button>
                  </div>
                  <!--button closing-->
               </div>
               <!--Calculation part closing-->
               <div id="emi-output">
                  <h3 class="text-center">Result</h3>
                  <div class="result">Monthly Interest: <span id="monthly-interest"></span>
                  </div>
                  <div class="result">Monthly Payment: <span id="monthly-payment"></span>
                  </div>
                  <div class="result">Total Repayment: <span id="total-repayment"></span>
                  </div>
                  <div class="result">Total Interest Cost: <span id="total-interest"></span>
                  </div>
                  <!--button closing-->  
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Loan Calculator Area -->