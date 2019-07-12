@extends('template')



@section('body')

<style media="screen">
.bg {
/* The image used */
background-image: url("{{asset('img/telkom.jpeg')}}");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
</style>

  <body class="bg">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      </div>
                    
                      <a href="index.html" class="btn btn-primary btn-user btn-block">
                        Login
                      </a>

                    </form>
                    <hr>

                    <div class="text-center">
                      <a class="small" href="register.html">Create an Account!</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-2"></div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </body>


@endsection
@section('footer')
  @include('footer')
@endsection
