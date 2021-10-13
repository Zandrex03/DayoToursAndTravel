<?php
  session_start();
  include('../Config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="tour-package.css">
    <title>Checkout | DAYO PH</title>
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
    <div class="main-container4">
      <div class="main-content4">
        <?php
          $tcode_string1 = date("Y");
          $tcode_string2 = date("m");
          $tcode_string3 = date("d");
          $tcode_string4 = random_int ( 0 , 9999 );
          $tcode_string5 = random_int ( 0 , 9999 );
          $tcode_string6 = random_int ( 0 , 9999 );
          $accountnumber = $tcode_string1 . $tcode_string2 . $tcode_string3 . $tcode_string4 . $tcode_string5 . $tcode_string6;
          $year =  $tcode_string1;
          $contact = $_POST['contact'];
          $email = $_POST['email'];
          echo "<div class='left-column'>";
            echo "<h1 class='done-title'>We're Almost Done!</h1>";
            echo "<h3 class='recheck-title'><i>Kindly re-check and confirm all information you had input</i></h3>";
            echo "<b>Account Name: </b>";
            echo $accountname = strtoupper($_POST['lname']) . ", ". ucfirst($_POST['fname']). " ". ucfirst($_POST['mname']);
            echo "<br>";
            echo "<b>Contact Number: </b>";
            echo $contact;
            echo "<br>";
            echo "<b>Email: </b>";
            echo $email;
            echo "<br><br>";
            echo "<span class='book4-detail desired-location'>Desired Book Location :  </span><span class='book4-data data-location'>". $loc = $_SESSION['loc'];
            echo "<br></span>";
            echo "<span class='book4-detail book-date'>Book date :  </span><span class='book4-data data-date'>". $bookdate = $_SESSION['date'];
            echo "<br></span>";
            //echo "<h3 class='book4-guest-title'>Guests</h3>";
            echo "<br>";
            echo "<span class='book4-detail'>Adult/s :  </span><span class='book4-data data-adult'>". $adult = $_SESSION['adult'];
            echo "<br></span>";
            echo "<span class='book4-detail'>Children :  </span><span class='book4-data data-child'>". $child = $_SESSION['child'];
            echo "<br></span>";
            echo "<span class='book4-detail'>Total Number of Guests :  </span><span class='book4-data data-headcount'>". $headcount = $_SESSION['totalatt'];
            echo "<br></span>";
            echo "<h4 class='none'>Total Amount to be Paid:  cla>₱". $pay = $_SESSION['totalprice'];
            echo "</h4>";

            $_SESSION['amounttopay']=$pay;
            $_SESSION['tcode']=$accountnumber;
            $_SESSION['accountname'] = $accountname;
            $_SESSION['contactnum'] = $contact;
            $_SESSION['contactemail'] = $email;
            $_SESSION['location'] = $loc;
            $_SESSION['bookdate'] = $bookdate;
            $_SESSION['tadult'] = $adult;
            $_SESSION['tchild'] = $child;
            $_SESSION['theadcount'] = $adult + $child;
            $_SESSION['package'] = "Outdoor Adventure";

            $i=0;
            echo "<div class='guest-list'>";
                echo "<h3 class='guest-list-title'>Guest List</h3>";
                echo $gList = implode(" | ",$_POST['fn']);
                echo "<p>". implode("<br>",$_POST['fn'])."</p>";
                $_SESSION['guests'] = $gList;
                $_SESSION['pay'] = $pay;
            echo "</div>";
          echo "</div>";
        ?>

         <div class="right-column">
            <div class="red box">
              <div id="smart-button-container">
              <div>
                <label for="description" class="card-name">Card Holders Name : </label><br>
                <input type="text" name="descriptionInput" placeholder="Enter your name" id="description" maxlength="127" value="" class="card-name-input">
              </div>
                <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter card holders name</p>
              <div>
                <label for="amount" class="card-name">Total Amount to be paid : </label><br>
                <div class="price-center">
                    <span class="php">₱</span><input name="amountInput" type="number" id="amount" value="<?php echo $pay;?>" class="amount-input" disable>
                </div>
              </div>
                <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center; display: none;">Please enter a price</p>
              <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
                <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center; display: none;">Please enter an Invoice ID</p>
              <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
            </div>
        </div>
      </div>
   </div>
   </div>

    <?php
        include '../Footer/footer.php';
    ?>
      
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=PHP" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      var description = document.querySelector('#smart-button-container #description');
      var amount = document.querySelector('#smart-button-container #amount');
      var descriptionError = document.querySelector('#smart-button-container #descriptionError');
      var priceError = document.querySelector('#smart-button-container #priceLabelError');
      var invoiceid = document.querySelector('#smart-button-container #invoiceid');
      var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
      var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

      var elArr = [description, amount];

      if (invoiceidDiv.firstChild.innerHTML.length > 1) {
        invoiceidDiv.style.display = "block";
      }

      var purchase_units = [];
      purchase_units[0] = {};
      purchase_units[0].amount = {};

      function validate(event) {
        return event.value.length > 0;
      }

      paypal.Buttons({
        style: {
          color: 'gold',
          shape: 'rect',
          label: 'paypal',
          layout: 'vertical',
          
        },

        onInit: function (data, actions) {
          actions.disable();

          if(invoiceidDiv.style.display === "block") {
            elArr.push(invoiceid);
          }

          elArr.forEach(function (item) {
            item.addEventListener('keyup', function (event) {
              var result = elArr.every(validate);
              if (result) {
                actions.enable();
              } else {
                actions.disable();
              }
            });
          });
        },

        onClick: function () {
          if (description.value.length < 1) {
            descriptionError.style.visibility = "visible";
          } else {
            descriptionError.style.visibility = "hidden";
          }

          if (amount.value.length < 1) {
            priceError.style.visibility = "visible";
          } else {
            priceError.style.visibility = "hidden";
          }

          if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
            invoiceidError.style.visibility = "visible";
          } else {
            invoiceidError.style.visibility = "hidden";
          }

          purchase_units[0].description = description.value;
          purchase_units[0].amount.value = amount.value;

          if(invoiceid.value !== '') {
            purchase_units[0].invoice_id = invoiceid.value;
          }
        },

        createOrder: function (data, actions) {
          return actions.order.create({
            purchase_units: purchase_units,
          });
        },

        onApprove: function (data, actions) {
          return actions.order.capture().then(function (details) {
            window.location.href='save-data.php';
          });
        },

        onError: function (err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
</body>
</html>