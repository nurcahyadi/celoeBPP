@extends('template')

@section('body')
  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          @section('header')
            @include('navbarph')
          @endsection

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>




    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">UPLOAD BAP</h5>
      </div>

      <div class="card-body ">

        <div class="card">
          <div class="card-header">
            Upload Upload BAP
          </div>
          <div class="card-body">

                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
            </div>

          </div>

          <center>
        <a href="/uploadpks"> <button type="button" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px;">Submit</button></a>
          </center>

        </div>

        </div>


                      </div>
                  </div>


                </div>
                <!-- End of Main Content -->


              </div>
              <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
  </body>
@endsection

@section('footer')
  @include('footer')
@endsection
