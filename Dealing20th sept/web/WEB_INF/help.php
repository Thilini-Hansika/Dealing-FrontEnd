<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css\footer.css">

    <link rel="stylesheet" href="css\button-bar.css">
    <link rel="stylesheet" href="css\help.css">
<!--    <link rel="stylesheet" href="css\footer.css">-->
    <title>help</title>
</head>

<body>



<div class="container" >
    <?php
    include_once "button-bar.php";
    ?>

    <div class="row">
        <!--        <div class="col-12 col-md-1"></div>-->
        <div id="first" class="col-md-3 col-sm-3 col-lg-3 col-xs-3" >
            <a href="what-is-bid-pack.php">
                <img id="first" style="border-radius: 30px" src="img\delivery-worker-giving-a-box-to-a-receiver.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">What is Bid Pack</p>
        </div>
        <div id="second" class="col-md-3 col-sm-3 col-lg-3 col-xs-3" >
            <a href="Order-&-Shipping.php">
                <img id="second" src="img\fast-delivery.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">Order & Shipping</p>
        </div>
        <div id="third" class="col-md-3 col-sm-3 col-lg-3 col-xs-3" >
            <a href="promotion.php">
                <img id="third" src="img\promotion.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">Promotion</p>
        </div>
        <div id="fourth" class="col-md-3 col-sm-3 col-lg-3 col-xs-3" >
            <a href="">
                <img id="fourth" src="img\file.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">Rules</p>
        </div>
        <!--        <div class="col-12 col-md-1"></div>-->
    </div>
    <br><br><br><br>
    <div class="row">
        <!--        <div class="col-12 col-md-1"></div>-->
        <div id="first" class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
            <a href="how-to-bid-in-auction.php">
                <img id="first" src="img\auction.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">How to Bid in Auction</p>
        </div>
        <div id="second" class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
            <a href="how -it-works.php">
                <img id="second" src="img\working-with-laptop.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">How it Works</p>
        </div>
        <div id="third" class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
            <a href="tip-&-tricks.php">
                <img id="third" src="img\trick.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">Tip & Tricks</p>
        </div>
        <div id="fourth" class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
            <a href="Payments.php">
                <img id="fourth" src="img\visa.png"></a>
            <p style="font-family: 'Times New Roman';text-align: left;font-weight: bold">Payments</p>
        </div>
        <!--        <div class="col-12 col-md-1"></div>-->
    </div>
</div>
</div>

    <br><br>
<?php include_once "footer.php";
?>
</body>
</html>