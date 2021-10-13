<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="leisure-and-resort.css">
    <title>Leisure and Resorts | DAYO PH</title>
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
    </head>
<body>
  <?php
    include '../NavigationBar/navbar.php';
  ?>

    <div class="main-container">
    <div class="hero-section">
          <video muted autoplay="true" loop="true" class="resort-video">
            <source src="assets/resortVideo.mp4" type="video/mp4">
          </video>
            <div class="headline">
               <h1>Chill and Relax </h1>
               <h1>With Our Leisure and Resorts</h1>
            </div>
        </div>
        <div class="main-content">
          <?php
            include('../Config/config.php');
            // echo "<button><a href='../book/book.php'>Back to Book Type</a></button><br>";
                $result = mysqli_query($connection,"SELECT * FROM tour_leisure_and_resort_1");
                $result3 = mysqli_query($connection,"SELECT * FROM tour_leisure_and_resort_3");
                $row3 = mysqli_fetch_assoc($result3);
                while($row = mysqli_fetch_array($result))
            {   
              echo "<div class='box-container'>";
                echo "<div class='main-box'>";
                    echo "<div class='picture-box'>";
                      echo "<form action='leisure-and-resorts-2.php' method='get' target='_blank'>";
                      echo "<img src='assets/img-leisure-resort/". $row['location_adv_code']."/a.jpg' style='width:100%'>";
                    echo "</div>";
                    echo "<div class='middle'>";
                      echo "<input type='text' id='tour-name' name='sel' value='". $row['location_adv_name']."'>";
                      // echo "<h1 class='tour-name' name='sel'>".$row['outdoor_adv_name']."</h1>";
                      $foldername=$row['location_adv_code'];
                     echo "<p class='code'>"."Location Code: ".$tourcode = $row['location_adv_code']."</p>";
                     echo "<p class='descriptions'>".$row['location_adv_description']."</p>";
                    echo "</div>";
                    echo "<div class='right'>";
                      echo "<div class='top'>";
                      //computing star ratings  
                      $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
                      $foo = $rating;
                      for($i=0;$i<5;$i++){
                          if($i<$rating){
                              echo "<span class='fa fa-star' checked></span>";
                          }
                          else{
                              echo "<span class='fa fa-star grey'></span>";
                          }
                      }
                        echo "<p class='rating'>"."Rating: ".round($foo, 2) ."/5"."</p>";
                        $temp0=$row['location_adv_code'];
                         $result2 = mysqli_query($connection,"SELECT count(*) as review_num FROM customers_review where location_code= '$temp0'");
                         $row2 = mysqli_fetch_assoc($result2);
                        echo "<p class='review'>"."Review: ".$row2['review_num'] ." review/s </p>";
                      echo "</div>";
                      echo "<input type='submit' value='Check Availability' class='check-btn'></form>";
                    echo "</div>";
                echo "</div>";
              echo "</div>";  
            }
        ?>
        </div>
    </div>
        
  <?php
    include '../Footer/footer.php';
  ?>  
</body>
</html>




