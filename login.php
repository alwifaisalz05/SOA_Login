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

    .card-container.card {
      max-width: 350px;
      padding: 40px 40px;
    }

    .btn {
      font-weight: 700;
      height: 36px;
      -moz-user-select: none;
      -webkit-user-select: none;
      user-select: none;
      cursor: default;
    }

    /*
    * Card component
    */
    .card {
      background-color: #F7F7F7;
      /* just in case there no content*/
      padding: 20px 25px 30px;
      margin: 0 auto 25px;
      margin-top: 50px;
      /* shadows and rounded borders */
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .profile-img-card {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
    }

    /*
    * Form styles
    */
    .profile-name-card {
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      margin: 10px 0 0;
      min-height: 1em;
    }

    .reauth-nim {
      display: block;
      color: #404040;
      line-height: 2;
      margin-bottom: 10px;
      font-size: 14px;
      text-align: center;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-signin #inputnim,
    .form-signin #inputPassword {
      direction: ltr;
      height: 44px;
      font-size: 16px;
    }

    .form-signin input[type=nim],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
      width: 100%;
      display: block;
      margin-bottom: 10px;
      z-index: 1;
      position: relative;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-signin .form-control:focus {
      border-color: rgb(104, 145, 162);
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    }

    .btn.btn-signin {
      /*background-color: #4d90fe; */
      background-color: rgb(104, 145, 162);
      /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
      padding: 0px;
      font-weight: 700;
      font-size: 14px;
      height: 36px;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      border: none;
      -o-transition: all 0.218s;
      -moz-transition: all 0.218s;
      -webkit-transition: all 0.218s;
      transition: all 0.218s;
    }

    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
      background-color: rgb(12, 97, 33);
    }

    .forgot-password {
      color: rgb(104, 145, 162);
    }

    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus{
      color: rgb(12, 97, 33);
    }

  </style>
</head>
<body style="font-family: Century Gothic">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo">
        <a href="index.php">
          <img src="logo.png" width="98px;" style="margin-top: 10px;">
        </a>
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
  <br>
  <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="soalogo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="index2.php" method="post">
                <span id="reauth-nim" class="reauth-nim"></span>
                <input type="text" id="inputnim" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Sign in"></button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
<!-- login session -->
<?php

  include 'config.php';

  if(isset($_POST['nim']) AND isset($_POST['password'])){

    session_start();

    $nim=$_POST['nim'];
    $password=$_POST['password'];


    $query=mysqli_query("SELECT * FROM mahasiswa WHERE nim='$nim' AND password='$password'");
    
    $sql=mysqli_connect($db, $query);

    $rows0 = mysql_num_rows($query);

                if($rows0==1)

                {

                                $_SESSION['nim']=$nim;

                                header('Location: ', 'http://localhost/soa/index2.php');

                }

                else

                {

                                echo "gagal login";

                }
  }
?>

</html>
