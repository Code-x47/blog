<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHBOARD Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Blog2/assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Blog2/assets2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Blog2/assets2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Blog2/assets2/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="Blog2/assets2/css/regStyle.css" />
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                
                    <div id="adminProfile">
                   
                    @yield("adminProfile")
                    
                    </div>
                    
                    {{-- <div class="position-relative">
                        <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">My Admin</h6>
                       
                    </div> --}}
                
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                   <!--  <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Business</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bizpost" class="dropdown-item">Create-Post</a>
                            <a href="#adminCont2" class="dropdown-item">View-Posts</a>
                            <a href="#adminCont3" class="dropdown-item">Manage Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Politics</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="polpost" class="dropdown-item">Create-Post</a>
                            <a href="viewpol" class="dropdown-item">View-Post</a>
                            <a href="managepol" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Health</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="healthpost" class="dropdown-item">Create-Post</a>
                            <a href="viewpost" class="dropdown-item">View-Posts</a>
                            <a href="managehealth" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Education</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="edupost" class="dropdown-item">Create-Post</a>
                            <a href="viewedu" class="dropdown-item">View-Post</a>
                            <a href="manageEdu" class="dropdown-item">Manage-Edu</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Sports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sptpost" class="dropdown-item">Create-Post</a>
                            <a href="viewsci" class="dropdown-item">View-Post</a>
                            <a href="managesci" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Foods</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="foodpost" class="dropdown-item">Create-Post</a>
                            <a href="viewfood" class="dropdown-item">View-Post</a>
                            <a href="managefood" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Entertainment</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="entpost" class="dropdown-item">Create-Post</a>
                            <a href="viewent" class="dropdown-item">View-Post</a>
                            <a href="manageEnt" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Latest</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="latestpost" class="dropdown-item">Create-Post</a>
                            <a href="#adminCont2" class="dropdown-item">View-Post</a>
                            <a href="#adminCont3" class="dropdown-item">Manage-Post</a>
                            <a href="blank.html" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        <div id="navDiv">
          @yield('navContent')
         </div>
            <!-- Navbar Start -->
            {{-- <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Doxzy</span>
                        </a>
                      
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
             --}}
            <!-- Navbar End -->
    

<!-- Create Posts Starts-->

<div id="adminCont1" style="text-align:center">
  


  @yield("admincontent")
  
</div>      
<!-- Create Posts Ends-->


<!-- View Posts Starts-->
<div id="adminCont2">
@yield('admincontent2')
</div>
<!-- View Posts Ends-->

<!-- Manage Posts Starts-->
<div id="adminCont3">
@yield('admincontent3')
</div>
<!-- Manage Posts Ends-->





            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4" style="position:relative; left:-3%">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Trendy Newz</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">Tech 360</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">Tech 360</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Blog2/assets2/lib/chart/chart.min.js"></script>
    <script src="Blog/2/assets2/js/other.js"><script>
    <script src="Blog2/assets2/lib/easing/easing.min.js"></script>
    <script src="Blog2/assets2/lib/waypoints/waypoints.min.js"></script>
    <script src="Blog2/assets2/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Blog2/assets2/lib/tempusdominus/js/moment.min.js"></script>
    <script src="Blog2/assets2/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="Blog2/assets2/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="Blog2/assets2/js/main.js"></script>
</body>

</html>