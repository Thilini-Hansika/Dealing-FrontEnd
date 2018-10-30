<!doctype html>
<html lang="en">
<head>
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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\adds.css">
    <!--    <script src="js/adds.js"></script>-->

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <title>Document</title>
</head>
<body>
<?php
//include_once "navbar.php";
?>

<div class="container" id="c" style="background-color: white;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12" style="position: static;background-color: white;">
            <img src="img\jjj.jpg" id="image1">
        </div>
    </div>

    <br>
<div class="row">
    <div class="navbar navbar-default" style="border: ">


        <div class="navbar-btn navbar-left btn-group">
            <button class="btn btn-default dropdown-toggle btn-primary" type="button" data-toggle="dropdown"
                    style="background-color: #3B5998">
                <span class="glyphicon glyphicon-search"></span>
                <span class="nav-label"> Select  Location</span>
                <span class="fa fa-caret-down"></span>
            </button>
            <ul id="search-option" class="dropdown-menu pull-left" role="menu">
                <li>
                    <a href="#" data-searchtype="search-user" data-placeholder="Enter User Name (first or last)">
                        <span class="glyphicon glyphicon-user"></span>
                        <span class="nav-label">User</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-searchtype="search-org" data-placeholder="Enter Organization Name">
                        <span class="fa fa-building-o"></span>
                        <span class="nav-label">Organization</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-searchtype="search-kb" data-placeholder="Enter Search Terms">
                        <span class="fa fa-book"></span>
                        <span class="nav-label">KnowledgeBase</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-searchtype="search-venue" data-placeholder="Enter Venue Name">
                        <span class="fa fa-map-marker"></span>
                        <span class="nav-label">Venue</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-searchtype="search-pl" data-placeholder="Enter Private Label">
                        <span class="fa fa-ticket"></span>
                        <span class="nav-label">Private Label</span>
                    </a>
                </li>
            </ul>
        </div>

        <form class="navbar-form" style="background-color: #3B5998">
            <div class="form-group" style="display:inline;">

                <div class="input-group" style="display:table;">

        		<span class="input-group-btn btn-block" style="width:1%;">

                    <button class="btn btn-default dropdown-toggle btn-primary" type="button" data-toggle="dropdown"
                            style="background-color: #3B5998">
						<span class="glyphicon glyphicon-search"></span>
						<span class="nav-label"> Selct job Category</span>
						<span class="fa fa-caret-down"></span>
					</button>

                    <ul id="search-option" class="dropdown-menu pull-left" role="menu">
						<li>
							<a href="#" data-searchtype="search-user"
                               data-placeholder="Enter User Name (first or last)">
								<span class="glyphicon glyphicon-user"></span>
								<span class="nav-label">User</span>
							</a>
						</li>
						<li>
							<a href="#" data-searchtype="search-org" data-placeholder="Enter Organization Name">
							<span class="fa fa-building-o"></span>
							<span class="nav-label">Organization</span>
							</a>
						</li>
						<li>
							<a href="#" data-searchtype="search-kb" data-placeholder="Enter Search Terms">
							<span class="fa fa-book"></span>
							<span class="nav-label">KnowledgeBase</span>
							</a>
						</li>
						<li>
							<a href="#" data-searchtype="search-venue" data-placeholder="Enter Venue Name">
							<span class="fa fa-map-marker"></span>
							<span class="nav-label">Venue</span>
							</a>
						</li>
						<li>
							<a href="#" data-searchtype="search-pl" data-placeholder="Enter Private Label">
							<span class="fa fa-ticket"></span>
							<span class="nav-label">Private Label</span>
							</a>
						</li>
					</ul>

                </span>

                    <input class="form-control" name="search" placeholder="Search Here" autocomplete="off"
                           autofocus="autofocus" style="width: " type="text">

                    <div class="input-group-btn btn-primary  navbar-btn "
                         style=" border-radius:;background-color: #3B5998 ;">
                        <button class="btn btn-primary btn-nav glyphicon glyphicon-search"
                                style="background-color: #3B5998">

                        </button>
                    </div>


                </div>
        </form>


    </div>

    <div class="row">
        <div class="container">
            <div id="pn-2" class="col-md-3 col-sm-3 col-lg-3 " style="border: 1px solid #D3D3D3">
                <h3 id="h3-1" style="font-family: carme;font-weight: bold">Items By Category</h3><br>
                <div class=" row">
                    <div class="col-md-1 col-lg-1 col-sm-1"></div>
                    <div class="col-md-9 col-sm-9 col-lg-9 " style="border: #D3D3D3 solid 1px">
                        <div class="side-menu">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="side-menu-container">
                                    <ul class="nav">

                                        <li class="nav-title"><a href="#"><span class="glyphicon glyphicon-home"
                                                                                aria-hidden="true"></span> Menu Home</a>
                                        </li>

                                        <li class="panel panel-default" id="dropdown">
                                            <a data-toggle="collapse" href="#about">
                                                Location <span class="caret"></span>
                                            </a>
                                            <div id="about" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="nav navbar-nav">
                                                        <li><a href="#">Galle</a></li>
                                                        <li><a href="#">Hambanthota</a></li>

                                                        <li><a href="#">Mathara</a></li>
                                                        <li><a href="#">Kaluthara</a></li>
                                                        <li><a href="#">Colombo</a></li>
                                                        <li><a href="#">Gampaha</a></li>
                                                        <li><a href="#">Anuradhapura</a></li>
                                                        <li><a href="#">Polonnaruwa</a></li>
                                                        <li><a href="#">Trinco</a></li>
                                                        <li><a href="#">Hambanthota</a></li>
                                                        <li><a href="#">Jaffna</a></li>
                                                        <li><a href="#">Kandy</a></li>
                                                        <li><a href="#">Ampara</a></li>
                                                        <li><a href="#">Batticoloa</a></li>
                                                        <li><a href="#">Mannar</a></li>
                                                        <li><a href="#">Kilinochchi</a></li>
                                                        <li><a href="#">Kagalle</a></li>
                                                        <li><a href="#">Mathale</a></li>
                                                        <li><a href="#">Monaragala</a></li>
                                                        <li><a href="#">Mulativ</a></li>
                                                        <li><a href="#">NuwaraEliya</a></li>
                                                        <li><a href="#">Puttalam</a></li>
                                                        <li><a href="#">Rathnapura</a></li>
                                                        <li><a href="#">Badulla</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </nav>
                        </div>


                    </div>
                    <div class="col-md-2 col-sm-3 col-lg-3"></div>
                </div>


                <div class=" row">
                    <div class="col-md- col-lg-1 col-sm-1"></div>
                    <div id="pn-1" class="col-md-9 col-sm-9 col-lg-9  " style="border: #D3D3D3 solid 1px">
                        <div class="side-menu">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="side-menu-container">
                                    <ul class="nav">

                                        <!--                                    <li class="nav-title"><a href="#"><span class="glyphicon glyphicon-home"-->
                                        <!--                                                                            aria-hidden="true"></span> Menu Home</a>-->
                                        <!--                                    </li>-->

                                        <li class="panel panel-default" id="dropdown">
                                            <a data-toggle="collapse" href="#ab">
                                                Category <span class="caret"></span>
                                            </a>
                                            <div id="ab" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="nav navbar-nav">
                                                        <li><a href="#">Galle</a></li>
                                                        <li><a href="#">Hambanthota</a></li>

                                                        <li><a href="#">Mathara</a></li>
                                                        <li><a href="#">Kaluthara</a></li>
                                                        <li><a href="#">Colombo</a></li>
                                                        <li><a href="#">Gampaha</a></li>
                                                        <li><a href="#">Anuradhapura</a></li>
                                                        <li><a href="#">Polonnaruwa</a></li>
                                                        <li><a href="#">Trinco</a></li>
                                                        <li><a href="#">Hambanthota</a></li>
                                                        <li><a href="#">Jaffna</a></li>
                                                        <li><a href="#">Kandy</a></li>
                                                        <li><a href="#">Ampara</a></li>
                                                        <li><a href="#">Batticoloa</a></li>
                                                        <li><a href="#">Mannar</a></li>
                                                        <li><a href="#">Kilinochchi</a></li>
                                                        <li><a href="#">Kagalle</a></li>
                                                        <li><a href="#">Mathale</a></li>
                                                        <li><a href="#">Monaragala</a></li>
                                                        <li><a href="#">Mulativ</a></li>
                                                        <li><a href="#">NuwaraEliya</a></li>
                                                        <li><a href="#">Puttalam</a></li>
                                                        <li><a href="#">Rathnapura</a></li>
                                                        <li><a href="#">Badulla</a></li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <div id="pn-2" class="col-md-7 col-sm-7 col-lg-7" style=" border: 1px solid silver ">


                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">

                            <!-- Fluid width widget -->
                            <div class="panel " style="border: ">
                                <div class="panel-heading">
                                    <h3 style="font-family: carme" class="panel-title">
                                        <span class="glyphicon "></span> 
                                        Showing Adds
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="media-list">

                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-1.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vecansy for Economic Research Office
                                                    <br>
                                                    <small>
                                                        Coconut development Authority
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>
                                        <hr style="border: 1px solid silver;">
                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-2.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vacansy for Factroy office /Senior Asst , Factrory Officer
                                                    <br>
                                                    <small>
                                                        Value plantation pvt ltd
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>
                                        <hr style="border: 1px solid silver;">
                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-3.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vacansy for Factroy office /Senior Asst , Executive Officer
                                                    <br>
                                                    <small>
                                                        Value plantation pvt ltd
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>

                                        <hr style="border: 1px solid silver;">


                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-5.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vecansy for Economic Research Office
                                                    <br>
                                                    <small>
                                                        Coconut development Authority
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>
                                        <hr style="border: 1px solid silver;">
                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-6.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vacansy for Factroy office /Senior Asst , Factrory Officer
                                                    <br>
                                                    <small>
                                                        Value plantation pvt ltd
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>
                                        <hr style="border: 1px solid silver;">
                                        <li class="media">
                                            <div class="media-left">
                                                <img src="img\small-8.jpg" class="img-circle">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    vacansy for Factroy office /Senior Asst , Executive Officer
                                                    <br>
                                                    <small>
                                                        Value plantation pvt ltd
                                                    </small>
                                                </h4>
                                                <p>
                                                    Colombo n jobs in sri lanka
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">View</button>
                                                <button style="background-color: #10909a;color: white"
                                                        class="btn btn-default">Bid Now
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                            <span style="font-family: carme"
                                                  class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                          <span class="page-link">
                                              2
                                          <span class="sr-only">(current)</span>
                                              </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a style="font-family: carme" class="page-link"
                                                   href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End fluid width widget -->


                        </div>
                    </div>

                </div>


            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4"></div>
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-12">
                    <div class="text-center service-text">
                        <img src="img\newlogo.png">
                        <h3>Post Your Add</h3>
                        <h4>Bid Now With Dealing.lk</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus leo orci.</p>

                        <div class="btn col-md-4 col-md-offset-4">
                            <a href="#" class="btn btn-lg btn-danger">Post Your Add</a>
                        </diV>
                    </div>
                </div>
                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4"></div>
            </div>
        </div>

    </div>


</div>
</div></div>
<script>


    $(document).ready(function () {
        $('.btn.btn-lg.btn-danger').hover(function () {
            $(this).html('Bid Now');
        }, function () {
            $(this).html('Bid Now');
        });
    });


</script>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>