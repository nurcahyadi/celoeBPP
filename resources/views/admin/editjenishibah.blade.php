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
            @include('navbar')
          @endsection


          <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">EDIT JENIS HIBAH</h5>
            </div>

            <div class="card-body ">

              <div class="row">
                  <div class="col-sm-12">
                    <h5>Nama Jenis Hibah</h5>
                    <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea">disini</textarea>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top:20px;">
                    <h5>Penjelasan Jenis Hibah</h5>
                    <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea">disini</textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <center>
                  <a href="/jenishibah">  <button type="button" class="btn btn-primary" style="margin-top:10px;">Perbarui</button></a>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    




  </body>
@endsection

@section('footer')
  @include('footer')
@endsection
