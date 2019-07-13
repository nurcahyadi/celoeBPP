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
      <div class="row justify-content-center" style="margin-top: 180px; margin-bottom: 180px;">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 100px; margin-right: 100px; margin-left: 100px;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user" method="post" action="/check">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      </div>

                      <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>


                    </form>
                    <hr>

                    <div class="text-center">
                    <a href="#">  <button type="submit" class="btn btn-primary btn-user btn-block">Create Account?</button></a>
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
