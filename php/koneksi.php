<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";
$conn = new mysqli($servername, $username, $password, $dbname);
$dbname;

if(!$conn)
{
	die("koneksi gagal". mysqli_connect_error());
}
echo "Your data has been successfully saved ! Click <a href='daftarpembeli.php'>here</a> to see your data";
?>