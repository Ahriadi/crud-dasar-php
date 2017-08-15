CREATE DATABASE IF NOT EXISTS db_latihan;
USE db_latihan;

CREATE TABLE IF NOT EXISTS barang (
  id_barang int(11) NOT NULL AUTO_INCREMENT,
  nama_barang varchar(50) DEFAULT NULL,
  satuan varchar(25) DEFAULT NULL,
  harga_beli decimal(10,0) DEFAULT NULL,
  harga_jual decimal(10,0) DEFAULT NULL,
  jumlah_stok int(11) DEFAULT NULL,
  user_name varchar(25) DEFAULT NULL,
  tgl_proses datetime DEFAULT NULL,
  PRIMARY KEY (id_barang)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO barang (id_barang, nama_barang, satuan, harga_beli, harga_jual, jumlah_stok, user_name, tgl_proses) VALUES
	(1, 'LAPTOP HP PAVILION DV4', 'PCS', 5000000, 6000000, 5, 'ADMIN', '2013-11-02 22:13:44'),
	(2, 'MOUSE GENIUS X1', 'PCS', 100000, 125000, 10, 'ADMIN', '2013-11-02 22:13:45'),
	(3, 'SPEAKER ALTEC', 'PCS', 350000, 500000, 5, 'ADMIN', '2013-11-02 22:13:46'),
	(4, 'KEYBOARD GENIUS', 'PCS', 50000, 75000, 3, 'ADMIN', '2013-11-02 22:14:19'),
	(5, 'FLASDISK HP 2GB', 'PCS', 60000, 80000, 7, 'ADMIN', '2013-11-02 22:15:25');

