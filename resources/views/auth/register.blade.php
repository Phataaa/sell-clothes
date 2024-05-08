@extends('auth.layout');
@section('content')
{{-- <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('background.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="{{route('register.store')}}" method="POST">
                    @if ($errors->any())

                    <div class="alert alert-danger">
                
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                
                    <ul>
                
                    @foreach ($errors->all() as $error)
                
                    <li>{{ $error }}</li>
                
                    @endforeach
                
                    </ul>
                
                    </div>
                
                    @endif
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Full Name</label>
                      <input type="text" class="form-control" name="full_name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" name="user_name">
                    </div>
                    
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Birthday</label>
                        <input type="text" class="form-control" name="birthday">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" name="number">
                    </div>
                    <div>
                        <label for="seller">Seller</label>
                        <input type="radio" name="role" id="" value="seller" class="seller">
                        <label for="buyer">Buyer</label>
                        <input type="radio" name="role" id="" value="buyer" class="seller">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Sign Up">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script> --}}
  <style>
    .form-edit label{
      font-size: 20px;
      font-weight: bold;
      color: black;
    }
    .form-edit input[type="text"], input[type="password"]{
      height: 40px;
      width: 350px;
      margin-bottom: 10px;
      border-radius: 5px; 
      margin-left: 5px;
    }
    .form-edit input[type="email"]{
      height: 40px;
      width: 350px;
      margin-bottom: 10px;
      border-radius: 5px; 
      margin-left: 5px;
    }
    .form-edit input[type="date"]{
      height: 40px;
      width: 350px;
      margin-bottom: 10px;
      border-radius: 5px; 
      margin-left: 5px;
    }
  </style>
  <main class="main-content  mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('background.jpg'); background-size: cover;">
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Register</h4>
                    <p class="mb-0">Enter your email and password to register</p>
                  </div>
                  <div class="card-body">
                    <form action="{{route('register.store')}}" method="POST">
                      @if ($errors->any())
  
                      <div class="alert alert-danger">
                  
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  
                      <ul>
                  
                      @foreach ($errors->all() as $error)
                  
                      <li>{{ $error }}</li>
                  
                      @endforeach
                  
                      </ul>
                  
                      </div>
                  
                      @endif
                      @csrf
                      <div class="form-edit">
                        <label for="form-edit">Full Name</label><br>
  
                        <input type="text" name="full_name" value="">
                      </div>
                      <div class="form-edit">
                          <label >User Name</label>
                          <input type="text" name="user_name" value="">
                      </div>
                      <div class="form-edit">
                        <label >Password</label>
                        <input type="password" name="password" value="">
                    </div>
                      <div class="form-edit">
                        <label>Email</label><br>
                        <input type="email" name="email" value="">
                      </div>
                      
                      <div class="form-edit">
                          <label >Birthday</label><br>
                          <input type="date" name="birthday" value="">
                      </div>
                      <div class="form-edit">
                          <label >Address</label>
                          <input type="text" name="address" value="">
                      </div>
                      <div class="form-edit">
                          <label class="form-label">Number</label>
                          <input type="text" name="number" value="">
                      </div>
                      <div>
                          
                          <label for="buyer">Buyer</label>
                          <input type="radio" name="role" id="" value="buyer" class="seller">
                      </div>
                      <div class="form-check form-check-info text-start ps-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      <div class="text-center">
                        <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Sign Up">
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                      Already have an account?
                      <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
@endsection