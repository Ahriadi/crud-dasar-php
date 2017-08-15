<?php
include "koneksi.php";

$query = "delete from barang where id_barang = '$_GET[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:barang_tampil.php");
}
else {
	echo "proses simpan gagal !.";
}
?>

