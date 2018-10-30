<!doctype html>
<html lang="en">
<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\all-adds.css">
<!--    <script src="js/alladds.js"></script>-->
    <!--    <link rel="stylesheet" href="css\signup.css">-->
    <!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

    <!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <!--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
include_once "navbar.php"
?>


<div class="container" style="border:1px solid silver;  ">
    <div class="row" style="">
        <!--            <div class="col-12 col-md-4" style="border: 2px solid red"></div>-->

        <div class="col-12 col-md-12">
            <!--                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>-->
            <!--                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>-->


            <div class="wrapper">
                <!--                    <h1>Check me out, I'm a <a href="https://benmarshall.me/responsive-iframes/">responsive iframe</a>!</h1>-->
                <!--                    <p>Resize me in your browser or pull me up in different size screen to see the magic of the <a href="https://benmarshall.me/resize-videos-proportionally-intrinsic-ratios/">intrinsic ratio technique</a>.</p>-->
                <div class="iframe-container" style="overflow: hidden !important;">
                    <iframe src="https://ikmanservices.com/advertisments/Shangri-La/10072018/970x250/banner/index.html"
                            frameborder="0"></iframe>
                </div>

            </div>


        </div>

    </div>


</div>
<div class="container" style="border:1px solid silver;  ">
    <div class="row">
<!--        -->
        <div class="row" style="">
            <div class="col-12 col-md-3">
                <button id="b1" class="btn " style=" background-color: #3B5998"><i
                            class="glyphicon glyphicon-map-marker"></i>Select Location
                </button>
                <!--                <i class="glyphicon glyphicon-map-marker"></i>-->
            </div>
            <div class="col-12 col-md-3">
                <button id="b1" class="btn " style=" background-color: #3B5998"><i class="glyphicon glyphicon-tag"></i>Select
                    Category
                </button>

            </div>
            <div class="col-12 col-md-6">
                <!--                            <button  id="b1" class="btn " style=" background-color: #3B5998"></button>-->
                <input id="p" type="text" name="text" class="search" placeholder="search here" style="text-align: center">
                <input id="s" type="submit" name="submit" class="btn" value="search">
            </div>
        </div>
    </div>
</div>

<div class="container" style="border:1px solid silver;  ">
<!--    -->
    <div class="row" style="">
        <br><br>
        <div class="col-12 col-md-3">
<br>
            <p style=" font-family: 'Times New Roman';font-weight: bold">sort result by</p>
            <hr style="border: slategrey solid 1px">
            <select>
                <option value="category">Date : newest On Top</option>
                <option value="category">Date : Oldest On Top</option>
                <option value="category">Price : High to low</option>
                <option value="category">Price : Low to high</option>
            </select>
            <br> <br>

            <div class="row">
                <div class="col-12 col-md-12">
                    <p>Type of Posters</p>
                    <hr style="border: solid slategrey 1px">
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">All Posters</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Only Members</label>
                    </div>
                </div>
            </div>

            <!--            <div class="container"style="margin-left: 2%">-->
            <div class="row" style="width: 1100px">
                <div class="col-12 col-md-12">

                    <div class="panel-group" id="accordion">

                        <div class="panel  col-lg-3 no-padding">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a style="font-weight: bold;font-family: 'Times New Roman';" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapseOne"> Category
                                        <i style="color: #474e5d;text-align: "
                                           class="more-less glyphicon glyphicon-chevron-down"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-group accordion2">
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-1">
                                                        <img src="img\car.png">
                                                        Vehicle</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-2">
                                                        <img src="img\camera.png">
                                                        Electronics</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\house.png"> Property </a> Property</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-4">
                                                        <img src="img\ring.png">
                                                        Fashion,Health & Beauty</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-4">
                                                        <img src="img\home.png"> Property</a>
                                                    Home & Garden</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\dog.png">
                                                        Animals</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\product.png">
                                                        Business & Industry</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\suitcase.png">
                                                        Jobs In Sri Lanka</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\customer-support.png">
                                                        Service</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\mortarboard.png">
                                                        Education</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\carrot.png">
                                                        Food & Agriculture</a>
                                                </h4>
                                            </div>

                                        </div>

                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\businessman-standing-with-a-suitcase.png">
                                                        Work Overseas</a>
                                                </h4>
                                            </div>

                                        </div>
                                        <div class="panel ">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent=".accordion2"
                                                       href="#collapseOne-3">
                                                        <img src="img\gift.png">

                                                        Other</a>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                        </div>-->
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <!--                    <p>Type of Posters</p>-->
                    <hr style="border: solid slategrey 1px">
                </div>

            </div>

            <!--            <div class="container"style="margin-left: 2%">-->
            <div class="row" style="width: 900px">
                <div class="col-12 col-md-12">

                    <div class="panel  col-lg-3 no-padding">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a style="font-family: 'Times New Roman';font-weight: bold" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseTwo">Location
                                    <i style="color: #474e5d"
                                       class="more-less glyphicon glyphicon-chevron-down"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group accordion2">
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-5">
                                                    <i class="more-less "></i>
                                                    Colombo</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo-5" class="panel-collapse collapse">

                                        </div>
                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-6">
                                                    <i class="more-less "></i>
                                                    Gampaha</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo-6" class="panel-collapse collapse">

                                        </div>
                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-7">
                                                    <i class="more-less "></i>
                                                    Panadura</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Kandy</a>
                                            </h4>
                                        </div>

                                    </div>

                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Kurunagala</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    kaluthra</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Ampara</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Anuradhapura</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Badulla</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Battialoa</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Galle </a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Hambanthota </a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Mathara</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Jaffna</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Kagalle</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Killinochcchi</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Mannar</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Matale</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Monaragala</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Mulathiu</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Nuwara Eliya</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Polonnaruwa</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Puttalam</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Rathnapura</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Trincomalee</a>
                                            </h4>
                                        </div>

                                    </div>
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2"
                                                   href="#collapseTwo-8">
                                                    <i class="more-less "></i>
                                                    Vaunia</a>
                                            </h4>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                        </div>-->


                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <!--                    <p>Type of Posters</p>-->
                    <hr style="border: solid slategrey 1px">
                </div>

            </div>

        </div>
        <div style="border: #4CAF50 solid 1px" class="col-12 col-md-9"><br>
<!--            <div class="container">-->
                <div class="row">

                        <div class="col-12 col-md-4">
                            <div class="card" id="card1">
                                <img src="img\e-2.jpg" alt="John" style="width:100%;height: 100px">
                                <h1>$2.89</h1>
                                <p class="title">Multifunctional Repair Kit Set Electronic Precision Screwdriver Maintenance Tool</p>
                                <p></p>

                                <p><button id="but">BID NOW</button></p>
                            </div>

                        </div>
                    <div class="col-12 col-md-4">
                        <div class="card" id="card1">
                            <a href="Vehicle-1.php">  <img src ="img\c-2.jpg" alt="John" style="width:100%;height: 100px">   </a>

                            <h1>$4233.22</h1>
                            <p class="title">Dodge Durango Citadel Many Featured Of Best Vehicle in the world</p>
                            <p></p>

                            <p><button id="but">BID NOW</button></p>
                        </div>

                    </div>

<!--                        <div class="col-12 col-md-4">-->
<!--                            <div class="card" id="card1">-->
<!--                                <a href="Vehicle-1.php>-->
<!--                                <img src ="img\c-2.jpg" alt="John" style="width:100%;height: 100px">-->
<!--                                </a>-->
<!--                                <h1>$4233.22</h1>-->
<!--                                <p class="title">Dodge Durango Citadel Many Featured Of Best Vehicle in the world</p>-->
<!--                                <p></p>-->
<!---->
<!--                                <p><button id="but">BID NOW</button></p>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
                        <div class="col-12 col-md-4">
                            <div class="card" id="card1" >
                                <img src="img\c-3.jpg" alt="John" style="width:100%;height: 100px">
                                <h1>$3100</h1>
                                <p class="title">GMC Acadia SLE , This is the Most Comfatble vehicle </p>
                                <p></p>

                                <p><button id="but">BID NOW</button></p>
                            </div>

                        </div>

<!--                </div>-->
            </div>

<br><br>

            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\sh-4.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.44</h1>
                        <p class="title">

                            Fashion Mens Oxfords Casual High Top Shoes Leather Shoes Canvas Sneakers New</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\s-1.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$2.33</h1>
                        <p class="title">Replenish Your Top-Drawer Beauty nail Polisher</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card" id="card1" >
                        <img src="img\p-1.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$30.5</h1>
                        
                        <p class="title">
                            5" Quad Core Unlocked Dual SIM Smartphone 4G WiFi Android Mobile Phone UK Plug</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <!--                </div>-->
            </div>
            <br><br>

            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\b-2.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.44</h1>
                        <p class="title">2018 Hot Women 6PCS set shoulder bag satchel handbag </p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\l-3.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$2.33</h1>
                        <p class="title">Summer Womens Casual Tops Blouse Short Sleeve Crew </p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card" id="card1" >
                        <img src="img\b-1.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$30.5</h1>

                        <p class="title">The item is listed as a Top Rated Plus item
                            Women's Shoulder Bag PU Leather Handbags  </p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <!--                </div>-->
            </div>
            <br><br>

            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\s-4.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.44</h1>
                        <p class="title">
                            Luxury Men's Women's Bamboo Wood Watch Quartz Leather Wristwatches Fashion w/Box</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\g-2.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$2.33</h1>
                        <p class="title">2017 Aluminium HD Polarized Sunglasses Men Driving </p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card" id="card1" >
                        <img src="img\s-5.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$30.5</h1>

                        <p class="title">Men's Akribos XXIV AK950 Diver Chronograph Stainless Steel Bracelet Watch</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <!--                </div>-->
            </div>
            <br><br>

            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\sh-3.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.44</h1>
                        <p class="title">The item is listed as a Top Rated Plus item
                            Fashion Men  </p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\year-1.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$2.33</h1>
                        <p class="title">CEO & Founder, head set for men Nad women</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card" id="card1" >
                        <img src="img\tv-1.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$30.5</h1>

                        <p class="title">LG UN65MU9000 65" Smart LED 4K Ultra HDTV w/ HDR US Model TV, SHIP</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <!--                </div>-->
            </div>
            <br><br>

            <div class="row">

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\e-3.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.44</h1>
                        <p class="title">1Pair 2PCS MC4 Y/T Type Solar Panel Adapter  Cable Connector Wrench</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="card" id="card1">
                        <img src="img\by-4.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$2.33</h1>
                        <p class="title">Baby Boy Girl Long Jumpsuit Romper Bodysuit Cotton Clothes Outfit</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card" id="card1" >
                        <img src="img\b-3.jpg" alt="John" style="width:100%;height: 100px">
                        <h1>$5.58</h1>

                        <p class="title">6PCS set shoulder bag satchel handbag fashion handbags</p>
                        <p></p>

                        <p><button id="but">BID NOW</button></p>
                    </div>

                </div>

                <!--                </div>-->
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