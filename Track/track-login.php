<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Book Transaction</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" id=""><br>
        <input type="password" name="pass" id=""><br>
        <input type="submit" name="submit"value="Login"><br>
        <i><a href="">Forgot your credentials?</a></i>
    </form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
    session_start();
    include('../Config/config.php');
    $em = $_POST['email'];
    $ac = $_POST['pass'];
    $_SESSION['ref'] = $ac;
    $result = mysqli_query($connection,"SELECT count(*) as account_exist FROM customers_detail where email = '$em' AND account_number = '$ac'");
    $row = mysqli_fetch_assoc($result);
    if ($row['account_exist'] > 0) {
        echo "<script>window.location.href='track-2.php'</script>";
        
    }
    else {
        echo "wala";
    }
}
?>