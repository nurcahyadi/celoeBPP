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
        <h6 class="m-0 font-weight-bold text-primary">Laporan Kemajuan</h6>
      </div>
      <div class="card-body">
        <center>
          <h5>Nilai : 80</h5>
          <button type="button" class="btn btn-primary">Download</button>
        </center>
      </div>
    </div>

  </body>
@endsection

@section('footer')
  @include('footer')
@endsection
