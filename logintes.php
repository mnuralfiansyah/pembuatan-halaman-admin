 <?php
 function register_user($nama, $password)
 {
	 global $link;
	 
	 //mencegah sql ijection
	 $email= mysqli_real_escape_string ($link, $email);
	 $password= mysqli_real_escape_string ($link, $password);
	 
	 $password = password_hash ($password, PASSWORD_DEFAULT); 
	 $query = "INSERT INTO admin (nama, password, email, jabatan) VALUES ('$nama', '$password', '$email','$jabatan')";
	 
	 
	 if (mysqli_query ($link, $query))
	 {
		 return true;
	 } else
	 {
		 return false;
	 }
 }
 
 // menguji nama 
  function register_cek_nama ($email)
  {
	  global $link;
	  
	  $email= mysqli_real_escape_string ($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  
	  if ($result = mysqli_query($link, $query))
	  {
		  if (mysqli_num_rows($result)==0) return true;
		  else return false;
	  }
  }
 
 
 function cek_data($email, $password)
 {
	 global $link;
	 
	  //mencegah sql ijection
	 $email= mysqli_real_escape_string ($link, $email);
	 $password= mysqli_real_escape_string ($link, $password);
		
		$query = "SELECT password FROM admin WHERE email='$email'";
		$result = mysqli_query ($link, $query);
		$hash = mysqli_fetch_assoc($result)['password'];
		
		if (password_verify($password, $hash))
		{
			return true;
		}else
		{
			return false;
		}
 }
 
 
 // menguji nama di database
 
 function login_cek_nama ($email, $password)
 {
	  global $link;
	  
	  $email= mysqli_real_escape_string ($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  
	  if ($result = mysqli_query($link, $query))
	  {
		  if (mysqli_num_rows($result)!=0) {return true;}
			  else {return false;}
	  }
  }
  
  
  function  cek_amanah ($email)
  {
	  global $link;
	  
	  $email = mysqli_real_escape_string($link, $email);
	  
	  $query ="SELECT * FROM admin WHERE email='$email'";
	  $sql = mysqli_query ($link, $query);
	  
	  $i=0;
	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		  
		  $data=$data['jabatan'];
		  $i++;
		echo "$data1";
		  
	  }
	  
	  
	  
  } // */
  
  
 ?>