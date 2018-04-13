<!DOCTYPE html>
<html>
<head>
  <title>Tugas SOA</title>
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- CSS -->
  <style type="text/css">
    body{
      background-image: url(bg.jpg);
      background-repeat: no-repeat;
      background-size: 1600px;
    }

    #searchplace{
      margin-left: 12px;
    }

    #searchform{
      width: 300px;
    }
  </style>
</head>
<body style="font-family: Century Gothic">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo">
        <img src="logo.png" width="98px;" style="margin-top: 10px;">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>   
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" id="searchplace" style="margin-top: 10px;">
            <input class="form-control mr-sm-2" type="search" style="font-size: 12px;" placeholder="Cari di Halaman.." aria-label="Search" id="searchform">
            <input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
        </form>
        <ul class="navbar-nav mr-right" id="masuk">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Masuk<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Daftar</a>
            </li>
          </ul>
      </div>
  </nav>
  <!-- Isi Home -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="soalogo.png" style="width: 300px; margin-top: 120px;">
      </div>
      <div class="col-sm">
        <h4 style="font-size: 70px; margin-top: 170px; margin-left: -170px;">Selamat Datang di Tugas SOA</h4>
        <h5 style="color: white; margin-left: -165px; margin-top: -300"> Create Retrive update dan delete data user </h5>
      </div>
    </div>
  </div>
</body>
</html>
