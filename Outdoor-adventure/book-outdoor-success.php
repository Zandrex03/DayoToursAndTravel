
<?php
  session_start();
  include('../Config/config.php');
  echo $transacCode = $_SESSION['getacnum'];
  $result = mysqli_query($connection,"SELECT * FROM customers_detail where account_number='$transacCode'");
  $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="outdoor-adventures.css">
    <title>Booking Successfull | Dayo</title>
    <script text="text/javascript">
        window.history.forward();
    </script>
</head>
  <style>
      <?php
          include '../NavigationBar/style.css';
      ?>
      <?php
          include '../Footer/style.css';
      ?>

      body {
          background: #EBEBEB;
      }
    </style>
<body>
    <?php
       include '../NavigationBar/navbar.php';
    ?> 
    
    <div class="main-container5">
      <div class="svg-center">
        <div class="wrapper">
            <!-- <i class="fas fa-check-circle" id="check-design"></i> -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                    C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                </svg>
        </div>
      </div>
       <h1 class="successful-title">Booking Successfully</h1>
       <h2 class="transaction-title">Here is your Transaction Code :</h2>
       <p class="transaction-detail">You will need it to track your booking status</p>
       <div class="t-code-center">
            <?php
               echo "<input id='t-code' class='tcode' value=$transacCode></input>";
            ?>
       </div>

       <div class="copy-btn-center">
          <button id="copy-btn" class="copy-btn" onclick="copyClick()">Copy the code</button>
       </div>
        
       <div class="book-details-container">
            <div class="book-status-container">
                <div class="book-details-line"></div>
                <?php
                    echo "<h2>BOOK STATUS :</h2>";
                    echo "<div class='center'><button class='copy-btn-center2'>".$row['book_status']."</button></div>";
                    $cancelButtonBool = $row['book_status'];
                    echo "<br><div class='book-details-line'></div>";
                ?>
            </div>
            <h2>Travel Details</h2>
            <div class="book-details-line-top"></div>
            <div class="book-details-content">
                <?php
                    echo"<img src='assets/img-outdoor-adv/".$row['location_code']."/a.jpg' class='book-left-img'>";
                    echo "<div class='success-book-details'>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Travel Type :  </span><span class='book-success-data loc-type'>". $row['package_availed'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Location Code :  </span><span class='book-success-data loc-code'>". $row['location_code'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Location :  </span><span class='book-success-data loc'>". $row['itineraries_acquired'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail book-date'>Your book date :  </span><span class='book-success-data loc-date'>". $row['checkin_date'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'>";
                            echo "<span class='book-success-detail guest'>Guests : </span><span class='book-success-data success-guest'>". $row['guest_adult']." Adults</span>";
                            echo "<span class='book-success-data'>". $row['guest_child']." Children</span>";
                        echo "</div>";
                    echo "</div>";
                ?>
            </div>
            <div class="book-details-line"></div>
            <h2>Personal Details</h2>
            <div class="book-details-content">
                <?php
                    echo "<div class='success-book-details2'>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Account Name :   </span><span class='book-success-data loc-type'>" .$row['account_fullname'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Account Number :  </span><span class='book-success-data loc-number'>". $row['account_number'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Contact Number :  </span><span class='book-success-data loc-contact'>". $row['contact_number'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail book-date'>Contact Email Address :  </span><span class='book-success-data loc-email'>". $row['email'];
                        echo "<br></span></div>";
                    echo "</div>";
                ?>
            </div>
            <div class="book-details-line"></div>
            <h2>Guest Details</h2>
            <div class="book-details-content">
                <?php
                    echo "<div class='success-book-details2'>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Total Number of Guests :   </span><span class='book-success-data loc-type'>" .$row['guest_total_headcount'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Number of Adult Attendee :  </span><span class='book-success-data loc-adult'>". $row['guest_adult'];
                        echo "<br></span></div>";
                        echo "<div class='lcode-wrapper'><span class='book-success-detail'>Number of Child Attendee :  </span><span class='book-success-data loc-child'>". $row['guest_child'];
                        echo "<br></span></div>";
                    echo "</div>";
                ?>
            </div>
            <div class="book-details-line"></div>
            <h2>Guest List</h2>
            <div class="book-details-content">
                <?php
                    echo "<div class='success-book-details2'>";
                        $gL = $row['guestlist'];
                echo str_replace("|", "<br>", $gL);
                    echo "</div>";
                ?>
            </div>
            <div class="book-details-line"></div>
            <h2>Payment Details</h2>
            <div class="book-details-content">
            <?php
                echo "<div class='success-book-details2'>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail'>Date and Time of Transaction :  </span><span class='book-success-data loc-time-date'>". $row['timestamp'];
                    echo "<br></span></div>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail'>Reference Number :  </span><span class='book-success-data loc-code2'>". $row['account_number'];
                    echo "<br></span></div>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail'>Amount Paid :  </span><span class='book-success-data loc-paid'>₱". $row['amount_paid'];
                    echo "<br></span></div>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail book-date'>Payment Gateway Used :  </span><span class='book-success-data loc-date'>". $row['payment_gateway'];
                    echo "<br></span></div>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail book-date'>Accomodated by :  </span><span class='book-success-data loc-accomodate'>". "System";
                    echo "<br></span></div>";
                echo "</div>";
            ?>
        </div>
        <div class="book-details-line"></div>
        <h2>Additional Remarks</h2>
        <div class="book-details-content">
            <?php
                echo "<div class='success-book-details2'>";
                    echo "<div class='lcode-wrapper'><span class='book-success-detail'>Note from the Agent :  </span><span class='book-success-data loc-code2'>". $row['note'];
                    echo "<br></span></div>";
                echo "</div>";
            ?>
        </div>
        <div class="book-details-line"></div>
        <div class="print-btn-container">
           <button id='copy-btn' class='print-btn'><a href='../PrintReport/print-invoice.php' target='_blank'>Print a Copy</a></button>
        </div>
       </div>
    </div>


    <div class="tours-section">
           <h3 class="tour-title">Most Popular</h3>
           <div class="tour-container">
               <div class="tour-content">
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                        <img class="img" src="../landingPage/assets/mtBalagbag2.jpg" alt="Mt. Balagbag">
                        <div class="tour-details-wrapper" onclick="window.location.href='http:/DayoToursTravelWebsite2.1/Outdoor-adventure/book-outdoor-2.php?sel=Mount+Balagbag'">
                            <div class="details-wrapper">
                                <h5>Mt Balagbag</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                        <img class="img" src="../landingPage/assets/grotto.jpg" alt="Our lady of Lourdes Grotto">
                        <div class="tour-details-wrapper">
                            <div class="details-wrapper">
                                <h5>Our lady of Lourdes Grotto</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                   <div class="tour-wrapper">
                     <div class="tour-content-wrapper">
                            <img class="img" src="../landingPage/assets/pacific.jpg" alt="Pacific Wave Resort">
                        <div class="tour-details-wrapper">
                            <div class="details-wrapper">
                                <h5>Pacific Wave Resort</h5>
                                <div class="review-rating">
                                    <div class="stars-wrapper">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star star-5"></i>
                                        4.5
                                    </div>
                                    <span>Review: 3 review/s</span>
                                </div>
                                <div class="arrow">
                                   <i class="fas fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
           </div>
        </div>

    <?php
        include '../Footer/footer.php';
    ?>

    <script src="confetti.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
    <script>
    
        const start = () => {
            setTimeout(function() {
                confetti.start()
            }, 100); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
        };

        //  Stop

        const stop = () => {
            setTimeout(function() {
                confetti.stop()
            }, 3000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
        };

        start();
        stop();

                
        //     tooltip for succes page tippy.js

        tippy('#copy-btn', {
        content: "Copied!",
        placement: "right",
        animation: "scale-extreme",
        trigger: "click",
        });


        // copy code
        const tCode = document.querySelector("#t-code");
        function copyClick(){
            tCode.select();
            tCode.setSelectionRange(0, 99999); 
            document.execCommand("copy");
        }

    </script>
</body>
</html>









