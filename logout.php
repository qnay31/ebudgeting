<?php 
date_default_timezone_set('Asia/Jakarta');
session_start();

require 'function.php';

$date   = date("Y-m-d H:i:s");
$ip     = get_client_ip();

$query = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] $_SESSION[posisi] Telah Logout dari halamannya')");
// die(var_dump($query));
session_start();
$SESSION = [];
session_destroy();
session_unset();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() -3600);

header("Location: index.php");
exit;

 ?>