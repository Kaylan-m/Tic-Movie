
<?php
include 'koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM `tic-movie`"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data Wisata</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<?php
if(mysqli_num_rows($result) > 0){
	?>
	<table>
    <tr>
			<th>NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Address</th>
            <th>Movie Title</th>
            <th>Showtime</th>
            <th>Seat</th>
            <th>Booking</th>
		</tr>
<?php
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
	<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['full_name']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['phone']; ?></td>
                <td><?php echo $d['address']; ?></td>
                <td><?php echo $d['movie']; ?></td>
                <td><?php echo $d['showtime']; ?></td>
                <td><?php echo $d['seat']; ?></td>
                <td><?php echo $d['date']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
	<?php
	$i++;
		}
	?>		
	</table>
	<?php
}
else{
	echo "Data tidak ditemukan";
}
?>
<br>
</body>
</html>