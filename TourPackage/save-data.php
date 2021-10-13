<?php
    echo "Hello po";
    session_start();
    echo "<br><b>Account Number: </b>";
    echo $aNumber = $_SESSION['tcode'];
    echo "<br><b>Account Name: </b>";
    echo $aName = $_SESSION['accountname'];
    echo $contact = $_SESSION['contactnum'];
    echo $email = $_SESSION['contactemail'];
    echo $locationName = $_SESSION['location'];
    echo $bookDay = $_SESSION['bookdate'];
    echo $tAdult = $_SESSION['tadult'];
    echo $tChild = $_SESSION['tchild'];
    echo $tHeadCount = $_SESSION['theadcount'];
    echo $guestNames = $_SESSION['guests'];
    echo $Total = $_SESSION['pay'];
    echo $Package = $_SESSION['package'];
    echo $Note = "No Remarks";
    $_SESSION['getacnum'] = $aNumber;

    include('../Config/config.php');
    
    //getting location code
    $res = mysqli_query($connection,"SELECT * from tour_outdoor_adventure_1 where location_adv_name = '$locationName' ");
    $r = mysqli_fetch_assoc($res);
    $locationCode = $r['location_adv_code']; 
    
    
    $result1 = mysqli_query($connection,"INSERT INTO customers_detail(account_number, account_fullname, contact_number, email, guest_adult, guest_child, guest_total_headcount, guestlist, checkin_date, checkout_date, note, package_availed, itineraries_acquired, location_code, amount_paid, book_status) VALUES('$aNumber','$aName','$contact','$email','$tAdult','$tChild','$tHeadCount','$guestNames','$bookDay','0000-00-00','$Note','$Package','$locationName','$locationCode','$Total','BOOKED')");
    echo "<script>window.location.href='tour-package-success.php'</script>";
?>