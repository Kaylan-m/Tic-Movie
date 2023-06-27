<?php
include 'koneksi.php';

if(isset($_POST['kirim'])){
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$movie = $_POST['movie'];
	$showtime = $_POST['showtime'];	
	$seat = $_POST['seat'];
	$date = $_POST['date'];

	$simpan = "INSERT INTO movie ( full_name, email, phone, address, movie,  showtime, seat, date )
	VALUES ('$full_name','$email','$phone','$address','$movie','$showtime','$seat','$date')";

	$result = mysqli_query($conn,$simpan);

	if ($result) {
	}
}
?>