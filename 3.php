

<?php

require_once 'koneksi/init.php';

	  global $link;
	  
	  $query ="SELECT * FROM anggota";
	  $sql = mysqli_query ($link, $query);
	  $i=0;
	  
	  while ($data =  mysqli_fetch_array($sql))

{
	$i++;
	echo "$i";
	$foto=$data['status'];
		echo "$foto";
}								
?>								
								