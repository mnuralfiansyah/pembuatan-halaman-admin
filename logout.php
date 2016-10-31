<?php

require_once 'koneksi/init.php';

session_destroy();

header ('location: login.php');

?>