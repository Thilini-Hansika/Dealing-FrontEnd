<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css\footer.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    <link rel="stylesheet" href="css\User-Dashboard.css">-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js\User-Dashboard.js"></script>
    <title>Side Bar - User</title>
</head>
<body>
<div class="container">
    <?php
    include_once "button-bar.php";
    ?>
    <!--    <div class="menu-bar">-->
    <!--        <a class="bt-menu"><i class="glyphicon glyphicon-menu-hamburger"></i>Menu</a>-->
    <!--    </div>-->
    <!--    <header>-->
    <!--        <nav>-->
    <!--            <ul>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-user"></span>Public Profile</a></li>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-bitcoin"></span>Buy Bids</a></li>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-piggy-bank"></span>Buy It Now History</a></li>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-gift"></span>Won AuctionsWon Auctions</a></li>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-book"></span>Account Details</a></li>-->
    <!--                <li><a href=""><span class="glyphicon glyphicon-phone-alt"></span>Contact Our Support Team</a></li>-->
    <!---->
    <!--            </ul>-->
    <!--        </nav>-->
    <!--    </header>-->
<!--    #00264e-->
    <div  class="w3-bar-block  w3-bar-block w3-large" style="width:20%;height: 400px; background-color: black ;color: white;word-spacing: 1px;text-decoration: none;display: block;word-spacing: unset">
        <a href="#" class="w3-bar-item  glyphicon glyphicon-user w3-hover-none w3-hover-text-teal" style="font-size: 13px;word-spacing: 0" > Public Profile</a>
        <br>
        <a href="#" class="w3-bar-item w3-button glyphicon glyphicon-bitcoin w3-hover-none w3-hover-text-teal" style="font-size: 13px"  > Buy Bids</a>
        <br>
        <a href="#" class="w3-bar-item w3-button glyphicon glyphicon-piggy-bank w3-hover-none w3-hover-text-teal" style="font-size: 13px"> Buy It Now History</a><br>
        <a href="#" class="w3-bar-item w3-button glyphicon glyphicon-gift w3-hover-none w3-hover-text-teal" style="font-size: 13px"> Won Auctions</a><br>

        <a href="#" class="w3-bar-item w3-button glyphicon glyphicon-book w3-hover-none w3-hover-text-teal" style="font-size: 13px"> Account Details</a><br>
        <a href="#" class="w3-bar-item w3-button glyphicon glyphicon-phone-alt w3-hover-none w3-hover-text-teal" style="font-size: 13px"> Contact Our Support Team</a><br>



    </div>


</div>
<br><br>
<?php
include_once "footer.php";
?>

</body>
</html>