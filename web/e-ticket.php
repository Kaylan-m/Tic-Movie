<!DOCTYPE html>
<html lang="en">
<head>
    <title>Last Project</title>
    <link rel="stylesheet" href="../php/styleweb.css">
</head>

<body>
    <!-- header -->
    <?php include('header.php') ?>

    <!-- e-ticket -->   
    <section class="eticket">
        <div class="eticket2">
            <h1><b><br><center><font color="D0C9C0">〚</font>&nbsp;&nbsp;E-TICKET PURCHASES&nbsp;&nbsp;<font color="D0C9C0">〛</font></center><br></b></h1>
            <center>
                    <p><font color="#532E1C"> Complete the following data to purchase the E-Ticket :<br><br></font></p>

            <form action="../php/database.php" method="POST" name="input-data">
                <table>
                    <tr height="35">
                        <td> </td>
                        <td>Full Name</td>
                        <td><input type="text" name="full_name" size="35" maxlength="100"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Email</td>
                        <td><input type="text" name="email" size="35" maxlength="30"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Phone Number&nbsp;&nbsp;</td>
                        <td><input type="tel" name="phone" size="35" maxlength="12"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Address</td>
                        <td><input type="text" name="address" size="35" maxlength="100"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Movie Title</td>
                        <td><select name="movie">
                                <option value="-"><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- Click Here to Select Movie ---</h6>
                                <option value="KKN Di Desa Penari">KKN Di Desa Penari
                                <option value="Doctor Strange in the Multiverse of Madness">Doctor Strange in the Multiverse of Madness
                                <option value="Jurassic World Dominion">Jurassic World Dominion
                                <option value="Keluarga Cemara 2">Keluarga Cemara 2
                            </select></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Showtime</td>
                        <td><input type="time" name="showtime" size="35" maxlength="30"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Seat</td>
                        <td><input type="number" name="seat" size="35" maxlength="10"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td>Booking-Date</td>
                        <td><input type="date" name="date" size="35" maxlength="12"></td>
                    </tr>
                    <tr height="35">
                        <td> </td>
                        <td> </td>
                        <td><input type="submit" name="kirim">
                            <input type="reset" name="reset" value="Cancel"></td>
                    </tr>
                </table>
            </form><br>
            <a href="../php/daftarpembeli.php" class="tbl-biru">ORDER LIST</a>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>
    
</body>
</html>