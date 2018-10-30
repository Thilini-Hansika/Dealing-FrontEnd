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
    <link rel="stylesheet" href="css\signup.css">
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <meta charset="utf-8">
    <title>Document</title>

</head>
<body>
<?php
include_once "navbar.php";
?>


<div class="container">
    <!--    <h2>Basic Card</h2>-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6 ">

                        <div class="w3-card-4" style="">

                            <div class=" container">
                                <div class="row">
                                    <div class="col-12 col-md-1"></div>
                                    <div class="col-12 col-md-6">
                                        <button id="bt" class="btn btn-primary navbar-btn"
                                                style="background-color: #3B5998;  color: white;border: 2px solid white;  font-family: 'Times New Roman'; padding: 5px;  border-radius: 25px;">
                                            <img src="img\facebook (3).png">Login with Facebook
                                        </button>
                                        <!--            <label >Email:</label>-->
                                        <!--            <input type="text" style="width: 200px;"placeholder="Enter your Email">-->
                                    </div>
                                    <div class="col-12 col-md-5"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-1"></div>
                                    <div class="col-12 col-md-6">
                                        <button id="bt" class="btn btn-primary navbar-btn"
                                                style="background-color: #C62828;color: white;border: 2px solid white; font-family: 'Times New Roman';  padding: 5px;  border-radius: 25px;">
                                            <img src="img\google-plus.png">Login with Gmail
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-5"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-1"></div>
                                    <div class="col-12 col-md-6">
                                        <button id="bt" class="btn btn-primary navbar-btn"
                                                style="background-color: #33B5FF; font-family: 'Times New Roman';color: white;border: 2px solid white;   padding: 5px;   border-radius: 25px;">
                                            <img src="img\twitter.png">Login with Twitter
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-5"></div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-12 col-md-1"></div>
                                    <div class="col-12 col-md-6">
                                        <label>Email:</label>
                                        <input type="text"
                                               style="font-weight: bold;font-family: 'Times New Roman';border: #474e5d;width: 300px"
                                               placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-12 col-md-5"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-1"></div>
                                    <div class="col-12 col-md-6">

                                  <a href="confirm-signup.php">  <button class="btn btn-primary">Continue</button></a>

                                    </div>
                                    <div class="col-12 col-md-5"></div>
                                    <br><br>
                                    <div class="row">
                                        <!--                                        <div class="col-12 col-md-5"></div>-->
                                        <div class="col-12 col-md-12">
                                            <p style="font-family: 'Times New Roman';margin-left: 8%">By signing up for
                                                an account you
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
                                                        <h1 style="font-size: 30px;font-family: 'Times New Roman';font-weight: bold;color: #3B5998">Terms & Conditions</h1>
                                                        <p style="font-family: 'Times New Roman';font-weight: bold;color: #474e5d">dealing.lk is a service provided by Saltside Technologies AB (subject to your compliance with the Terms and Conditions set forth below). Please read these Terms and Conditions before using this Web Site.</p>
                                                        <h1 style="font-size: 30px;font-family: 'Times New Roman';font-weight: bold;color: #3B5998">General</h1>
                                                        <p style="font-family: 'Times New Roman';font-weight: bold ;color: #474e5d">Advertisers and users are responsible for ensuring that advertising content, text, images, graphics, video ("Content") uploaded for inclusion on dealing.lk complies with all applicable laws. dealing.lk & Saltside Technologies AB assumes no responsibility for any illegality or any inaccuracy of the Content.

                                                            The advertisers and user guarantees that his or her Content do not violate any copyright, intellectual property rights or other rights of any person or entity, and agrees to release ikman.lk and Saltside Technologies AB from all obligations, liabilities and claims arising in connection with the use of (or the inability to use) the service.

                                                            Advertisers agree that their Content can may be presented through dealing.lk's partner sites under the same terms and conditions as on dealing.lk.</p>
                                                        <h1 style="font-size: 30px;font-family: 'Times New Roman';font-weight: bold;color: #3B5998">Copyright</h1>
                                                        <p style="font-family: 'Times New Roman';font-weight: bold;color: #474e5d">Advertisers grant ikman.lk and Saltside Technologies AB a perpetual, royalty-free, irrevocable, non-exclusive right and license to use, reproduce, modify, adapt, publish, translate, create derivative works from and distribute such Content or incorporate such Content into any form, medium, or technology now known or later developed.

                                                            The material (including the Content, and any other content, software or services) contained on ikman.lk are the
                                                            property of Saltside Technologies AB, its subsidiaries, affiliates and/or third party licensors. Any intellectual p
                                                            roperty rights, such as copyright, trademarks, service marks, trade names and other distinguishing brands on the Web Site are the property of Saltside Technologies AB. To be clear: No material on this site may be copied, reproduced, republished, installed, posted, transmitted, stored or distributed without written permission from Saltside Technologies AB.</p>
                                                        <h1 style="font-size: 30px;font-family: 'Times New Roman';font-weight: bold;color: #3B5998">Watermarks</h1>
                                                        <p style="font-family: 'Times New Roman';font-weight: bold;color: #474e5d">
                                                            All images on ikman.lk are watermarked, which prevents the images to be used for other purposes, without the consent of the advertiser.
                                                        </p>
                                                        <h1 style="font-size: 30px;font-family: 'Times New Roman';font-weight: bold;color: #3B5998">Privacy</h1>
                                                        <p style="font-family: 'Times New Roman';font-weight: bold;color: #474e5d" >ikman.lk and Saltside Technologies AB will collect information from Users and Advertisers. It is a condition of use of the ikman.lk that each User and advertiser consents and authorises ikman.lk and Saltside Technologies AB to collect and use this information. ikman.lk and Saltside Technologies AB also reserves the right to disclose it to Company Affiliates and any other person for the purposes of administering, supporting and maintaining ikman.lk, as well as for improving ikman.lk, for example by using the information for research, marketing, product development and planning.</p>
                                                    </div>
                                                    <div class="modal-footer">
<!--                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                                                        <button type="button" class="btn btn-primary">Save changes</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--            <br><br><br><br><br><br><br>-->

        </div>

        <div class="col-12 col-md-3"></div>
    </div>
</div>
<br><br><br>
<?php
include_once "footer.php";
?>

</body>
</html>
