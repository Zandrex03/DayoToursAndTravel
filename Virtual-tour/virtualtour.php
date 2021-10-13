<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="virtualtour.css">
    <title>Virtual Tour | Dayo</title>
    <style>
        <?php
        include '../NavigationBar/style.css';
        ?>
        <?php
            include '../Footer/style.css';
        ?> 
    </style>
</head>
<body>
  <?php
    include '../NavigationBar/navbar.php';
  ?>
   <div class="hero-section">
     <h1>Virtual Tour</h1>
   </div>
   <div class="main-container">
      <div class="card-container">
        <div class="card"  onclick="window.location.href='mtbalagbag.php'">
          <div class="filter-img">
            <img src="assets/MtBalagbag12.jpg" alt="Mt Balagbag" class="image">
            <div class="image-overlay">
                <i class="far fa-play-circle"></i>
            </div>
          </div>
          <div class="card-details">
            <h2>Mt Balagbag</h2>
            <p>Norzagaray Bulacan</p>
            <a href="mtbalagbag.php" class="view-btn">view</a>
          </div>
        </div>
        <div class="card card2">
          <div class="filter-img">
            <img src="assets/pacific-waves-resort-3.jpg" alt="Pacific Wave Resort" class="image">
            <div class="image-overlay image-overlay2">
                <i class="far fa-play-circle"></i>
            </div>
          </div>
          <div class="card-details card-details2">
            <h2>Pacific Wave Resort</h2>
            <p>Norzagaray Bulacan</p>
            <a href="" class="view-btn">view</a>
          </div>
        </div>
        <div class="card card3">
          <div class="filter-img">
            <img src="assets/paradise2.jpg" alt="Paradise Camp Adventure" class="image">
            <div class="image-overlay image-overlay3">
                <i class="far fa-play-circle"></i>
            </div>
          </div>
          <div class="card-details card-details3">
            <h2>Paradise Camp Adventure</h2>
            <p>Norzagaray Bulacan</p>
            <a href="" class="view-btn">view</a>
          </div>
        </div>
        <div class="card card4">
          <div class="filter-img">
            <img src="assets/grotto.jpg" alt="Our Lady Of Lourdes Grotto" class="image">
            <div class="image-overlay image-overlay4">
                <i class="far fa-play-circle"></i>
            </div>
          </div>
          <div class="card-details card-details4">
            <h2>Our Lady Of Lourdes Grotto</h2>
            <p>Norzagaray Bulacan</p>
            <a href="" class="view-btn">view</a>
          </div>
        </div>
      </div>
   </div>
  <?php
    include '../Footer/footer.php';
  ?>
  
  <script src="app.js"></script>
</body>
</html>