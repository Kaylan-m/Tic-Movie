<?php
include_once 'display_datapembeli.php';
$result = mysqli_query($conn,"SELECT * FROM movie"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PEMBELI</title>
	<link rel="stylesheet" type="text/css" href="stylephp.css">
</head>
<body>
	<?php 
		include '../web/header.php'
	?>
<?php
if(mysqli_num_rows($result) > 0){
	?><br><br><br><br>
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
		</tr>
	<?php
	$i++;
		}
	?>		
	</table><br><br>
	<?php
}
?>
<section class="eticket">
<div class="eticket2">
<a href="../web/e-ticket.php" class="tbl-biru">Add Order</a>
<a href="table_pembelian.php" class="tbl-biru">Edit and Delete</a></div>
</section>
	<?php 
		include '../web/footer.php'
	?>
    
</body>
</html>