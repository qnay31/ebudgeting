<?php
session_start();
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = '2022_program';
 
// Table's primary key
$primaryKey = 'id';

if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {
    if ($_GET["id_periode"] == "") {
        $where = "laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC";

    } else {
        $periode = $_GET["id_periode"];
        $where = "laporan = 'Terverifikasi' AND MONTH(tgl_pemakaian) = '$periode' ORDER BY `tgl_pengajuan` DESC";
    }
    

} else {
    $where = "laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC";
}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'program', 'dt' => 1 ),
    array( 'db' => 'posisi', 'dt' => 2 ),
    array( 'db' => 'cabang',  'dt' => 3 ),
    array(
        'db'        => 'tgl_pemakaian',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            $convert = date( 'd F Y', strtotime($d));
            $bulan   = substr($convert, 2);
            return $bulan;
        }
    ),
    array(
        'db'        => 'tgl_pengajuan',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),   
    array( 'db' => 'deskripsi', 'dt' => 6 ),
    array(
        'db'        => 'dana_anggaran',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'tgl_pemakaian',
        'dt'        => 8,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),   
    array( 'db' => 'deskripsi_pemakaian', 'dt' => 9 ),
    array( 'db' => 'laporan', 'dt' => 10 ),
    array(
        'db'        => 'dana_terpakai',
        'dt'        => 11,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array(
        'db'        => 'dana_anggaran',
        'dt'        => 12,
        'formatter' => function( $d, $row ) {
            return number_format($d);
        }
    ),
    array( 'db' => 'laporan', 'dt' => 13 )

);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'ebudgeting',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../ssp.class.php' );
 
echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
);