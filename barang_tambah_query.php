<?php
include("koneksi.php");
$query = "insert into barang (id_barang, nama_barang, satuan, harga_beli, harga_jual, 
jumlah_stok, user_name, tgl_proses) values (NULL, '$_POST[nama_barang]', '$_POST[satuan]', 
'$_POST[harga_beli]', '$_POST[harga_jual]', '$_POST[jumlah_stok]', 'ADMIN', now())";
$result = mysql_query($query);

if ($result) {
	header("location:barang_tampil.php");
}
else {
	echo "proses simpan gagal !.";
}
?>
