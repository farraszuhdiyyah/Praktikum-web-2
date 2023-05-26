<?php 
require_once 'dbkoneksi.php';
//tangkap id delete dari url
$delete = $_GET['iddel'];
//bikin query hapus data
$sql = "DELETE FROM pelanggan WHERE id=?";
//prepare query
$st = $dbh->prepare($sql);
//jalanin query
$st->execute([$delete]);

//pindahin ke hal list pelanggan
header('location:list_pelanggan.php');


?>