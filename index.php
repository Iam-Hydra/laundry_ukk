<?php include "assets/include/header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laundry</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />



    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
  </head>


  
<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="app-brand2" background-color = "#4c84ff";>
                            <a href="/index.html">
                                <svg class="brand-icon"  width="30" height="33" >
                    <img src=" assets/img/logo.jpg" width="40" height="40">
                                </svg>
                                <span class="brand-name">Hydra Laundry</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                    

                        <h4 class="text-dark mb-5">Login Slurrr</h4>
                        <form method="POST" action="login.php">
                            <div class="row">
                                <?php if (isset($_GET['msg'])): ?>
                                <div class="wrap-input100 m-b-15 text-center">
                                    <p class="text-danger"><span class="lnr lnr-cross-circle"></span> <?= $_GET['msg'];  ?></p>
                                </div>
					            <?php endif ?>

					<div class="form-group col-md-12 mb-4" 
                        data-validate = "Username is required">
						<input class="form-control input-lg" type="text" name="username" required class="form-control input-lg" id="email" placeholder="Username">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					<div class="form-group col-md-12 mb-4" data-validate = "Password is required">
						<input class="form-control input-lg" type="password" name="password" placeholder="Password">
							<span class="lnr lnr-lock"></span>
						</span>
					            </div>
                                <div class="col-md-12">
                                    
                                        </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-dark btn-block mb-4"><a href=" kasir/kasir.php" class="login" > Sign In</a></button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; 2021 Copyright UKK Laundry by
                <a class="text-dark" href="https://www.instagram.com/chydra13" target="_blank">Hydra</a>.
            </p>
        </div>
    </div>


    <input type="submit" href="kasir/kasir.php" class="btn btn-primary">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/toaster/toastr.min.js"></script>
    <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/plugins/ladda/spin.min.js"></script>
    <script src="assets/plugins/ladda/ladda.min.js"></script>
    <script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/jekyll-search.min.js"></script>
    <script src="assets/js/sleek.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/date-range.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/custom.js"></script>
</body>