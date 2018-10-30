<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\navbar.css">
    <!--    <link rel="stylesheet" href="css\signup.css">-->
    <link rel="stylesheet" href="css\homepage.css">

</head>
<body>
<!---->
<?php
include_once "navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md 2">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Category<img src="img\drop-down-arrow.png">
                </a>
                <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img\s.jpg" class="img-fluid">
                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Collectibles and Arts</strong></p>
                            <p><a href="#"></a> Collectibles</p>
                            <p><a href="#"></a> Antiques</p>
                            <p><a href="#"></a> Sports Memorbilla</p>
                            <p><a href="#"></a> Art</p>


                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Home & Garden</strong></p>
                            <p><a href="#"></a>Yard,garden & outdoor</p>
                            <p><a href="#"></a> Craft</p>
                            <p><a href="#"></a> Home Improvement</p>
                            <p><a href="#"></a> Pet Suplier</p>


                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Sporting Goods</strong></p>
                            <p><a href="#"></a> Outdoor Sports</p>
                            <p><a href="#"></a> Team Sports</p>
                            <p><a href="#"></a> Exercis& fitness</p>
                            <p><a href="#"></a> Golf</p>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <!--                <img src="img\s.jpg" class="img-fluid">-->
                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Electronics</strong></p>
                            <p><a href="#"></a>Computers & tablets</p>
                            <p><a href="#"></a> Cameras & Photos</p>
                            <p><a href="#"></a> tv,Audio & Surveilance</p>
                            <p><a href="#"></a> cell phones & Accesories</p>
                            <p><a href="#"></a> Link</p>

                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Motors</strong></p>
                            <p><a href="#"></a> Arts & Accesories</p>
                            <p><a href="#"></a> Cars & trucks</p>
                            <p><a href="#"></a> Motor Cycles</p>
                            <p><a href="#"></a> Other vehocles</p>


                        </div>

                        <div class="col-md-3">
                            <p><strong class="sub-menu-heading">Fashion</strong></p>
                            <p><a href="#"></a> Women</p>
                            <p><a href="#"></a> Men</p>
                            <p><a href="#"></a> jewelry & watches </p>
                            <p><a href="#"></a> shoes</p>


                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-4">
            <input type="text" placeholder="Search for Anything" style="width: 380px;height: 40px">
        </div>

        <div class="col-md-3">
            <select style="height: 40px">
                <option value="category">All Categories</option>
                <option value="category">Antiques</option>
                <option value="category">Art</option>
                <option value="category">Baby</option>
                <option value="category">Books</option>
                <option value="category">Business & Industrial</option>
                <option value="category">Camera & Photos</option>
                <option value="category">Cell Phones & Accesories</option>
                <option value="category">Clothing shoes & Accosires</option>
                <option value="category">Coins & Paper Money</option>
                <option value="category">Collectabilities</option>
                <option value="category">Computers/Tablets & Networking</option>
                <option value="category">Consumer Electronics</option>
                <option value="category">Craft</option>
                <option value="category">Dols& Bears</option>


            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary btn-lg">Search</button>
        </div>

    </div>
    </li>


    <!--<div style="width: 500px;border-left: 6px black solid;position: absolute"</div>-->


    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-color: #3B5998">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <!--                    <li class="nav-item active">-->
                    <!--                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
                    <!--                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fashion
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <img style="width: 150px;height: 200px" src="img\S-14.jpg" class="img-fluid">
                                </div>

                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Top Category</strong></p>
                                    <p><a href="#"></a> Mens</p>
                                    <p><a href="#"></a> Womens</p>
                                    <p><a href="#"></a> Kids</p>


                                </div>

                                <div class="col-md-5">
                                    <p><strong class="sub-menu-heading">Shop for</strong></p>
                                    <p><a href="#"></a> jewelry & Watches</p>
                                    <p><a href="#"></a> Hand Bags & Accesories</p>
                                    <p><a href="#"></a> Health & Beauty</p>
                                    <p><a href="#"></a> Sales & Event</p>
                                    </p>

                                </div>


                            </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Electronics
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-3">
                                    <img style="width: 100px;height: 200px" src="img\S-15.jpg" class="img-fluid">
                                </div>

                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Top Categories</strong></p>
                                    <p><a href="#"></a> Cell Phone & Accesories</p>
                                    <p><a href="#"></a> Camers & photos</p>
                                    <p><a href="#"></a> Computers & tablet</p>


                                </div>

                                <div class="col-md-6">
                                    <p><strong class="sub-menu-heading">Other Categories</strong></p>
                                    <p><a href="#"></a> car,Audio,Video & GPS</p>
                                    <p><a href="#"></a> Iphone</p>
                                    <p><a href="#"></a> Ipad</p>
                                    <p><a href="#"></a> Tv , Audio</p>
                                    <p><a href="#"></a> Video Games & consoles</p>

                                </div>


                            </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Collectibles & Arts
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-3">
                                    <img style="width: 120px;height: 200px" src="img\S-16.jpg" class="img-fluid">
                                </div>

                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Top Categories</strong></p>
                                    <p><a href="#"></a> Antiques</p>
                                    <p><a href="#"></a> Collectibles</p>


                                </div>

                                <div class="col-md-6">
                                    <p><strong class="sub-menu-heading">Additional Categories</strong></p>
                                    <p><a href="#"></a> Sports Memorbles</p>
                                    <p><a href="#"></a> Art</p>
                                    <p><a href="#"></a> Entertainment memorbles</p>

                                </div>


                            </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sporting Goods
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <img style="width: 148px;height: 200px" src="img\S-18.jpg" class="img-fluid">
                                </div>

                                <div class="col-md-4">
                                    <p><strong class="sub-menu-heading">Top Categories</strong></p>
                                    <p><a href="#"></a> Cycling</p>
                                    <p><a href="#"></a> Golf</p>
                                    <p><a href="#"></a> Hinting</p>


                                </div>

                                <div class="col-md-4">
                                    <p><strong class="sub-menu-heading">Additional Categories</strong></p>
                                    <p><a href="#"></a> Exercise & fitness</p>
                                    <p><a href="#"></a> Fishing</p>
                                    <p><a href="#"></a> Outdoor Sports</p>
                                    <p><a href="#"></a> Team Sports</p>


                                </div>


                            </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Motors
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <img style="width: 150px;height: 200px" src="img\S-19.jpg" class="img-fluid">
                                </div>

                                <div class="col-md-4">
                                    <p><strong class="sub-menu-heading">Top Categories</strong></p>
                                    <p><a href="#"></a> Cars & trucks</p>
                                    <p><a href="#"></a> Motor Cycles</p>
                                    <p><a href="#"></a> parts Accesories</p>


                                </div>

                                <div class="col-md-4">
                                    <p><strong class="sub-menu-heading">Additional Categories</strong></p>
                                    <p><a href="#"></a> Boats</p>
                                    <p><a href="#"></a> Other Vehicles</p>
                                    <p><a href="#"></a> Power Sports</p>


                                </div>


                            </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Deals
                        </a>
                        <div class="dropdown-menu mega" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-6">
                                    <img style="width: 200px;height: 200px" src="img\S-20.png" class="img-fluid">
                                </div>

                                <div class="col-md-6">
                                    <p><strong class="sub-menu-heading">Collectibles and Arts</strong></p>
                                    <p><a href="#"></a> Fashion Sales</p>
                                    <p><a href="#"></a> Home deals</p>
                                    <p><a href="#"></a> Health & Beauti deals</p>
                                    <p><a href="#"></a> Watch deals</p>
                                    <p><a href="#"></a> All Deals & Special Offers</p>

                                </div>

                            </div>

                    </li>

                </ul>

            </div>
        </nav>
    </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img\s-8.jpg" alt="Los Angeles" style="width: 100%;height: 400px">
            </div>

            <div class="item">
                <img src="img\s-2.jpg" alt="Chicago" style="width:100%;height: 400px">
            </div>

            <div class="item">
                <img src="img\s-1.jpg" alt="New york" style="width:100%;height: 400px">
            </div>
            <div class="item">
                <img src="img\s-9.jpg" alt="New york" style="width:100%;height: 400px">
            </div>

            <div class="item">
                <img src="img\s-10.jpg" alt="New york" style="width:100%;height: 400px">
            </div>
            <div class="item">
                <img src="img\s-11.jpg" alt="New york" style="width:100%;height: 400px">
            </div>
            <div class="item">
                <img src="img\s-12.jpg" alt="New york" style="width:100%;height: 400px">
            </div>
            <div class="item">
                <img src="img\s-13.jpg" alt="New york" style="width:100%;height: 400px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">

        <h1>Today Featured Collection</h1>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\sh-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\sh-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\sh-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\sh-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Augusta Anticipation</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\s-17.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\h-1.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\h-2.png" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\h-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>In Flash</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>
<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\b-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\b-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\b-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\b-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Awesome Creative</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\c-1.png" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\c-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\c-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\c-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Car House</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>

<br><br><br>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\g-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\g-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\g-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\g-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Spring & Summer</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\p-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\p-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\p-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\p-5.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Mobily</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\a-3.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\a-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\a-1.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\a-5.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>You Lover</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\e-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\e-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\e-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\e-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Power House</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>
<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\d-3.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\d-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\d-1.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\d-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Odel</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\l-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\l-5.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\l-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\l-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Nolimit</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>
<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\bt-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\bt-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\bt-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\bt-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Cooling</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\w-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\w-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\w-6.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\w-2.jpeg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Nester</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>
<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\de-2.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\de-1.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\de-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\de-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Fashion Bug</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\sp-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\sp-2.png" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\sp-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\sp-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Sporting Times</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>
<br><br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\t-3.png" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\t-1.png" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\t-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\t-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Hey Toys</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>

    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <a href=""> <img src="img\by-1.jpg" alt="John" style="width:100%;height: 300px"></a>
                </div>
                <div class="col-md-4">
                    <img src="img\by-2.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\by-3.jpg" alt="John" style="width:150px;height: 100px">
                </div>
                <div class="col-md-4">
                    <img src="img\by-4.jpg" alt="John" style="width:150px;height: 100px">
                </div>
            </div>
            <h1>Baby Mart</h1>
            <!--            <p class="title">CEO & Founder, Example</p>-->
            <p>Make new memories with instant cameras like a Fuji Instax Mini 25, a Leica Sofort, or a Polaroid
                instant-print camera—plus a Lomo'Instant Automat from Lomography.</p>
            <div style="margin: 24px 0;">
                <!--                <a id="h" href="#"><i class="fa fa-dribbble"></i></a>-->
                <a id="h" href="#"><i class="fa fa-twitter"></i></a>
                <!--                <a id="h" href="#"><i class="fa fa-linkedin"></i></a>-->
                <a id="h" href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>
                <button id="b">Shop Now</button>
            </p>
        </div>
    </div>


</div>

<br><br><br>
<DIV CLASS="row">
    <div class="col-md-5">
        <h1 style="text-align: center">Daily Deals</h1>
    </div>
</DIV>
<hr style="background-color: black">

<div class=" container">
    <fieldset style="border:1px solid silver;background-color: white">
        <br><br>
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: white">
                    <a href=""> <img class="card-img-top" src="img\tv-1.jpg" style="width: 100px;height: 100px"
                                     alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title" id="t">$50</h5>
                        <p class="card-text" id="tx">LG Smart Tv</p>
                        <!--                    <a href="#" class="btn btn-primary">Go somewhere</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: white">
                    <a href=""> <img class="card-img-top" src="img\tool-1.jpg" style="width: 100px;height: 100px"
                                     alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title" id="t">$15</h5>
                        <p class="card-text" id="tx">Lithium Plower.</p>
                        <!--                    <a href="#" class="btn btn-primary">Go somewhere</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: white">
                    <a href=""> <img class="card-img-top" src="img\ts-1.jpg" style="width: 100px;height: 100px"
                                     alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title" id="t">$7</h5>
                        <p class="card-text" id="tx">Wireless Neckband Handfree.</p>
                        <!--                    <a href="#" class="btn btn-primary">Go somewhere</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: white">
                    <a href=""> <img class="card-img-top" src="img\year-1.jpg" style="width: 100px;height: 100px"
                                     alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title" id="t">$10</h5>
                        <p class="card-text" id="tx">VIUS Smart T. Shirt.</p>
                        <!--                    <a href="#" class="btn btn-primary">Go somewhere</a>-->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md -6">
                <div class="pagintaion">
                    <a href=""> &laquo;</a>
                    <a href=""> 1</a>
                    <a href=""> 2</a>
                    <a href=""> 3</a>
                    <a href=""> 4</a>
                    <a href=""> 5</a>
                    <a href=""> 6</a>
                    <a href=""> 7</a>
                    <a href=""> &raquo;</a>
                </div>
            </div>
        </div>
        <br><br>
    </fieldset>
    <br><br><br>
    <div class="container" style="border: 1px solid silver">
        <br><br>
        <p id="p">Get inspired! Explore all of our <a href=""> Trending Collections.</a></p>
        <br><br>
    </div>
    <br><br>
    <div class="row">
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-8">
            <p style="font-family: 'Times New Roman';font-weight: bold;font-size: 25px">Do You Have Somthing to Sell
                ?</p>

        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-7">
            <p style="font-family: 'Times New Roman';font-weight: bold;font-size: 17px">post your add On Dealing.lk</p>

        </div>
    </div>
    <br>


    <div class="arrow" style="width: 20px">
        &#8659;
    </div>


    <div class="row">
        <div class="col-12 col-md-5"></div>
        <div class="col-12 col-md-7">
            <button class="btn"
                    style="font-weight: bold;font-family: 'Times New Roman';color: white;background-color: #23355B">Post
                Your add
            </button>

        </div>
    </div>


</div>
<!--<div class="dnSlide-main" id="con">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--    <img src="img\year-1.jpg">-->
<!--</div>-->
<br><br><br>

</div>


<?php
include_once "footer.php";
?>
</body>
</html>
