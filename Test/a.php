<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <b>Amount: </b><input type="number" name="amount" id="">
        <br><b>SERIAL KEY: </b><input type="text" name="ser" id="">
        <br><input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        echo $_POST['amount'];
    }
?>