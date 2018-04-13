<?php 

	include 'config.php';

	/*Insert Your Query to Edit User*/

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	
	$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE nim=$nim";

	if($conn->query($sql) == TRUE) {
    
    	header("Location: http://localhost/soa");

	}
	else {
    	
    	die($conn->error);
	}

?>