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
    <h5 class="m-0 font-weight-bold text-primary">FORM KOMPONEN REVIEW PENGAJUAN PROPOSAL</h5>
  </div>

  <div class="card-body ">
      <div class="row">
        <div class="col-sm-2">
          <div class="col-sm-2">
            <input type="text" name="" value="" placeholder="Komponen"> <br><br>
            <input type="text" name="" value="" placeholder="Skor Maks"><br><br>

          </div>
          <div class="col-sm-2">
            <input type="text" name="" value="" placeholder="Bobot"> <br><br>
            <input type="text" name="" value="" placeholder="Rubrik"><br><br>
            <button type="button" class="btn btn-primary" style="margin-top:10px;">Submit</button>
          </div>

        </div>
        <div class="col-sm-10">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Komponen</th>
                <th scope="col">Skor Maks</th>
                <th scope="col">Bobot</th>
                <th scope="col">Rubrik</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
              </tr>

            </tbody>
          </table>
        </div>


      </div>
    </div>
</div>


<div class="card shadow mb-4" style="margin-right:50px; margin-left:50px;">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">FORM KOMPONEN REVIEW LAPORAN KEMAJUAN</h5>
  </div>

  <div class="card-body ">
      <div class="row">
        <div class="col-sm-2">
          <div class="col-sm-2">

            <input type="text" name="" value="" placeholder="Komponen"> <br><br>
            <input type="text" name="" value="" placeholder="Skor Maks"><br><br>

          </div>
          <div class="col-sm-2">
            <input type="text" name="" value="" placeholder="Bobot"> <br><br>
            <input type="text" name="" value="" placeholder="Rubrik"><br><br>
            <button type="button" class="btn btn-primary" style="margin-top:10px;">Submit</button>
          </div>

        </div>
        <div class="col-sm-10">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Komponen</th>
                <th scope="col">Skor Maks</th>
                <th scope="col">Bobot</th>
                <th scope="col">Rubrik</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
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
@endsection

@section('footer')
  @include('footer')
@endsection
