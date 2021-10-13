<?php
    session_start();
    include('../Config/config.php');
    $transactCode = $_SESSION['forCancel'];
    $_SESSION['tcode'] = $transactCode;
    $result = mysqli_query($connection,"SELECT * FROM customers_detail where account_number='$transactCode'");
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<?php

    echo "<h2>Cancellation Form</h2><br><br>";
    echo "<b>Account Number: </b>";
    echo $row['account_number'];
    echo "<br>";
    echo "<b>Account Name: </b>";
    echo $row['account_fullname'];
    echo "<br>";
    echo "<br>";
    echo "<b>Contact Number: </b>";
    echo $row['contact_number'];
    echo "<br>";
    echo "<b>Email: </b>";
    echo $row['email'];
    echo "<br>";
    echo "<br>";
    echo "<b>Number of Adult: </b>";
    echo $row['guest_adult'];
    echo "<br>";
    echo "<b>Number of Child: </b>";
    echo $row['guest_child'];
    echo "<br>";
    echo "<b>Total Head Count: </b>";
    echo $row['guest_total_headcount'];
    echo "<br>";
    echo "<br>";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I want to cancel my trip</title>
    <script>
        function myFunction() {
        confirm("Be aware that your CANCEL REQUEST will be attained as status QUEUE, subjected to review and contacting you regarding your cancel concern. Kindly wait for accomodation within 24 - 48hours. ");
        confirm("Are you sure do you want to proceed?");
        confirm("Success");

        }
</script>
</head>
<body>
        
        <form action="cancel-process.php" method="post">
           <b>Reason for you cancellation</b><br>
           <i>Please explain briefly</i><br>
           <textarea name="reason" id="" cols="30" rows="10" required></textarea><br>
           <input type="checkbox" name="" id="" required> I agree to Terms of Service about booking cancellation. 
           <br> 
           <input type="submit" value="Submit" onclick="myFunction()">
        </form>
</body>
</html>