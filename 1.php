 <?php
 
 $password ='admin';
 $password = password_hash ($password, PASSWORD_DEFAULT); 
 
 echo "$password";
 
 ?>