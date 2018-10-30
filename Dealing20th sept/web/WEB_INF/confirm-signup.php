<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css\footer.css">
    <!--    <link rel="stylesheet" href="css\signup.css">-->
    <link rel="stylesheet" href="css\navbar.css">

    <link rel="stylesheet" href="css\confirm-signup.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <meta charset="utf-8">
</head>
<body>
<?php
include_once "navbar.php";
?>

<div id="c" class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" class="sign_up_form">
                <h2 class="sign_up_title">Sign In</h2>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="First Name" tabindex="4">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Last Name" tabindex="5">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Contact No :" tabindex="4">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Confirm Passowrd" tabindex="5">
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12"><a href="#" class="btn btn-primary btn-block btn-lg">Sign Up</a></div>
                </div>
                <div class="buttons_divider">
                </div>

                <div class="row terms_and_conditions">
                    <label>
                        <a href="#" data-toggle="modal" data-target="#t_and_c_m">Already You Have an Account?</a>
                    </label>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12"><a href="#" class="btn btn-primary btn-block btn-lg">Login</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>
</body>
</html>
