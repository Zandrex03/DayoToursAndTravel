<?php
   session_start();
   echo $selected=$_GET['sel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="staycation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <title><?php echo $selected;?> | DAYO PH</title>
    <style>
        <?php
        include '../NavigationBar/style.css';
        ?>
        <?php
            include '../Footer/style.css';
        ?>
        
    </style>
    <style>
.grey {
  color: grey;
}
</style>
    <script text="text/javascript">
        window.history.forward();
    </script>
</head>

    <body onload="add()">
      <?php
      include '../NavigationBar/navbar.php';
      ?>
        <div class="main-container2">
            <?php
                include('../Config/config.php');
                echo '<div class="title-content">';
                    echo "<h2 class='tour-title-2'>";
                    echo $selected=$_GET['sel'];
                    echo "</h2>";
                    
                    $result1 = mysqli_query($connection,"SELECT * FROM tour_hotel_1 where location_adv_name='$selected'");
                    $row1 = mysqli_fetch_assoc($result1);
                    echo "<p class='code2'>"."Location Code: ".$code=$row1['location_adv_code']."</p>";
                    $lcode=$row1['location_adv_code'];
                    $_SESSION['locationCodeOrig'] = "$lcode";
                    $result2 = mysqli_query($connection,"SELECT * FROM tour_hotel_2 where location_code='$lcode'");
                    $row2 = mysqli_fetch_assoc($result2);
                    $result3 = mysqli_query($connection,"SELECT * FROM tour_hotel_3 where location_code='$lcode'");
                    $row3 = mysqli_fetch_assoc($result3);
                    // echo "<head><title>".$selected." | DAYO PH</title></head>";
                echo  "</div>";
                $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
                $foo = $rating;
                for($i=1;$i<=5;$i++){
                    if($i<$rating){
                            echo "<span class='fa fa-star checked'></span>";
                        }
                    else{
                        echo "<span class='fa fa-star grey'></span>";
                        }
                    }
                echo "<p class='rating2'>"."Rating: ".round($foo, 2) ."/5"."</p>";
         
                $temp0=$row1['location_adv_code'];
                         $result4 = mysqli_query($connection,"SELECT count(*) as review_num FROM customers_review where location_code= '$temp0'");
                $row4 = mysqli_fetch_assoc($result4);
                echo "<p class='review2'>"."Review: ".$row4['review_num'] ." review/s </p>";

                echo '<div class="image-box">';
                    echo" <div class='slideshow-container'>
                                <div class='mySlides fade'>
                                <div class='numbertext'>1 / 4</div>
                                <img src='assets/img-staycation/". $row1['location_adv_code']."/a.jpg' style='width:100%' class='slide-img'>
                                </div>

                                <div class='mySlides fade'>
                                <div class='numbertext'>2 / 4</div>
                                <img src='assets/img-staycation/". $row1['location_adv_code']."/b.jpg' style='width:100%' class='slide-img'>
                                </div>

                                <div class='mySlides fade'>
                                <div class='numbertext'>3 / 4</div>
                                <img src='assets/img-staycation/". $row1['location_adv_code']."/c.jpg' style='width:100%' class='slide-img'>
                                </div>

                                <div class='mySlides fade'>
                                <div class='numbertext'>4 / 4</div>
                                <img src='assets/img-staycation/". $row1['location_adv_code']."/d.jpg' style='width:100%' class='slide-img'>
                                </div>

                                <a class='prev' onclick='plusSlides(-1)'><i class='fas fa-chevron-left'></i></a>
                                <a class='next' onclick='plusSlides(1)'><i class='fas fa-chevron-right'></i></a>

                                </div>
                                <br>

                                <div style='text-align:center'>
                                <span class='dot' onclick='currentSlide(1)'></span> 
                                <span class='dot' onclick='currentSlide(2)'></span> 
                                <span class='dot' onclick='currentSlide(3)'></span> 
                                <span class='dot' onclick='currentSlide(4)'></span> 
                        </div>";
                            
                echo  "</div>";


                $total = $row1['booking_fee'];
                
                $discount = $row1['tour_discount_for_kids'];
                if($discount==0)
                {
                    $childprice = $total;
                }
                else
                {
                    $childprice = $total * $discount;
                }

                //querying fully booked
                $datez = array('2021-06-15','2021-06-16','2021-06-17');
                $result6 = mysqli_query($connection,"SELECT * FROM fully_booked_dates where location_code='$lcode'");
                //$row6 = mysqli_fetch_assoc($result6);
                while($row6 = mysqli_fetch_array($result6))
                {
                    $e = $row6['dates'];
                    array_push($datez,$e);
                }

            ?>
            <div class="middle-content-container">
                <div class="right-container">
                    <div class="travel-form-wrapper">
                        <form action='staycation-3.php' method="post">
                            <div class="form-title">
                                <h2>Travel Form Details</h2>
                            </div>
                            <div class="price-wrapper">
                                <h4 class="price-adult"><?php echo $total ?></h4>
                                <h4 class="price-children"><?php echo $childprice?> </h4>
                            </div>
                            <div class="calendar-wrapper">
                                <p class="calendar-title">Travel Dates:</p>
                                <div class="center-div">
                                    <div class="calendar">
                                        <input type="text" id="datepicker" name="datepicker" readonly class="calendar-btn" required>
                                    </div>
                                </div>
                            </div>
                            <div class="guest-wrapper">
                                    <input type="text" id="pri" value="<?php echo $total ?>"readonly style="display: none;"><br>
                                    <input type="text" name="location" value="<?php echo  $selected?>" style="display:none;">
                                    <p class="guest-title">Travel Guest:</p>
                                <div class="guest-counter-wrapper">
                                    <div class="counter-wrapper">
                                        <p class="counter-title">Adult : </p>
                                        <p class="counter-details">(Ages 13 or above)</p>
                                        <div class="counter-box">
                                            <div class="decrement-btn" id="d1">-</div>
                                               <input type="number" name="adult" id="number1" value="1" min="1" max="1000" readonly required class="number1">
                                            <div class="increment-btn">+</div>
                                        </div>
                                    </div>
                                    <div class="counter-wrapper">
                                        <p class="counter-title">Children : </p>
                                        <p class="counter-details">(Ages 12 and below)</p>
                                        <div class="counter-box">
                                            <div class="decrement-btn2" id="d2">-</div>
                                               <input type="number" name="children" id="number2" value="0" min="0" max="1000" readonly class="number2">
                                            <div class="increment-btn2">+</div>
                                        </div>
                                    </div>
                                </div>
                                    <h2 class="total-price" name="display1" id="display1"></h2>
                                    <input type="number" name="display2" id="display2" readonly style="display: none;"><br>
                            </div>
                            <div class="btn-center">
                                <input class="continue-btn" type="submit" value="Continue to book">
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="left-container">
                    <?php
                            
                        echo "<h2 class='left-h2 travel-details-title'>";
                        echo $selected=$_GET['sel'];
                        echo "</h2>";
                        echo "<br><i><b>Description: <br></b></i>";
                        echo "<p class='description-left' style='text-align: justify; text-justify: inter-word;'>".$row1['location_adv_description']."</p>";
                        echo "<br>";
                        echo "<div id='gold' style='text-align: center; border: 3px solid green;'><b><h3>".round($foo, 2)."<h3></b>";
                        echo "<h4>Stars</h4></div>";
                        echo "<p class='description-price'>"."Price for Adult: <b>₱".$total."</b></p>";
                        echo "<p>"."Price for Children:<b> ₱".$childprice."</b></p>";
                        echo "<br>";
                        echo "Travel Type: <b>". $row1['location_type']."</b>";
                        echo "<br>";
                        echo "Availability: <b>".$row1['availability']."</b>";
                        echo "<br>";
                        echo "Call Time: <b>".$row1['calltime']."</b>";
                        echo "<br>";
                        echo "Duration: <b>".$row1['duration']."</b>";
                        echo "<br>";
                        echo "Language: <b>".$row1['language']."</b>";
                        echo "<br>";
                        echo "WiFi: <b>".$row1['wifi']."</b>";
                        echo "<br>";
                        echo "Difficulty: <b>".$row1['difficulty']."</b>";
                        echo "<br>";
                        echo "Mininum Age: <b>".$row1['minimumage']."</b>";
                        echo "<br>";
                        echo "Pets Allowed: <b>".$row1['petsallowed']."</b>";
                        echo "<br>";
                        echo "Open for Parties or Event: <b>".$row1['openforpartyevent']."</b>";
                        echo "<br>";
                        echo "COVID-19 Protocol Requirements: <b>".$row1['covidreq']."</b>";
                        echo "<br><br>";
                        echo "Contact Phone Number: <b>".$row1['contact_number']."</b>";
                        echo "<br>";
                        echo "Contact Email Address: <b>".$row1['contact_email']."</b>";
                        echo "<br><br><br>";

                    

                        echo "<h2>Activities</h2>";
                        $a="Flying";
                        echo "🏃‍♂️".$row2['act1']."        🏃‍♂️".$row2['act2']."      🏃‍♂️".$row2['act3'];
                        echo "<br><br><h2>What To Bring</h2>";
                        echo "📝  ".$row2['whattobring1']."<br>";
                        echo "📝  ".$row2['whattobring2']."<br>";
                        echo "📝  ".$row2['whattobring3']."<br>";
                        echo "📝  ".$row2['whattobring4']."<br>";
                        echo "📝  ".$row2['whattobring5']."<br>";
                        echo "<br><H2>Things to Know | Inclusion | Reminders <br><br></H2>";

                        
                        echo "✔️ ".$row2['inclusion1'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion2'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion3'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion4'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion5'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion6'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion7'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion8'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion9'];
                        echo "<br><br>";
                        echo "✔️ ".$row2['inclusion10'];
                        echo "<br><br>";

                        echo "<div class='left-line'></div>";
                         
                        include('../Config/config.php');
                        echo "<h2 class='travel-details-title'>Reviews and Comments</h2><br>";
                        $rateBar = (round($foo, 2))*20;
                        echo "<div class='w3-light-grey' style='color:#000!important;background-color:#f1f1f1!important'><div class='w3-blue' style='height:10px;width:".$rateBar."%;color:#fff!important;background-color:#607d8b!important'></div></div>";
                        echo "<b>";
                        echo "<p class='rating2'>"."Rating: ".round($foo, 2) ."/5"."</p>";
                        echo "<p class='review2'>"."Review: ".$row4['review_num'] ." review/s </p>";
                        echo "</b>";
                        

                        $temp = $row1['location_adv_code'];
                         $result4 = mysqli_query($connection,"SELECT * FROM customers_review where location_code='$temp'");
                         
                         while($row4 = mysqli_fetch_array($result4))
                             {
                                 echo "<div class='comment-box'>";
                                    echo "<h4 class='customer-name'>".$row4['customer_alias']."</h4>";
                                    echo "<p class='review-date'>".$row4['review_date']. "</p>";  
                                    $stars = $row4['star_rating'];
                                    for($i=1;$i<=5;$i++){
                                        if($i<$rating){
                                                echo "<span class='fa fa-star checked'></span>";
                                            }
                                        else{
                                            echo "<span class='fa fa-star grey'></span>";
                                            }
                                        }
                                    //  echo "<br><i>Comment: </i><br>";
                                    echo "<p class='comment'>".$row4['comment']. "</p>";  
                                 echo "</div>";
                             }
                    ?>
                </div>
            </div>
            <div class='left-line2'></div>
            <div class="map-wrapper">
                <h2 class="travel-details-title">Location</h2>
                <?php
                    echo $string = $selected;
                    $new = str_replace(' ', '%20', $string);
                    $new;
                    echo "<div class='mapouter'><div class='gmap-canvas'><iframe id='gmap_canvas' src='https://maps.google.com/maps?q=".$new."&t=&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe></div></div>";
                ?>
            </div>
            
        </div>
        <?php
            include '../Footer/footer.php';
        ?>
        <script src="app.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

            function disable()
                    {
                    document.onkeydown = function (e) 
                        {
                        return false;
                        }
                    }
      
            function add() {
                setInterval(function(){
                var a=0, b=0, c=0, price=0;
                var disc = "<?php echo $childprice ?>";
                a = +document.getElementById("number1").value;
                b = +document.getElementById("number2").value;
      
                price = +document.getElementById("pri").value;
                var totalp=(a*price)+(b*disc);

                document.getElementById('display1').innerHTML = "₱"+totalp;
                document.getElementById('display2').value = totalp;

                //disabling minus div adult
                if(a<2)
                {
                    document.getElementById("d1").style.visibility = "hidden";
                }
                else
                {
                    document.getElementById("d1").style.visibility = "visible";
                }
                //disabling minus div child
                if(b<1)
                {
                    document.getElementById("d2").style.visibility = "hidden";
                }
                else
                {
                    document.getElementById("d2").style.visibility = "visible";
                }

                }, 100);
            }
      
            var dates = ['2021-06-10'<?php foreach($datez as $value){
          echo ", '". $value . "'";}?>];
                function DisableDates(date)
                {
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [dates.indexOf(string) == -1];
                }

            $( function() {
            $( "#datepicker" ).datepicker(
                {
                    minDate: 1,
                    maxDate: '+2Y',
                    dateFormat: 'yy-mm-dd',
                    beforeShowDay: DisableDates,
                    showOn: "button",
                    buttonImage: "assets/calendar2.png",
                    buttonImageOnly: true,
                    buttonText: "Select date",
                }
            );
            } );
            $(document).ready(function() {
               $("#datepicker").datepicker().datepicker("setDate", new Date());
        });

    
        </script>
        <script src="app.js">
        
        </script>    
</body>
</html>