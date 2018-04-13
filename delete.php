<?php

	require 'config.php';
	$nim = $_POST['nim'];
	$sql = "DELETE FROM mahasiswa WHERE nim=$nim";

	if($conn->query($sql)) {
    	
    	header("Location: http://localhost/soa");
	
	} 
	else {

    	die($conn->error);
	
	}

?>