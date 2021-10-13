

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Select Book Type | DAYO</title>
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
   <div class="main-container-select">
       <div class="main-container-content">
         <div class="main-card-wrapper">
          <h1>Select which type of book you want to avail</h1>
          <div class="card-wrapper">
            <div class="card">
              <img src="assets/tour-package.jpg" alt="">
              <div class="card-details">
                  <h4>Tour Packages</h4>
                  <p>Offer service to customers who want to avail fixed priced planned trips. It's good for students who wants to conduct a field trip or school trip.</p>
                  <button id="box-outside"><a href="../TourPackage/tour-package.php" class="link">Tour Packages</a></button>
              </div>
            </div>
            <div class="card">
              <img src="assets/leisure-resorts.jpg" alt="">
              <div class="card-details">
                  <h4>Leisures and Resorts</h4>
                  <p>Leisure and resort provide service that specifically for those who want to have a chill and relaxing vacation it offers resorts that they can unwind for a day. </p>
                  <button id="box-outside"><a href="../Leisure-and-resort/leisure-and-resorts.php" class="link">Leisures and Resorts</a></button>
              </div>
            </div>
            <div class="card">
              <img src="assets/outdoor2.jpg" alt="">
              <div class="card-details">
                  <h4>Outdoor Adventure</h4>
                  <p>Outdoor adventure is for those people who wants to experience nature at its best for this offers destination which includes beautiful falls and mountains.</p>
                  <button id="box-outside"><a href="../Outdoor-adventure/outdoor-adventures.php" class="link">Outdoor Adventures</a></button>
              </div>
            </div>
            <div class="card">
              <img src="assets/hotel.jpg" alt="">
              <div class="card-details">
                  <h4>Staycation Places</h4>
                  <p>We recommend places where customers can stay with specified duration where they can enjoy the services offered by their desired staycation place.</p>
                  <button id="box-outside"><a href="../Staycation/staycation.php" class="link">Staycation Places</a></button>
              </div>
            </div>
          </div>
         </div>
      </div>
   </div>
  <?php
    include '../Footer/footer.php';
  ?>   
</body>
</html>