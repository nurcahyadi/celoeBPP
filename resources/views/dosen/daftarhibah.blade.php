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
                      <div class="timeline-badge success"><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4 class="timeline-title">Pengajuan Proposal</h4>
                              <p><small class="text-muted"><i class="fa fa-clock-o"></i> 01 Juni 2019 - 03 Juni 2019</small>
                              </p>
                          </div>

                      </div>
                  </li>
                  <li class="timeline-inverted">
                      <div class="timeline-badge "><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Perbaikan Proposal</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 01 Juni 2019 - 03 Juni 2019</small>
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
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i>01 Juni 2019 - 03 Juni 2019</small>
                            </p>
                        </div>
                      </div>
                  </li>

                  <li class="timeline-inverted">
                      <div class="timeline-badge "><i class="fa fa-check"></i>
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Laporan Kemajuan</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 01 Juni 2019 - 03 Juni 2019</small>
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
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 01 Juni 2019 - 03 Juni 2019</small>
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
              <h5 class="m-0 font-weight-bold text-primary">BORANG PROPOSAL</h5>
            </div>

            <div class="card-body ">
                <div class="row">
                  <div class="col-sm-6">
                    <h5>Kode Mata Kuliah</h5>
                    <h5>Nama Mata Kuliah</h5>
                    <h5>Program Studi</h5>
                    <h5>Fakultas</h5>
                    <h5>Semester Pengampuan</h5>
                    <h5>Nama Ketua Tim</h5>
                    <h5>Nama Anggota Tim 1</h5>
                    <h5>Nama Anggota Tim 2</h5>
                    <h5>Nama Kelompok Keahlian</h5>
                    <h5>Jumlah Pokok Bahasan</h5>
                    <h5>Upload Konten Proposal</h5>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="text" name="" value=""><br><br>
                    <input type="file" name="" value="">

                  </div>

                  <center> <a href="/homepagedosen"> <button type="button" class="btn btn-primary">Submit</button></a> </center>
                </div>
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
