<?php
include 'display_datapembeli.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM movie WHERE id='$id'") or die(mysql_error());

if ($result) {
    print"Berhasil Hapus";
    header("location: table_pembelian.php");
} else {
    print"Gagal Hapus";
}
?>