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
              <h5 class="m-0 font-weight-bold text-primary">TAMBAH JENIS HIBAH</h5>
            </div>

            <div class="card-body ">

              <div class="row">
                  <div class="col-sm-12">
                    <h5>Nama Jenis Hibah</h5>
                    <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top:20px;">
                    <h5>Penjelasan Jenis Hibah</h5>
                    <div class="input-group">
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <center>
                    <button type="button" class="btn btn-primary" style="margin-top:10px;">Submit</button>
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

  


    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Jenis Hibah</th>
                <th>Penjelasan Jenis Hibah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>
                <a href="/editjenishibah"><button type="button" class="btn btn-info">Edit</button></a>
                  <button type="button" class="btn btn-danger" style="margin-left:10px;">Delete</button>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </body>
@endsection

@section('footer')
  @include('footer')
@endsection
