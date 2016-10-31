 <?php
 
 require_once "koneksi/init.php";
 
 if ( isset ($_POST['submit']) )
 {
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 
	 if (!empty(trim($email)) && !empty(trim($password))
	 {
		 if (register_cek_nama ($nama) )
		 {
				 if (register_user($email, $password))
				 {
					 echo "berhasil";
				 }else
				 {
					 echo "gagal";
				 }
		 } else
		 {
			 echo "nama sudah ada";
		 }
	 }else
	 {
		 echo "tidak boleh kosong";
	 }
 }
  
 
 ?>