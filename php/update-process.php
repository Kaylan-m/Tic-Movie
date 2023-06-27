<?php
include "display_datapembeli.php";
$id = $_GET['id'];
if(isset($_POST['update']))
	// var_dump('$_POST'); 
{	

	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$movie = $_POST['movie'];
	$showtime = $_POST['showtime'];	
	$seat = $_POST['seat'];
	$date = $_POST['date']; 
		
	// update user data
	$check = mysqli_query($conn, "UPDATE movie SET full_name='$full_name', email='$email',
		phone='$phone', address='$address', movie='$movie', showtime='$showtime'WHERE id='$id'");

	if ($check) {
   echo "<script>alert('Your data has been updated')</script>";
	} else {
		include 'updateanddelete.php';
	}
}
$result = mysqli_query($conn,"SELECT * FROM movie WHERE id='". $_GET['id']."'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Last Project</title>
	<link rel="stylesheet" type="text/css" href="styleweb.css">
</head>
<body>
    <?php 
		include '../web/header.php'
	?>
<section class="eticket">
        <div class="eticket2">
            <h1><b><br><center><font color="D0C9C0">〚</font>&nbsp;&nbsp;E-TICKET PURCHASES&nbsp;&nbsp;<font color="D0C9C0">〛</font></center><br></b></h1>
            <center>
                    <p><font color="#532E1C"> Complete the following data to purchase the E-Ticket :<br><br></font></p>

            <form action="" method="POST" name="input-data">
                <table>
                    <tr height="35">
                        <td> </td>
                        <td>Full Name</td>
                        <td><input type="text" name="full_name" size="35" maxlength="100" value="<?php echo $row['full_name']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Email</td>
                        <td><input type="text" name="email" size="35" maxlength="30" value="<?php echo $row['email']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Phone Number&nbsp;&nbsp;</td>
                        <td><input type="tel" name="phone" size="35" maxlength="12" value="<?php echo $row['phone']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Address</td>
                        <td><input type="text" name="address" size="35" maxlength="100" value="<?php echo $row['address']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Movie Title</td>
                        <td><select name="movie" value="<?php echo $row['movie']; ?>>
                                <option value="-"><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- Click Here to Select Movie ---</h6>
                                <option value="KKN Di Desa Penari">KKN Di Desa Penari</option>
                                <option value="Doctor Strange in the Multiverse of Madness">Doctor Strange in the Multiverse of Madness</option>
                                <option value="Jurassic World Dominion">Jurassic World Dominion</option>
                                <option value="Keluarga Cemara 2">Keluarga Cemara 2</option>
                            </select></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Showtime</td>
                        <td><input type="time" name="showtime" size="35" maxlength="30" value="<?php echo $row['showtime']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Seat</td>
                        <td><input type="number" name="seat" size="35" maxlength="10" value="<?php echo $row['seat']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Booking-Date</td>
                        <td><input type="date" name="date" size="35" maxlength="12" value="<?php echo $row['date']; ?>"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td> </td>
                        <td>
					<button type="submit" name="update" class="yok">Update</button>
					<button type="reset" name="reset" class="yok">Batal</button>
				    </td>
                    </tr>
                </table>
            </form><br>
            <a href="daftarpembeli.php" class="tbl-biru">ORDER LIST</a>
        </div>
    </section>
    <?php 
		include '../web/footer.php'
	?>
</body>
</html>