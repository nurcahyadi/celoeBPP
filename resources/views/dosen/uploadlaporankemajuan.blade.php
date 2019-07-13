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

    

<div class="row">



        <div class="col-sm-4">
          <div class="panel-body">
              <ul class="timeline">
                  <li>
                      <div class="timeline-badge"><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4 class="timeline-title">Pengajuan Proposal</h4>
                              <p><small class="text-muted"><i class="fa fa-clock-o"></i> </small>
                              </p>
                          </div>

                      </div>
                  </li>
                  <li class="timeline-inverted">
                      <div class="timeline-badge"><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Perbaikan Proposal</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> </small>
                            </p>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="timeline-badge "><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Perjanjian Kerja Sama</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> </small>
                            </p>
                        </div>
                      </div>
                  </li>

                  <li class="timeline-inverted">
                      <div class="timeline-badge success"><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Laporan Kemajuan</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> </small>
                            </p>
                        </div>
                      </div>
                  </li>

                  <li>
                      <div class="timeline-badge "><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Laporan Akhir</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> </small>
                            </p>
                        </div>
                      </div>
                  </li>
              </ul>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">LAPORAN KEMAJUAN</h5>
            </div>

            <div class="card-body ">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
              </div>
          </div>


          <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">BUAT JADWAL</h5>
            </div>

            <div class="card-body ">
                <div class="row">
                    <div class="col-sm-4">
                      <h5>Tanggal</h5>
                      <input type="date" name="" value="">
                    </div>
                    <div class="col-sm-4">
                      <h5>Studio</h5>
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
                    <div class="col-sm-4">
                      <h5>Waktu</h5>
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
                </div>

                <center><button type="button" class="btn btn-primary" style="margin-top:20px;">Pilih</button></center>
              </div>
          </div>

          <center> <a href="/homepagedosen"> <button type="button" class="btn btn-primary" style="margin-bottom:20px; ">Tambah</button></a></center>
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
