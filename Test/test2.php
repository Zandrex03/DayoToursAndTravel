<?php
      $accountnumber = $_POST['accnumber'];
      //echo "<br>";
      $accountname = $_POST['accname'];
      //echo "<br>";
      $refnum = $_POST['accref'];
      //echo "<br>";
      $serialkey = $_POST['accser'];
      //echo "<br>";
      $pin = $_POST['accpass'];
      //echo "<br>";
      $amount = $_POST['amount'];
      //echo "<br>";

      include('../Config/config.php');
      $result = mysqli_query($connection,"SELECT * FROM over_the_counter_payments WHERE account_number = '$accountnumber' AND account_name = '$accountname' AND amount_paid = '$amount' AND referencenumber = '$refnum' AND transaction_key = '$serialkey' AND transaction_key_pin = '$pin' AND queue_status = 'A' ");
      
      if (mysqli_num_rows($result) > 0 ){
            echo "Record Match";
            $result2 = mysqli_query($connection,"UPDATE over_the_counter_payments SET queue_status = 'B' WHERE account_number = '$accountnumber'");
      }
      else {
            echo "No";
      }
?>