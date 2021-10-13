<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Card</title>
    <style>
        .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.hidden {
  display: none;
}
</style>
<script>
    setTimeout(function(){
        document.getElementById('loader2').style.display = 'none';
        document.getElementById('success-prompt').style.color = 'black';
        document.getElementById('success-prompt').style.display = 'block';
        document.getElementById('next-button').style.visibility = 'visible';
    }, 5000);
 
    function hide(){
        document.getElementById('prompt').style.display = 'none';
        document.getElementById('next-button').style.display = 'none';
    }
</script>
</head>
<body onload="hide()">
<h3>Testing Gift Card</h3>
    <p>Please be aware that the giftcard's amount should be same on the total book amount to pay. More or less are not accepted.</p>
    <form action="" method="post">
        <b>Amount: </b><input type="number" name="amount" id=""><br>
        <b>Serial Key: </b><input type="text" name="serial-key" id=""><br>
        <input type="submit" name = "submit"value="Validate">
    </form>
</body>
</html>


<?php

    if (isset($_POST['submit'])) {
        
        
        $amount = $_POST['amount'];
        $serial = $_POST['serial-key'];

        include('../Config/config.php');
        $result = mysqli_query($connection,"SELECT * FROM payment_gift_cards WHERE amount = $amount AND serial_key = '$serial' AND gc_status = 'A' ");
      
      if (mysqli_num_rows($result) > 0 ){
        session_start();
        $_SESSION['a'] = $amount;
        echo "<div class='loader' id = 'loader2'></div>";
            echo "<b id='success-prompt'style='color:white;'>Validation Success</b>";
            echo "<script>window.location.href='b.php'</script>";
            
      }
      else {
        echo "<div class='loader' id = 'loader'></div>";
        echo "<b id='prompt' style='color:white;'>Invalid</b>";

      }
    }
?>

