<?php
session_start();

$_SESSION['cur_page'] = 3;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="icon" type="image/gif" href="../assets/icon.png" />
    <title>
        Rsys
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/material-dashboard.min.css">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/../assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="">
    <div class="wrapper">
        <?php include '../sidebar.php'; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent   navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand">Register</a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: fs();">
                                    <i class="material-icons">fullscreen</i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification"><?php ?>5</span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <?php ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">
                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                        Register!</h4>
                                    <p class="card-category">Fill out the form</p>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Initial</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">

                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Age</label>
                                                    <input name="age" type="number" min="0" step="1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                                                            Male
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                                            Female
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                                            N/A
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">

                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        Street</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Baranggay</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">City/Town</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Province</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <!--
                                                <div class="col-md-1" style="display: inline-block; ">
                                                    <div class="form-group">
                                                        <label class="bmd-label">+639</label>
                                                    </div>
                                                </div>
                                                -->
                                                <div class="form-group" style="display: inline-block; width: 20%">
                                                    <input type="text" class="form-control" value="+639" style="color: grey" disabled>
                                                </div>
                                                <div class="form-group" style="display: inline-block; width: 75%">
                                                    <label class="bmd-label-floating">Contact Number</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                             Email Address</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">
                                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                                            Facebook Account Name/Link
                                                    </label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Referrer Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Agent Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Broker Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <center style="margin-top: 25px">
                                            <button type="submit" class="btn btn-primary btn-lg btn-round">Submit</button>
                                        </center>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                        <img class="img" src="../assets/terms.jpg" />
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">Terms and Agreements</h6>
                                    <h4 class="card-title">Data Privacy</h4>
                                    <p class="card-description">
                                        Your inputted data will be treated with utmost care and privacy. The organization takes a serious responsibility in safe-guarding your personal information in its databases.
                                        The information will be used for the organization's processes of monitoring registrants and to identify brokers, agents and referral men for incentives.
                                    </p>
                                    <small>Know your rights on <a href="https://privacy.gov.ph/know-your-rights/" style="color: green">data privacy</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <div class="copyright pull-left">
                        &copy; Mark
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.initDashboardPageCharts();
        demo.initCharts();
    });
</script>
<script>
    function fs(){
        var elem = document.documentElement;
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen();
        }
    }
</script>
</html>
