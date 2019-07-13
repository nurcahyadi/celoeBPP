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
            @include('navbarreviewer')
          @endsection

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>




    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">FORM KOMPONEN REVIEW PROPOSAL PERBAIKAN</h5>
      </div>

      <div class="card-body ">
          <div class="row">
            <div class="col-sm-4">
              <h5>Latar Belakang</h5>
              <input type="text" name="" value="">
              <h5>Isi Proposal</h5>
              <input type="text" name="" value="">
              <h5>Timeline</h5>
              <input type="text" name="" value="">
            </div>

            <div class="col-sm-8">
              <h5>Feedback</h5>
              <textarea name="name" rows="8" cols="80"></textarea>
            </div>

          </div>
          <center><a href="/nilaiperbaikan"><button type="button" class="btn btn-primary">Submit</button></a> </center>
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
