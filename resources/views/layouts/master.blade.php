
<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>YourServe | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Your Serve</title>


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
    
      <!-- Navbar -->
     @include('navbar')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
  @include('sidebar')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
                  {{-- <!-- Content Header (Page header) -->
                    <div class="content-header">
                      <div class="container-fluid">
                            <!-- Dashbord boxes -->
                            <div class="row">
                                    <div class="col-12 col-sm-6 col-md-3">
                                      <div class="info-box">
                                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                          
                                        <div class="info-box-content">
                                          <span class="info-box-text">CPU Traffic</span>
                                          <span class="info-box-number">
                                            10
                                            <small>%</small>
                                          </span>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-3">
                                      <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                          
                                        <div class="info-box-content">
                                          <span class="info-box-text">Likes</span>
                                          <span class="info-box-number">41,410</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                          
                                    <!-- fix for small devices only -->
                                    <div class="clearfix hidden-md-up"></div>
                          
                                    <div class="col-12 col-sm-6 col-md-3">
                                      <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                          
                                        <div class="info-box-content">
                                          <span class="info-box-text">Sales</span>
                                          <span class="info-box-number">760</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-3">
                                      <div class="info-box mb-3">
                                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                          
                                        <div class="info-box-content">
                                          <span class="info-box-text">New Members</span>
                                          <span class="info-box-number">2,000</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                  </div>
                      
                      </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header --> --}}
      
             <!-- Add your commponent here -->

             <router-view></router-view>

             <!-- set progressbar -->
        <vue-progress-bar></vue-progress-bar>
            
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Main Footer -->
     @include('footer')

      <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
    </body>