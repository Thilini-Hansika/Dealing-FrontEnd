<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css\footer.css">

    <link rel="stylesheet" href="css\button-bar.css">
    <link rel="stylesheet" href="css\how-it-works.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container" style="border: 1px solid silver">
    <?php
    include_once "button-bar.php";
    ?>
    <br><br><br><br>
    <div class="row">
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-10">
            <h3 style="font-family: 'Times New Roman';font-weight: bold;color: #474e5d">How It Works</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-md-1"></div>
        <div class="col-12 col-md-5">
            <p>1.Each Bid Raises the Price Buy 0.01$ .</p>
            <p>2.The Auction Clock Restart from 10s Every Time Someone Bids .</p>
            <p>3.If New Bid are Placed before the Clock runs out The Last Bidder Wins.</p>
            <p>4.Before You Can Take Part in Auction You Need to buy bid .</p>
        </div>
        <!--        <div class="container">-->
        <div class="col-12 col-md-6">
            <button type="button" data-toggle="modal" data-target="#myModal"
                    style="background-color: #F44336;color: white;font-weight: bold;font-family: 'Times New Roman';width: 150px"
                    class="btn"> Start Biding
            </button>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3  style="font-family: 'Times New Roman';font-weight: bold" class="modal-title">Credit Card</h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="usr">Full Name:</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="pwd">Card Number:</label>
                                    <input type="password" class="form-control" id="pwd">
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="usr">Expiration Date:</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="pwd">Security Code:</label>
                                    <input type="password" class="form-control" id="pwd">
                                </div>
                                <div class="form-group">
                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="usr">Billing Zip Code:</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
<!--                                    <label style="font-family: 'Times New Roman';font-weight: bold" for="usr">Billing Zip Code:</label>-->
                                   <button class="btn" style="font-family: 'Times New Roman';font-weight: bold;background-color: #3B5998;color: white;width: 300px;text-align: center" for="pwd">Buy Bids</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<?php
include_once "footer.php";
?>
</body>
</html>
