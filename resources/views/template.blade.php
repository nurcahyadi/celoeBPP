<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">

      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head>

  <style media="screen">
  .timeline {
list-style: none;
padding: 20px 0 20px;
position: relative;
}
.timeline:before {
top: 0;
bottom: 0;
position: absolute;
content: " ";
width: 3px;
background-color: #eeeeee;
left: 50%;
margin-left: -1.5px;
}
.timeline > li {
margin-bottom: 20px;
position: relative;
}
.timeline > li:before,
.timeline > li:after {
content: " ";
display: table;
}
.timeline > li:after {
clear: both;
}
.timeline > li:before,
.timeline > li:after {
content: " ";
display: table;
}
.timeline > li:after {
clear: both;
}
.timeline > li > .timeline-panel {
width: 50%;
float: left;
border: 1px solid #d4d4d4;
border-radius: 2px;
padding: 20px;
position: relative;
-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li.timeline-inverted + li:not(.timeline-inverted),
.timeline > li:not(.timeline-inverted) + li.timeline-inverted {
margin-top: -60px;
}

.timeline > li:not(.timeline-inverted) {
padding-right:90px;
}

.timeline > li.timeline-inverted {
padding-left:90px;
}
.timeline > li > .timeline-panel:before {
position: absolute;
top: 26px;
right: -15px;
display: inline-block;
border-top: 15px solid transparent;
border-left: 15px solid #ccc;
border-right: 0 solid #ccc;
border-bottom: 15px solid transparent;
content: " ";
}
.timeline > li > .timeline-panel:after {
position: absolute;
top: 27px;
right: -14px;
display: inline-block;
border-top: 14px solid transparent;
border-left: 14px solid #fff;
border-right: 0 solid #fff;
border-bottom: 14px solid transparent;
content: " ";
}
.timeline > li > .timeline-badge {
color: #fff;
width: 50px;
height: 50px;
line-height: 50px;
font-size: 1.4em;
text-align: center;
position: absolute;
top: 16px;
left: 50%;
margin-left: -25px;
background-color: #999999;
z-index: 100;
border-top-right-radius: 50%;
border-top-left-radius: 50%;
border-bottom-right-radius: 50%;
border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
border-left-width: 0;
border-right-width: 15px;
left: -15px;
right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
border-left-width: 0;
border-right-width: 14px;
left: -14px;
right: auto;
}
.timeline-badge.primary {
background-color: #2e6da4 !important;
}
.timeline-badge.success {
background-color: #3f903f !important;
}
.timeline-badge.warning {
background-color: #f0ad4e !important;
}
.timeline-badge.danger {
background-color: #d9534f !important;
}
.timeline-badge.info {
background-color: #5bc0de !important;
}
.timeline-title {
margin-top: 0;
color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
margin-bottom: 0;
}
.timeline-body > p + p {
margin-top: 5px;
}
  </style>



  <body>

    <header>
      @yield('header')
    </header>

    <body>
      @yield('body')
    </body>

    <footer>
      @yield('footer')
    </footer>

  </body>






  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</html>
