
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <style>
      .dash{
        background-color: aquamarine;
        width: 25%;
        height: 150px;
        text-align: center;
        float: left;
        margin: 20px;
        padding: 30px;
      }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 @include('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.sidebar')
    <!--end Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
      

          <section>
      <div class="dash">
        <h3>4</h3>
        <h3>Parcel Received</h3>
      </div>

      <div class="dash">
        
        <h3>Customer List</h3>
       <p>Full Details</p>
      </div>

      <div class="dash">
        <h3>500</h3>
        <h3>Total Parcel</h3>
        <p>Full Details></p>
      </div>
      <div class="dash">
       
        <h3>Branch</h3>
        <p>Full Details</p>
      </div>
      <div class="dash">
        <h3></h3>
        <h3>Driver</h3>
        <p>Driver Details</p>
      </div>
    </section>
      
      <!-- /.container-fluid -->
    </section>


    


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
   @yield('content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- start footer -->
 @include('layouts.footer')
<!-- end footer -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
