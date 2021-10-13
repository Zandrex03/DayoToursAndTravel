<?php
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
       
        document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        document.getElementById('curdate').innerHTML = mm + '/' + dd + '/' + yyyy;
        
        var weekdays = new Array(7);
        weekdays[0] = "SUNDAY";
        weekdays[1] = "MONDAY";
        weekdays[2] = "TUESDAY";
        weekdays[3] = "WEDNESDAY";
        weekdays[4] = "THURSDAY";
        weekdays[5] = "FRIDAY";
        weekdays[6] = "SATURDAY";
        var r = weekdays[today.getDay()];
        document.getElementById("dayname").innerHTML = r;


        if(h>12){
            let h1 = h-12;
            document.getElementById('clock-2').innerHTML = h1 + ":" + m + ":" + s + " P.M. PHT";
        }

        else{
            let h1 = h;
            document.getElementById('clock-2').innerHTML = h1 + ":" + m + ":" + s + " P.M. PHT";
        }

        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
</script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
        $( function() {
    $( "#datepicker" ).datepicker();
  } );
    </script>
</head>
<body onload="startTime()">
        <fieldset>
            <legend>Header</legend>
            <img src="assets/agents-avatar/TA-z0001.png" style="border-radius:50%;width: 2%;height: auto;">
            <b>Juan Dela Cruz</b>
                <div class="dropdown">
                    <button class="dropbtn">Settings</button>
                    <div class="dropdown-content">
                        <a href="#">Account Modification</a>
                        <a href="#">Signout</a>
                    </div>
                </div>
        </fieldset>
    <div id='navigation-bar'>
        <fieldset>
            <legend>Upper Nav Bar</legend>
            <h3 id='clock'></h3>
            <h2 id='clock-2'></h2>
            <b id='curdate'></b>
            <b><i id='dayname'></i></b>
        </fieldset>
    </div>
    <div id='side-bar'>
        <fieldset>
            <legend>Left Side Bar</legend>
                <button>Dashboard</button><br>
                <button>Walk-in Book</button><br>
                <button>Search Book Transaction</button><br>
                <button>Process Trip</button><br>
                <button>Cancellation Requests</button><br>
                <button>Confirmed Cancel Book</button><br>
                <button>Report a Bug</button>
        </fieldset>
    </div>
    <div id='center'>
        <fieldset>
            <legend>Display Data</legend>
            <button>Tour For Today</button>
            <button>Tour For Tomorrow</button>
            <button>Tour For This Week</button>
            <button>Tour For This Month</button>
            <br>
                <fieldset>
                    <legend>MM/DD/YYYY | 00:00 AM or PM</legend>
                    <i><b>Book Type: </b></i><br>
                    <i><b>Location: </b></i><br>
                    <i><b>Account Number: </b></i><br>
                    <i><b>Account Name: </b></i><br>
                    <button>View Data</button>
                </fieldset>
        </fieldset>
    </div>
    <div id='right'>
        <fieldset>
            <legend>Right Side</legend>
            <div id="datepicker"></div>
            <fieldset>
                <legend>Announcement</legend>
            </fieldset>
        </fieldset>
    </div>
</body>
</html>