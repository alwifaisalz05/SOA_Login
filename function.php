<?php
require 'config.php';

  /* Insert Your Query to Edit and Delete User*/

    //EDIT
    function edt($conn){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $password = $_POST['password'];
        $sql = "UPDATE mahasiswa SET nama='$nama' password='$password' WHERE nim=$nim";
        
        if($conn->query($sql) == TRUE) {

          header('Location: ', 'http://localhost/soa/index2.php');
        } 
        else {
          
          die($conn->error);
        
        }
    }

    //DELETE
    function del($conn){
      
      $nim = $_POST['nim'];
      $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
      
      if($conn->query($sql) == TRUE) {
         
        header('Location: ', 'http://localhost/soa/index2.php');
      
      }
      else {
        
        die($conn->error);
      
      }
    }
  ?>