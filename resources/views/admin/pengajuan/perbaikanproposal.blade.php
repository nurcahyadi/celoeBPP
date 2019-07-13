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
                <th>Nama Dosen</th>
                <th>Nama Hibah</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td>adasdas</td>
                <td>sdasdas</td>
                <td>27-04-97</td>
                <td>27-04-97</td>
                <td>
                  <span class="badge badge-danger">Perbaiki</span>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
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
