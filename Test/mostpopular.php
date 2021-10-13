<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.grey {
  color: grey;
}
.checked {
  color: orange;
}
</style>
</head>
<body>
    
</body>
</html>
<?php
    

        include('../Config/config.php');

        echo "<h3>Tour Package</h3>";

        $result3 = mysqli_query($connection,"SELECT * FROM tour_packages_3");
        $foo = array();
        $foo2 = array();
        $i = 0;
        while($row3 = mysqli_fetch_array($result3))
        {   

            $foo2[$i] = $row3['location_code'];
            $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
            $foo[$i] = $rating;

            $i = $i + 1;
        }

            $max = max($foo);
              $key = array_search($max, $foo);
        echo "<br>Highest Location: ";
        echo $x = $foo2[$key];
        echo "<br><img src='../TourPackage/assets/img-package/".$x."/a.jpg' alt=''>";

        include('../Config/config.php');
        $result3 = mysqli_query($connection,"SELECT * FROM tour_packages_3 where location_code='$x'");
        $row3 = mysqli_fetch_assoc($result3);
        $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
        $foo = $rating;
        echo "<br>";
        for($i=1;$i<=5;$i++){
            if($i<$rating){
                    echo "<span class='fa fa-star checked'></span>";
                }
            else{
                echo "<span class='fa fa-star grey'></span>";
                }
            }
        echo "<p class='rating2'>"."Rating: ".round($foo, 2) ."/5"."</p>";

        echo "<h3>Leisure and Resort</h3>";

        $result3 = mysqli_query($connection,"SELECT * FROM tour_leisure_and_resort_3");
        $foo = array();
        $foo2 = array();
        $i = 0;
        while($row3 = mysqli_fetch_array($result3))
        {   

            $foo2[$i] = $row3['location_code'];
            $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
            $foo[$i] = $rating;

            $i = $i + 1;
        }

            $max = max($foo);
              $key = array_search($max, $foo);
        echo "<br>Highest Location: ";
        echo $foo2[$key];
        
        
        echo "<h3>Outdoor</h3>";

        $result3 = mysqli_query($connection,"SELECT * FROM tour_outdoor_adventure_3");
        $foo = array();
        $foo2 = array();
        $i = 0;
        while($row3 = mysqli_fetch_array($result3))
        {   

            $foo2[$i] = $row3['location_code'];
            $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
            $foo[$i] = $rating;

            $i = $i + 1;
        }

            $max = max($foo);
              $key = array_search($max, $foo);
        echo "<br>Highest Location: ";
        echo $foo2[$key];
        
        
        echo "<h3>Staycation</h3>";

        $result3 = mysqli_query($connection,"SELECT * FROM tour_hotel_3");
        $foo = array();
        $foo2 = array();
        $i = 0;
        while($row3 = mysqli_fetch_array($result3))
        {   

            $foo2[$i] = $row3['location_code'];
            $rating = ((5*$row3['five_star'] + 4*$row3['four_star'] + 3*$row3['three_star'] + 2*$row3['two_star'] + 1*$row3['one_star']) / ($row3['five_star']+$row3['four_star']+$row3['three_star']+$row3['two_star']+$row3['one_star']));
            $foo[$i] = $rating;

            $i = $i + 1;
        }

            $max = max($foo);
              $key = array_search($max, $foo);
        echo "<br>Highest Location: ";
        echo $foo2[$key];
        
?>