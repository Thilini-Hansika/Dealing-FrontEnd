<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\login.css">
    <link rel="stylesheet" href="css\navbar.css">
    <!--    <link rel="stylesheet" href="css\signup.css">-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <meta charset="utf-8">
    <style>

    </style>

</head>
<body style="background-color: white">
<?php
include_once "navbar.php";
?>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div clas="col-md-4">
            <div class="panel " style="background-color: white">
                <div class="panel-heading">
                    <h4 class="panel-title" id="myModalLabel">Login</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6" style="background-color: white">
                            <div class="well">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <ul>
                                                    <li style="list-style: none">
                                                        <a href="#" class="btn btn-lg btn-primary btn-block">
                                                            <i class="fa fa-google-plus"></i>
                                                            <span class="">Google</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <label for="username" class="control-label">Eneter Ypur Email</label>
                                                <input type="text" class="form-control" name="email" value="" required
                                                       title="Электронная почта" placeholder="Your Email">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Enetr Your password<a
                                                            href="/sessions/forgot_password"></a></label>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Passowrd" value="" required=""
                                                       title="Введите пароль">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit" value="login" name="submit"
                                                    class="btn btn-primary btn-block">Login
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="">Forgot Your Password</a>
                                        </div>
                                    </div>
                                    <hr style="1px solid silver">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="">Don't You Have an Account</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <button type="submit" value="login" name="submit"
                                                    style="background-color: #E4505C" class="btn btn-block">Sign Up
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h5>Войдите с помощью социальных сетей</h5>
                            <ul class="list-unstyled list-social">

                                <li>
                                    <a href="#" class="btn btn-lg btn-default btn-block">
                                        <i class="fa fa-facebook"></i>
                                        <span class="">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-lg btn-default btn-block">
                                        <i class="fa fa-vk"></i>
                                        <span class="">ВКонтакте</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-lg btn-default btn-block">
                                        <i class="fa fa-odnoklassniki"></i>
                                        <span class="">Одноклассники</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>

<!--Login Card-->


</body>

</html>

