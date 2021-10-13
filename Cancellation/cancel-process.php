<?php
    session_start();
    echo $tcode = $_SESSION['tcode'];
    echo $reason = $_POST['reason'];
    $_SESSION['ref'] = $tcode;
    include('../Config/config.php');

    $result1 = mysqli_query($connection, "INSERT INTO cancellation_requests (cancelreq_status,account_number,brief_reason) VALUES('PENDING CANCELLATION','$tcode','$reason')");
    $result2 = mysqli_query($connection, "UPDATE customers_detail SET book_status= 'PENDING CANCELLATION', note='Your cancellation queue is currently on process, please wait.' WHERE account_number='$tcode'");
    echo "<script>window.location.href='../Track/track-2.php'</script>";
?>