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
            @include('navbardosen')
          @endsection


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>




    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">DAFTAR HIBAH</h5>
      </div>

      <div class="card-body ">

        <div class="row">
          <div class="col-sm-3">
            <div class="card border border-primary" style="width: 18rem;">
              <img class="card-img-top" src="img/book.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hibah E-Learning</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <center><a href="/mendaftarhibah" class="btn btn-primary ">Daftar</a></center>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border border-primary" style="width: 18rem;">
              <img class="card-img-top" src="img/book.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hibah E-Learning</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <center><a href="/mendaftarhibah" class="btn btn-primary ">Daftar</a></center>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border border-primary" style="width: 18rem;">
              <img class="card-img-top" src="img/book.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hibah E-Learning</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <center><a href="/mendaftarhibah" class="btn btn-primary ">Daftar</a></center>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card border border-primary" style="width: 18rem;">
              <img class="card-img-top" src="img/book.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hibah E-Learning</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <center><a href="/mendaftarhibah" class="btn btn-primary ">Daftar</a></center>
              </div>
            </div>
          </div>

        </div>

        </div>
    </div>





    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">STATUS PENGAJUAN</h5>
      </div>

      <div class="card-body ">
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Matkul</th>
                    <th>Nama Reviewer</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>dsadsadadasads</td>
                    <td>
                      <button type="button" class="btn btn-light">Detail</button>

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
