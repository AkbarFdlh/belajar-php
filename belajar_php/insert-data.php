<?php
	include "koneksi.php";

	$sql = "INSERT INTO user
	(
		id,
		nama,
		role,
		availability,
		age,
		location,
		years_expereince,
		email
) VALUE 
(
	'1',
	'Akbar Fadhilah',
	'Marketing',
	'Full Time',
	'17',
	'Bogor',
	'3',
	'akbarfdlh773@gmail.com'
)";

	if($koneksi->query($sql) == TRUE){
		echo "Insert data telah berhasil";
	} else {
		echo "Insert data gagal";
	}
?>
