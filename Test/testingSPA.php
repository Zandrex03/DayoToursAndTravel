<?php
    function guestField(){
        echo "Function Called";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function guestField() {
                setInterval(function(){
                var i=0, j=0, headcount=0;
                
                i = +document.getElementById("adult").value;
                j = +document.getElementById("child").value;
                headcount = i + j;
                document.getElementById('totalhead').innerHTML = headcount;
                
        
                document.getElementById("guestnames").innerHTML = "Expected input fields: "+headcount;
                document.getElementById('expinp').value = headcount;
            }, 1000);
            }
        function names1(){
            var temp = document.getElementById('expinp').value;

            for (let m = 0; m < temp; m++) {
                var btn = document.createElement("input");
            document.body.appendChild(btn);
            }
            
        }
        function names2(){
            var temp = document.getElementById('expinp').value;

            for (let m = 0; m < temp; m++) {
                var btn = document.createElement("input");
            document.body.appendChild(btn);
            }
            
        }
        
        
    </script>
</head>
<body onload="guestField()">
    <form action="" method="post">
        <fieldset>
            <legend>Travel Form</legend>
                <input type="date" name="bookdate" id=""><br>
                <b>Adult: </b><input type="number" name="adult" id="adult" oninput='names1()'><br>
                <b>Child: </b><input type="number" name="child" id="child" oninput='names2()'><br>
                <b>Total Price</b> <input type="number" name="totalprice" id="">
                <p id="totalhead"></p>
        </fieldset>
        <fieldset>
            <legend>Guest List and Contact Preferences</legend>
                <p id=guestnames></p>
                <input type="number" name="inp" id="expinp">
            <div id='expGuest'></div>
        </fieldset>
        <input type="submit" value="Save">
    </form>
    
</body>
</html>
