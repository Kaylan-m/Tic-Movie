<!DOCTYPE html>
<html lang="en">
<head>
    <title>Last Project</title>
    <link rel="stylesheet" href="styleweb.css">
</head>

<body>
    <!-- header -->
    <?php include('header.php') ?>

    <!-- now playing -->
    <div class="cinema">
        <div class="kolom">
            <h2><b><i><br>NOW PLAYING IN CINEMAS</i></b></h2><br><br>
        </div>    

        <div class="film-list">
            <div class="kartu-film">
                <table border="1" align="center" >
                    <tr align="center">
                        <td>
                        <img src="../gambar/film5.jpg"  >
                        </td>
                        <td>
                            <img src="../gambar/film2.jpg" >
                        </td>
                        <td>
                            <img src="../gambar/film3.jpg" >
                        </td>
                        <td>
                            <img src="../gambar/film4.jpg" >
                        </td>
                    </tr>
                    <tr align="center">
                        <td><b><br><br>Keluarga Cemara 2</b><br><br><br>01:06 AM 02:12 AM 04:09 AM <br>04:07 AM 03:10 PM 12:12 PM<br><br><br><a href="e-ticket.php" class="tbl-biru"><b>Buy Now</b></a><br><br><br> </td>
                        <td><b><br><br>KKN Di Desa Penari</b><br><br><br>01:06 AM 02:12 AM 04:09 AM <br>04:07 AM 03:10 PM 12:12 PM<br><br><br><a href="e-ticket.php" class="tbl-biru"><b>Buy Now</b></a><br><br><br> </td>
                        <td><b><br><br>Jurassic World Dominion</b><br><br><br>01:06 AM 02:12 AM 04:09 AM <br>04:07 AM 03:10 PM 12:12 PM<br><br><br><a href="e-ticket.php" class="tbl-biru"><b>Buy Now</b></a><br><br><br> </td>
                        <td><b>Doctor Strange in the Multiverse of Madness</b><br><br>01:06 AM 02:12 AM 04:09 AM <br>04:07 AM 03:10 PM 12:12 PM<br><br><br><a href="e-ticket.php" class="tbl-biru"><b>Buy Now</b></a><p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>
    
</body>
</html>