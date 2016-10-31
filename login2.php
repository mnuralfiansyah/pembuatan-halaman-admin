 <?php
 
 


 
								 require_once "koneksi/init.php";
								 
								 $email=$_POST['email'];
								$password=$_POST['password'];

								 
								 if (isset($_POST['email']) && ($_POST['password']) )
								 {
									//$email=$_POST['email'];
									//$password=$_POST['password'];
									
									 if (!empty(trim($email)) && !empty(trim($password)))
									 {
										 if (login_cek_nama ($email, $password) )
										 {
											if (cek_data ($email, $password))
											{
												$_SESSION['email'] = $email;
												header ('location:index.php'); ?>
												
												
												<?php
											}
											else
											{
											  echo "data ada ysang salah";	
											}
										 }
										 else
										 {
											echo "namanya belum terdaftar";
										 }			
									 }
									else
									 {
										 echo "tidak boleh kosong";
									 }
								 } 
								 else
								 {
									 echo " gak da isinya";
								 }
								  // */
 
 ?>