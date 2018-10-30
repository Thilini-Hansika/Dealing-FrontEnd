<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css\footer.css">
<link rel="stylesheet" href="css\navbar.css">
<link rel="stylesheet" href="css\signup.css">
<!--    <script src="js/adds.js"></script>-->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



</head>
<body>
<?php
include_once "navbar.php";
?>
<div id="c" class="container">


    <div class="omb_login">
        <h3 class="omb_authTitle">Sign Up With Us</h3>
        <div class="row omb_row-sm-offset-3 col-sm-offset-4 omb_socialButtons">
<!--            <a routerLink="/auth/github"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-github"><i class="fa fa-github"></i></a>-->
            <a routerLink="/auth/twitter"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
            <a routerLink="/auth/facebook"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a>
            <a routerLink="/auth/google"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-google-plus"><i class="fa fa-google-plus"></i></a>

        </div>

        <div class="row omb_row-sm-offset-3 omb_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="omb_hrOr">
                <span class="omb_spanOr">or</span>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" novalidate [formGroup]="loginForm" (ngSubmit)="onSubmit()">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" maxlength="50" placeholder="Enter Your/ Email" formControlName="username">
                    </div>
                    <span class="help-block"></span>

<!--                    <div class="input-group">-->
<!--                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>-->
<!--                        <input  type="password" class="form-control" maxlength="50" formControlName="password" placeholder="Password">-->
<!--                    </div>-->
<!--                    <span class="help-block">Password error</span>-->
<br><br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
                </form>
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="row">
                <!--                                        <div class="col-12 col-md-5"></div>-->
                <div class="col-12 col-md-12">
                    <p style="font-family: 'Times New Roman';margin-left: 8%">By signing up for
                        an acccount You
                        agree to our <a data-toggle="modal"  data-target="#exampleModalLong" style="color: #3B5998">Terms &
                            Condition</a>
                    </p>


                </div>

                <!-- Button trigger modal -->
                <!--                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">-->
                <!--                                            Launch demo modal-->
                <!--                                        </button>-->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h1 style="font-size: 30px;font-family: carme;font-weight: bold;color: #3B5998">Terms & Conditions</h1>
                                <p style="font-family: carme;font-weight: bold;color: #474e5d">dealing.lk is a service provided by Saltside Technologies AB (subject to your compliance with the Terms and Conditions set forth below). Please read these Terms and Conditions before using this Web Site.</p>
                                <h1 style="font-size: 30px;font-family:carme;font-weight: bold;color: #3B5998">General</h1>
                                <p style="font-family: carme;font-weight: bold ;color: #474e5d">Advertisers and users are responsible for ensuring that advertising content, text, images, graphics, video ("Content") uploaded for inclusion on dealing.lk complies with all applicable laws. dealing.lk & Saltside Technologies AB assumes no responsibility for any illegality or any inaccuracy of the Content.

                                    The advertisers and user guarantees that his or her Content do not violate any copyright, intellectual property rights or other rights of any person or entity, and agrees to release ikman.lk and Saltside Technologies AB from all obligations, liabilities and claims arising in connection with the use of (or the inability to use) the service.

                                    Advertisers agree that their Content can may be presented through dealing.lk's partner sites under the same terms and conditions as on dealing.lk.</p>
                                <h1 style="font-size: 30px;font-family: carme;font-weight: bold;color: #3B5998">Copyright</h1>
                                <p style="font-family: carme;font-weight: bold;color: #474e5d">Advertisers grant ikman.lk and Saltside Technologies AB a perpetual, royalty-free, irrevocable, non-exclusive right and license to use, reproduce, modify, adapt, publish, translate, create derivative works from and distribute such Content or incorporate such Content into any form, medium, or technology now known or later developed.

                                    The material (including the Content, and any other content, software or services) contained on ikman.lk are the
                                    property of Saltside Technologies AB, its subsidiaries, affiliates and/or third party licensors. Any intellectual p
                                    roperty rights, such as copyright, trademarks, service marks, trade names and other distinguishing brands on the Web Site are the property of Saltside Technologies AB. To be clear: No material on this site may be copied, reproduced, republished, installed, posted, transmitted, stored or distributed without written permission from Saltside Technologies AB.</p>
                                <h1 style="font-size: 30px;font-family: carme;font-weight: bold;color: #3B5998">Watermarks</h1>
                                <p style="font-family: carme;font-weight: bold;color: #474e5d">
                                    All images on ikman.lk are watermarked, which prevents the images to be used for other purposes, without the consent of the advertiser.
                                </p>
                                <h1 style="font-size: 30px;font-family: carme;font-weight: bold;color: #3B5998">Privacy</h1>
                                <p style="font-family: carme;font-weight: bold;color: #474e5d" >ikman.lk and Saltside Technologies AB will collect information from Users and Advertisers. It is a condition of use of the ikman.lk that each User and advertiser consents and authorises ikman.lk and Saltside Technologies AB to collect and use this information. ikman.lk and Saltside Technologies AB also reserves the right to disclose it to Company Affiliates and any other person for the purposes of administering, supporting and maintaining ikman.lk, as well as for improving ikman.lk, for example by using the information for research, marketing, product development and planning.</p>
                            </div>
                            <div class="modal-footer">
                                <!--                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                <!--                                                        <button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
<!--            <div class="col-xs-12 col-sm-3">-->
<!--                <label class="checkbox">-->
<!--                    <input type="checkbox" value="remember-me">Se souvenir de moi ?-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-3">-->
<!--                <p class="omb_forgotPwd">-->
<!--                    <a routerLink="/signup" <span class="fa fa-user-plus"></span> Créer un compte</a>-->
<!--                </p>-->
<!--            </div>-->
        </div>
    </div>


</div>
<?php
include_once "footer.php";
?>
</body>
</html>