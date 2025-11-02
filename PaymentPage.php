

<?php
include_once("headerFooter/header.php");
?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/PaymentPageCSS.css';
        document.head.appendChild(css);
    });
</script>
    
      <div class="wrapper">
            
            <form action="paymentprocess.php" method="post" enctype="application/x-www-form-urlencoded"  onsubmit="return validateForm()"  >
    
                <h1>
                    Payment Method
                </h1>
    
                
                <div class="payment-checkbox">
                    <div class="pmnt">
                        <img src="assets/PaymentPageAssets/icons8-visa-card-100.png">
                    </div>
                    <div class="pmnt">
                    <label class="payment-text">Visa Card</label>
                    </div>
                    <div class="pmnt">
                        <input type="radio" value="Visa" name="paymentcheckbox" class="radio" id="cc" required>
                    </div>
                </div>
                    
                
    
    
                <div class="payment-checkbox">
                    <div class="pmnt" >
                        <img src="assets/PaymentPageAssets/master.png">
                    </div>
                    <div class="pmnt">
    
                        <label class="payment-text">Master card</label>
                    </div>
                    <div class="pmnt">
    
                        <input type="radio" value="Master" name="paymentcheckbox" class="radio" id="payoneer" required>
                    </div>
                    
                </div>
    
    
                <div class="payment-checkbox">
                    <div class="pmnt" >
                        <img src="assets/PaymentPageAssets/AMEX.png">
                    </div>
                    <div class="pmnt">
                        <label class="payment-text">AMEX</label>
                    </div>
                    <div class="pmnt">
                        <input type="radio" value="Amex" name="paymentcheckbox" class="radio" id="payp" required>
                    </div>
                   
                    
                    
                </div>
    
                <hr>
                
                <div class="lbl">
                    <label class="lbl">Cardholder name</label><br>
                    <input type="text" placeholder="Enter Name Here" class="inpt"  id="idname" maxlength="30" name="cardholdername">
                    <span id="error-name"> </span>
                </div>
                
                <div class="lbl">
                <label class="lbl">Card number</label><br>
                <input type="text" placeholder="0000 0000 0000 0000" class="inpt" minlength="16" maxlength="16" id="card-number" name="cardnumber">
                <span id="error-card"> </span>
                </div>
    
                <div class="cvv">
                    <div class="cvvin">
                        <label>Expiration date</label> <br>
                        <input type="text" placeholder="MM/YY" class="excvv" maxlength="5" id="exdate" name="expiredate">
                        <span id="ex-error" ></span>
                    </div>
                    <div class="cvvin" id="cvvin">
                        <label>CVV</label><br>
                        <input type="password" placeholder="***" class="excvv" maxlength="3" id="cvvnum" minlength="3" name="cvv">
                        <span id="cvv-error"></span>
                    </div>
                </div>
                
               
    
                
                
    
                <br><div class="lbl">
                    <input type="checkbox" class="terms" name="terms">
                    <label class="lbl">Save card information for future payments</label>
                </div>
    
                <hr>
                <div class="btns">
                    
                    <input type="reset" class="reset">
                    <input type="submit" class="pay" style="text-decoration: none;"  value="Pay Now" name="submitbtm" >
                    
                </div>
                
               
    
            </form>
            
    
    
    
        </div>
      
   
        



    <!-- FOOTER SECTION -->
    
    <?php
    include_once("headerFooter/footer.php");
    ?>