<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="outdoor-adventures.css">
    <title>Book Request | Dayo</title>
    <style>
    <?php
        include '../NavigationBar/style.css';
    ?>
    <?php
        include '../Footer/style.css';
    ?>
    </style>
    <script text="text/javascript">
        window.history.forward();
    </script>
</head>
<body>
    <?php
     include '../NavigationBar/navbar.php';
    ?> 
   
   <div class="main-container3">
        <div class="main-content3">
            <?php
                echo "<div class='right-column'>";
                    echo "<div class='right-card'>";
                        echo "<div class='img-wrapper'>";
                          echo"<img src='assets/img-outdoor-adv/".$_SESSION['locationCodeOrig']."/a.jpg' class='right-img'>";
                        echo "</div>";
                        echo "<h4 class='location-title'><span class='right-title'>Location :</span> ". $location=$_POST['location'];
                        echo "</h4>";
                        echo "<h4 class='location-date'><span class='right-title'>Requested Book Date : </span>". $DATE = $_POST['datepicker']."</h4>";
                        echo "<h4 class='guest-right-title right-title'>GUESTS : </h4>";
                        echo "<div class='guest-number'>";
                            echo "<h4 class='adult-number'>Adults : ".$ADULT = $_POST['adult'];
                            echo "</h4>";
                            echo "<h4 class='child-number'>Children : ".$CHILD = $_POST['children'];
                            echo "</h4>";
                        echo "</div>";
                       
                 

                        $TOTALATTENDEES=$ADULT+$CHILD;
                        $TOTAL = $_POST['display2'];
                        echo "<h4 class='total-attendees'><span class='right-title'>Total Number of Attendee/s : </span>". $TOTALATTENDEES;
                        echo " Person/s </h4>";
                        echo "<h4 class='total-amount'><span class='right-title'>Total Amount to pay: </span> ₱". $TOTAL ."</h4>";
                    echo "</div>";
                echo "</div>";
            
                $_SESSION['loc'] = $location;
                $_SESSION['date'] = $DATE;
                $_SESSION['adult'] = $ADULT;
                $_SESSION['child'] = $CHILD;
                $_SESSION['totalatt'] = $TOTALATTENDEES;
                $_SESSION['totalprice'] = $TOTAL;


                echo "<div class='left-column'>";
                    echo "<h1 class='request-title'>Book Request</h1>";
                    echo "<h3 class='guest-direction'>Please input every Guest's Name </h3>";
                    $i=1;
                    $count=2;
                    echo "<form action='book-outdoor-4.php' method='post'>";
                   
                    for($i=1;$i<=$ADULT;$i++)
                    {
                        if($i==1){
                            echo "Account Name : <br>";
                            echo "<input type='text' class='input-name' name='lname' placeholder='Last Name'>";
                            echo "<input type='text' class='input-name' name='fname' placeholder='First Name'>";
                            echo "<input type='text' class='input-name' name='mname' placeholder='Middle Name'>";
                            echo "<h3 class='adult-title'>Adult Guests :</h3>";
                            echo "<i>Include the account name below</i>";
                                echo "<div class='person-in-charge'>";
                                echo "<input type='text' placeholder='Enter Full Name' name='fn[]' required class='input-name'><i>*required</i>";
                            echo "<br></div>";
                            
                        }
                        else{
                        echo "<input type='text' placeholder='Enter Full Name' name='fn[]' class='input-name' required><br>";

                        $count++;
                        }
                    }
                    echo "<h3 class='child-title'>Children Guests:</h3>";
                    for($i=1;$i<=$CHILD;$i++)
                    {
                        echo "<input type='text' placeholder='Enter Full Name'  name='fn[]' required class='input-name'><br>";
                        $count++;
                    }
                
                    

                    echo "<h3 class='contact-title'>Contact Number :</h3>";
                    echo "<input type='text' required placeholder='ex: 09124568778' name='contact' class='input-name contact'>";
                    echo "<h3 class='email-title'>Email Address :</h3>";
                    echo "<input type='email' required name='email' placeholder='Use your active and valid email address' class='input-name email'>";
                    echo "<br>";
                    echo "<h3>Additional Requirements</h3>";
                    echo "<input type='file' id='myFile' name='filename'>";
                    echo "<br><input type='submit' value='Proceed to Payment' class='proceed-btn'>";
                    echo "</form>";
                echo "</div>"  
            ?>
        </div>
    </div>

    <?php
        include '../Footer/footer.php';
    ?>

    <script src="app.js"></script>
</body>
</html>

