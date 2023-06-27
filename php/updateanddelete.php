<?php
include_once 'display_datapembeli.php';
$result = mysqli_query($conn,"SELECT * FROM movie"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PEMBELI</title>
	<link rel="stylesheet" type="text/css" href="styleweb.css">
</head>
<body>
	<?php 
		include '../web/header.php'
	?>
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
            <th>Booking-Date</th>
		</tr>
<?php
$i=1;
while ($row = mysqli_fetch_array($result)) {
?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['full_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['phone']; ?></td>
        	<td><?php echo $row['address']; ?></td>
            <td><?php echo $row['movie']; ?></td>
            <td><?php echo $row['showtime']; ?></td>
            <td><?php echo $row['seat']; ?></td>
            <td><?php echo $row['date']; ?></td>
			<td>
				<a href="delete-process.php?id=<?php echo $row['id']; ?>" class="ok">Delete</a>
				<br>
				<br>
				<a href="update-proces.php?id=<?php echo $row['id']; ?>" class="ok">Update</a>
			</td>
		</tr>
	<?php
	$i++;
		}
	?>		
	</table>
	<?php
}
?>

	<?php 
		include '../web/footer.php'
	?>
</body>
</html>