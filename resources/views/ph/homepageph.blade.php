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



    <div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">JADWAL REKAMAN</h5>
      </div>

      <div class="card-body ">
          <center>
            <h5>Tanggal</h5>
            <input type="date" name="" value="" style="margin-bottom:20px;">
          </center>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Studio</th>
                <th scope="col">Shift 1</th>
                <th scope="col">Shift 2</th>
                <th scope="col">Shift 3</th>
                <th scope="col">Shift 4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Studio 1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">Studio 2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">Studio 3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
              </tr>

            </tbody>
          </table>
        </div>
    </div>

  </body>
@endsection

@section('footer')
  @include('footer')
@endsection
