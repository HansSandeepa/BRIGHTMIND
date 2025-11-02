<?php

include_once("headerFooter/header.php");
?>

        <!-- do not delete this element -->


    <div  class="wrapper">
        <img class="animatinggif" src="assets/PaymentPageAssets/Animation - 1744784399993.gif">
        <h2 class="paysuc">Payment Successful!</h2>
        <p class="paysucp">Your payment has been completed.</p>
        <button class="finish" onclick="window.location.href = './index.php'">Finish</button>
        <p style="margin-bottom: 0px;margin-top: 0;">Your data has been <b>saved </b>to our system,Do you want to delete them</p>


        <div style="display: grid; grid-template-columns: auto auto; gap: 10px; justify-content: center;margin-top: 0px;">
         <button class="dataremove" onclick="window.location.href='paymentdelete.php'">Yes</button>
        <button class="dataremove" onclick="window.location.href = './index.php'" >No</button>
        </div>
       

    </div>
    




    <!-- FOOTER SECTION -->
    
<?php
    include_once("headerFooter/footer.php");
?>
    



</body>

</html>