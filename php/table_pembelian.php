
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Last Project</title>
    <link rel="stylesheet" href="stylephp.css">
</head>

<body>
	<?php 
		include '../web/header.php'
	?>
	<br>
	<br>
    <a href="../web/e-ticket.php" class="tbl-biru">Add Order</a>
	<br>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Address</th>
            <th>Movie Title</th>
            <th>Showtime</th>
            <th>Seat</th>
            <th>Booking-Date</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from movie");
		while($d = mysqli_fetch_array($data)){
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
					<a href="update-process.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="delete-process.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table><br><br><br><br>
	</div>
	</section>
	<?php 
		include '../web/footer.php'
	?>
</body>
</html>