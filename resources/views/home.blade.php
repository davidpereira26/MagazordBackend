<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Magazord | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>        
      
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
                
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />        
             
                
    </head>

    <body data-layout="horizontal" data-topbar="colored" data-layout-size="boxed">

        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                           <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="https://www.magazord.com.br/wp-content/themes/magazord/image/logo-magazord.svg" alt="" height="50">
                                </span>
                                <span class="logo-lg ">                                   
                                    <img src="https://www.magazord.com.br/wp-content/themes/magazord/image/logo-magazord.svg" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="topnav">

                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="uil-home-alt mr-2"></i> Dashboard
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/search-people">
                                            <i class="mdi mdi-face-outline"></i> Consultar pessoas
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/search-contact">
                                            <i class="mdi mdi-email-outline"></i> Consultar contatos
                                        </a>
                                    </li>

                                    <li id="time" class="mt-3 text-muted clock" style="margin-left:250px !important;font-size: 15px;"></li>
                                                                
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4>                                    

                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <div id="total-revenue-chart"></div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">99</span></h4>
                                            <p class="text-muted mb-0">Total de pessoas</p>
                                        </div>      
                                    </div>
                                </div>
                            </div> 

                             <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <div id="Total de contatos-chart"> </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">99</span></h4>
                                            <p class="text-muted mb-0">Total de contatos</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-0">
                                <div class="text-sm-right d-none d-sm-block">
                                    Magazord - Test Back-end - David Pereira<i class="fa fa-heart text-danger animat ml-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>     
                    
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>        
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/dashboard.init.js"></script> 
        <script src="assets/js/app.js"></script>  
        <script src="assets/js/print-text.js"></script>  
        <style>body {background-color: #22252f !important;}</style>
        

</body>

</html>