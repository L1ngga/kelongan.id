@extends('template')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Beranda Kelongan.id</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="" rel="stylesheet"> -->
  <style type="text/css">
    body {
  padding-top: 56px;
  background-color: #dedede;
}
  .bg-dark{
    background-color: #005d68 !important;
  }
  .card-title{
    font-size: 22px;
    text-decoration: underline;
  }
  .card-body img{
    border-radius: 25pt;
    margin: 25px 0 0 0;
  }
  .card-body p{
    margin-top: 15px;
  }
  .container h1{
    font-size: 36px;
    margin-top: 25px;
    text-align: center;
  }
  .card-body{
    text-align: center;
  }
  .card-footer{
    padding-top: 25px;
  }
  .card-footer a{
    float: left;
  }
  .card-footer p{
    font-weight: bold;
    color: #ff5c3e;
    font-size: 20px;
    float: right;
  }
  footer{
    background-color: #545454 !important;
  }
  </style>
</head>
 
<body>

  <!-- Navigation -->
  

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="image/home/banner.png" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 style="text-align: left; font-weight: lighter;">Dijamin Halal!</h1>
        <p>Kelongan.id menyediakan produk kebutuhan bahan masakan rumah tangga. Segala produk yang kami sediakan pasti terjamin kehalalan dan keberkahannya.</p>
        <a class="btn btn-primary" href="{{ url('/transaksi_create') }}">Beli Sekarang!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Semua produk yang Kelongan.id sediakan sudah terverifikasi dan tersertifikasi oleh kewenangan terkait.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Daging Sapi</h2>
            <img src="image/home/daging2.jpg">
            <p class="card-text">Kalongan.id menyediakan daging sapi yang syar'i. Daging sapi dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 150.000</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Daging Ayam</h2>
            <img src="image/home/daging1.jpg">
            <p class="card-text">Kalongan.id menyediakan daging ayam yang syar'i. Daging ayam dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 35.000</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Daging Kambing</h2>
            <img src="image/home/daging3.jpg">
            <p class="card-text">Kalongan.id menyediakan daging kambing yang syar'i. Daging kambing dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 100.000</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Beras</h2>
            <img src="image/home/beras1.jpg">
            <p class="card-text">Kalongan.id juga menyediakan beras yang syar'i. Beras dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 65.000</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Minyak</h2>
            <img src="image/home/minyak1.jpg">
            <p class="card-text">Kalongan.id juga menyediakan minyak yang syar'i. Minyak dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 15.000</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Tepung</h2>
            <img src="image/home/terigu1.jpg">
            <p class="card-text">Kalongan.id juga menyediakan tepung yang syar'i. Tepung dari kami terjamin kebersihan dan ketersediannya.</p>
          </div>
          <div class="card-footer">
            <a href="{{ url('/item') }}" class="btn btn-primary btn-sm">Detail Produk</a>
            <p>Rp. 10.000</p>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <p class="m-0 text-center text-white">Kelongan.id | 2021 &copy;</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


@stop