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
              <h5 class="m-0 font-weight-bold text-primary">TAMBAH HIBAH</h5>
            </div>

            <div class="card-body ">

              <div class="row">
                <div class="col-sm-3">
                  <h6>Jenis Hibah</h6>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jenis Hibah
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-3">
                  <h6>Tanggal Awal</h6>
                  <input type="date" name="tanggalawal" value="">
                </div>
                <div class="col-sm-3">
                  <h6>Tanggal Akhir</h6>
                  <input type="date" name="tanggalakhir" value="">
                </div>
                <div class="col-sm-3">
                  <h6>Dana Hibah</h6>
                  <input type="Text" name="dana hibah" value="">
                </div>

              </div>
              <hr>

              <div class="card">
                <div class="card-header">
                  Quote
                </div>
                <div class="card-body">

                    <div class="row">
                      <div class="col-sm-4">
                        <h5>Status Pengajuan</h5>
                        <h6>Pengajuan Proposal</h6>
                        <br>
                        <h6 style="margin-top:8px;">Perbaikan Proposal</h6>
                        <br>
                        <h6 style="margin-top:8px;">Perjanjian Kerjasama</h6>
                        <br>
                        <h6 style="margin-top:6px;">Laporan Kemajuan</h6>
                        <br>
                        <h6 style="margin-top:6px;">dsasda</h6>
                      </div>
                      <div class="col-sm-4">
                        <h5>Tanggal Awal</h5>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                      </div>
                      <div class="col-sm-4">
                        <h5>Tanggal Akhir</h5>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                        <br><br>
                        <input type="date" name="" value="">
                      </div>
                    </div>

                  </div>

                </div>

                <center>
              <a href="/hibah"> <button type="button" class="btn btn-primary" style="margin-top:10px;">Perbarui</button></a>
                </center>
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
