<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <style type="text/css">
              .bg-dark{
                    background-color: #005d68 !important;
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- <div class="col-6 col-sm-3"> -->
                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav> -->
                <!-- </div> -->
      <!--           <ul class="nav nav-tabs" style="margin-top:30px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/item') }}">Items</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/seller') }}">Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/merchant') }}">Merchant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/log out') }}">Logout</a>
                    </li>
 -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">My Account</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li> -->
                <!-- </ul> -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Kelongan.id</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/item') }}">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/seller') }}">Seller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/merchant') }}">Merchant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/log out') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
            </div>    
        </div>
        @yield('content')

    </body>
</html>