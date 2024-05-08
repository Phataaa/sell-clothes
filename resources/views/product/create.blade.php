@extends('auth.layout');
@section('content');
{{-- <main class="main-content  mt-0">
  
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="card-body">
                <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
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
                    <h1 style="text-align: center">Create Product</h1>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Quanity</label>
                    <input type="text" class="form-control" name="quanity">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="price">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Color</label>
                    <input type="text" class="form-control" name="color">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Gender</label>
                    <input type="text" class="form-control" name="gender">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <select class="form-control" name="category" >
                      <option value="" disabled selected hidden>Category</option>
                      
                      @foreach ($Category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>                          
                      @endforeach
                    </select>
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                    <input type="textarea" class="form-control" name="description">
                  </div>
                  <div>
                    <input type="hidden" name="user" value="1">
                  </div>
                  <div>
                    <input type="file" name="image[]" id="" multiple>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
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
    .form-edit input[type="text"]{
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
    .form-edit select{
      height: 40px;
      width: 350px;
      margin-bottom: 10px;
      border-radius: 5px; 
      margin-left: 5px;
    }
    .form-edit input[type="textarea"]{
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
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Create Product</h4>
                    <p class="mb-0">Enter your email and password to register</p>
                  </div>
                  <div class="card-body">
                    <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="form-edit">Name</label><br>
  
                        <input type="text" name="name" value="">
                      </div>
                      <div class="form-edit">
                          <label >Quanity</label>
                          <input type="text" name="quanity" value="">
                      </div>
                      
                      <div class="form-edit">
                        <label>Brand</label><br>
                        <input type="text" name="brand" value="">
                      </div>
                      
                      <div class="form-edit">
                          <label >Color</label><br>
                          <input type="text" name="color" value="">
                      </div>
                      <div class="form-edit">
                        <label >Price</label><br>
                        <input type="text" name="price" value="">
                    </div>
                      <div class="form-edit">
                          <label >Gender</label>
                          <input type="text" name="gender" value="">
                      </div>
                      <div class="form-edit">
                          <label class="form-label">Category</label>
                        
                            <select class="form-edit" name="category" >
                              <option value="" disabled selected hidden>Category</option>
                             
                              @foreach ($Category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>                          
                              @endforeach
                            </select>
                          
                      </div>
                      <div>
                        <input type="hidden" name="user" value="1">
                      </div>
                      <div>
                        <input type="file" name="image[]" id="" multiple>
                      </div>
                      <div class="form-edit">
                        <label>Description</label><br>
                        <input type="textarea" name="description"  value="">
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
    <!-- Control Center for Material Dashboard: parallax effects, scripts fo
@endsection;