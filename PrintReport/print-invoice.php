<?php
    session_start();
    $accountnumber = $_SESSION['number'];
  
    include('../Config/config.php');
    $result = mysqli_query($connection,"SELECT * FROM customers_detail where account_number='$accountnumber'");
    $row = mysqli_fetch_assoc($result);
    require('../fpdf184/fpdf.php');

    $gl = $row['guestlist'];
    $pdf = new FPDF();

    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B',12);

    
    $pdf -> Cell(180,20, "DAYO Travel And Tours",0,1,"C");
    $pdf -> Cell(180,5,"www.dayo.com",0,1,"C");
    $pdf -> Cell(180,5,"Company Address",0,1,"C");
    $pdf -> Cell(180,5,"Phone Number",0,1,"C");
    $pdf -> Cell(180,5,"Contact email",0,1,"C");
    $pdf -> Cell(180,5,"",0,1,"C");
    $pdf -> Cell(180,20, "Transaction Receipt",0,1,"C");
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"TRACKING RECORD",0,1);
    $pdf -> Cell(58,5,"Transaction's Timestamp:  ".$row['timestamp'],0,1);
    $pdf -> Cell(58,5,"Account Number:  ".$accountnumber,0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"PERSONAL DETAILS",0,1);
    $pdf -> Cell(58,5,"Account Name: ".$row['account_fullname'],0,1);
    $pdf -> Cell(58,5,"Contact Number: ".$row['contact_number'],0,1);
    $pdf -> Cell(58,5,"Contact Email: ".$row['email'],0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"PAYMENT DETAILS",0,1);
    $pdf -> Cell(58,5,"Amount Paid: ".$row['amount_paid']. " PHP/Pesos",0,1);
    $pdf -> Cell(58,5,"Payment Gateway Used: PAYPAL",0,1);
    $pdf -> Cell(58,5,"Accomodated by: SYSTEM",0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"TRAVEL DETAILS",0,1);
    $pdf -> Cell(58,5,"Travel Type:     ".$row['package_availed'],0,1);
    $pdf -> Cell(58,5,"Location/s:    ".$row['itineraries_acquired'],0,1);
    $pdf -> Cell(58,5,"Location Code:     ".$row['location_code'],0,1);
    $pdf -> Cell(58,5,"Book Date:     ".$row['checkin_date'],0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"GUEST DETAILS",0,1);
    $pdf -> Cell(58,5,"Number of Adults:     ".$row['guest_adult'],0,1);
    $pdf -> Cell(58,5,"Number of Children:     ".$row['guest_child'],0,1);
    $pdf -> Cell(58,5,"Total Number of Attendees: ".$row['guest_total_headcount'],0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"GUEST OFFICIAL MASTERLIST",0,1);
    $pdf -> Cell(58,5,$gl,0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"",0,1);
    $pdf -> Cell(58,5,"__________________________________________________________________________",0,1);
    $pdf -> Cell(58,5,"Printed on ".date("Y/m/d h:i:sa"),0,0);
    $pdf -> Cell(120,5,"**This is a system generated document.",0,1,"R");
    
    $pdf -> Output();
?>
<head><title>Print Invoice</title></head>