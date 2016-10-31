<?php

require_once 'koneksi/init.php';

	  $link;
	  $email = mysqli_real_escape_string($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  $sql = mysqli_query ($link, $query);
	  
	  $i=0;
	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		  
		  $data=$data['jabatan'];
		  $i++;
		  
	  }
	  $data;
	  
?>	  