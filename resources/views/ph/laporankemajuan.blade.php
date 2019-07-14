@extends('template')

@section('body')
  <body id="page-top">

    @section('header')
      @include('navbarph')
    @endsection

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">LAPORAN KEMAJUAN</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Nama Matkul</th>
                <th>Nama Reviewer</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td>adasdas</td>
                <td>sdasdas</td>
                <td>asdadad</td>
                <td>
                <a href="/downloadlaporankemajuanph">  <button type="button" class="btn btn-light">Detail</button></a>
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
