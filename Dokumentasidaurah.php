<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="css1/css.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
    <link href="plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="10" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">M Nur Alfiansyah</div> 
                    <div class="email">mnuralfiansyah@yahoo.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    <li>
						<a href="javascript:void(0);"">  <!-- ini dimulainya menu bertingkat 1 -->
                            <i class="material-icons">person</i>
                            <span>Data Pengurus dan Kader</span>
                        </a>
					</li>
					<a href="javascript:void(0);" class="menu-toggle">  <!-- ini dimulainya menu bertingkat 2 -->
                            <i class="material-icons">bookmark</i>
                            <span>Program Kerja</span>
                    </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="programkerjamingguan.php">
                                    <span>Mingguan</span>
                                </a>
                            </li>
                            <li>
                                <a href="programkerjabulanan.php">
                                    <span>Bulanan</span>
                                </a>
                            </li>
							<li>
                                <a href="programkerjatahunan.php">
                                    <span>Tahunan</span>
                                </a>
                            </li>
						</ul>
					<li class="active">
						<a href="dokumentasi.php" class="menu-toggle">  <!-- ini dimulainya menu bertingkat 3 -->
                            <i class="material-icons">camera</i>
                            <span>Dokumentasi</span>
                        </a>
                        <ul class="ml-menu">
							<li >
                                <a href="dokumentasirapat.php">
                                    <span>Rapat</span>
                                </a>
                            </li >
                            <li>
                                <a href="dokumentasitarbiyah.php">
                                    <span>Tarbiyah</span>
                                </a>
                            </li>
                            <li >
                                <a href="dokumentasitaklim.php">
                                    <span>taklim</span>
                                </a>
                            </li>
							<li class="active">
                                <a href="dokumentasidaurah.php">
                                    <span>Daurah</span>
                                </a>
                            </li>
							<li>
                                <a href="dokumentasidanlainlain.php">
                                    <span>Dan lain lain</span>
                                </a>
                            </li>
                        </ul>
					</li>	
					<a href="keuangan.php">  <!-- ini dimulainya menu bertingkat 4 -->
                            <i class="material-icons">$</i>
                            <span>Keuangan</span>
                    </a>	
					<a href="user.php">  <!-- ini dimulainya menu bertingkat 5 -->
                            <i class="material-icons">person</i>
                            <span>User</span>
                    </a>
					
					<a href="logout.php">  <!-- ini dimulainya menu bertingkat 6 -->
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                    </a>
				</ul>	
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">Material Design</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>	
						</li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside> -->
        <!-- #END# Right Sidebar -->
    </section>
<section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERY
                                <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-1.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-2.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-3.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-4.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-5.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-6.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-7.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-8.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-9.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-10.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-11.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-12.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-13.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-14.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-15.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-16.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-17.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-18.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-19.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-20.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/medias/image-gallery.js"></script>
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>