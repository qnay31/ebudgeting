<?php
require '../function.php';

if(!isset($_POST['searchTerm'])) { 
    $fetchData = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus LIKE 'facebook%' OR id_pengurus LIKE 'instagram%' ORDER BY `posisi` ASC, nama ASC");

} else { 
    $search = $_POST['searchTerm'];   
    if ($search == "") {
        $fetchData = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus LIKE 'facebook%' OR id_pengurus LIKE 'instagram%' ORDER BY `posisi` ASC, nama ASC");

    } else {
        $fetchData = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus NOT LIKE 'admin_web' AND id_pengurus NOT LIKE 'ketua_yayasan' AND id_pengurus NOT LIKE 'manager_facebook' AND id_pengurus NOT LIKE 'manager_instagram' AND id_pengurus NOT LIKE 'kepala_pengajuan' AND id_pengurus NOT LIKE 'management_keuangan' AND id_pengurus NOT LIKE 'kepala_cabang' AND id_pengurus NOT LIKE 'kepala_income' AND nama LIKE '%".$search."%' ");
    }
    
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['id'], "text"=>$row['nama']);
}
echo json_encode($data);