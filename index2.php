<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Tugas SOA</title>
  
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- BOOSTRAP FILE -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
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
              Status : Online
            </li>
          </ul>
      </div>
  </nav>
  <!-- Isi Home -->
          <br>
          <br>
          <table class="table table-striped table-dark" style="width:1300px;" align="center">
            
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Induk Mahasiswa</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                  include 'config.php';
                  /* Insert Your Query to get Data from database*/
                  $sql = 'SELECT * FROM mahasiswa';
                  $no = 0;
                  $result = $conn->query($sql);
                  ?>
                
                <!-- Menampilkan Data dengan Perulangan -->
                <?php 
                while($row = $result->fetch_assoc()) {
                  $no++;
                  $nama = $row['nama'];
                  $nim = $row['nim'];
                  $password = $row['password'];

                  echo "<tr>
                    <td>$no</td>
                    <td>$nama</td>
                    <td>$nim</td>
                    <td>$password</td>
                    <td>";
                        echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#del$nim'>Delete</button>
                        <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edt$nim'>Update</button>
                    </td>
                </tr>";
                echo "<div class='modal fade' id='edit$nim' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLabel'>Edit Data</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      <h5 class='modal-title' id='exampleModalLabel'>Data $nama</h5>
                            <!-- Insert Form here -->
                            <form method='POST' action='update.php'>
                                <div class='form-group'>
                                  <label for='exampleInputEmail1'>Nama</label>
                                  <input type='text' class='form-control' name='nama' value='$nama'>
                                    <!-- Create hidden input here to post id Users-->
                                    <input type='text' name='nim' value='$nim' />
                                </div>
                                <div class='form-group'>
                                  <label for='exampleInputPassword1'>NIM</label>
                                 <input type='text' class='form-control' name='nim' value='$nim'>
                                </div>
                                <button type='submit' name='edit' class='btn btn-primary btn-block'>Submit</button>
                              </form>                        
                          </div>
                    </div>
                  </div>
                </div>
                <div class='modal fade' id='del$nim' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                  <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                      
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Delete Data</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>

                      <div class='modal-body'>
                        <h5 class='modal-title' id='exampleModalLabel'>Are you sure to delete : ($nim) ?</h5>
                      </div>

                      <div class='modal-footer'>
                        <form method='POST' action='delete.php'>
                          <!-- Create hidden input here to post id Users-->
                          <input type='hidden' name='nim' value='$nim'/>
                          <button type='submit' name='delete' class='btn btn-danger'>YA</a>
                        </form>
                        <button type='button' class='btn btn-primary' data-dismiss='modal'>TIDAK</button>
                      </div>
                  
                  </div>
                </div>
              </div>";}
            ?>

            </tbody>
          </table>
</body>
</html>
