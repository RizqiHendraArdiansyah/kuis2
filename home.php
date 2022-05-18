<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">   
    </head>
    <body>
       
        </div>
        <div class="header">
        <table width="100%">
            <tr>
                <td><div class="judul"><h1>Toko Buku Sarjana</h1></div></td>
                <td><div class="menu">
                <h2><a href=home.php style="text-decoration : none">Home</a>
                <a href=formLogin.php style="text-decoration : none">Login</a></h2>
                </div></td>
            </tr>
        </table>
        </div>
        <div class="middle">

        <h1>SELAMAT DATANG DI TOKO BUKU SARJANA</h1>
        <form action="search.php" method="get" align="right">
            Cari Judul Buku:
            <input type="text" name="carinama">
            <input type="submit" value="Cari">
        </form>
        <table>
            <br>
            <tr>
                <th> id_buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "myconnection.php";
    
                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);
    
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["Judul"]; ?> </td>
                <td> <?php echo $row["Pengarang"]; ?> </td>                
                <td>
                    <a href="detailForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Detail</button> </a>
                </td>    
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 result";
                }
            ?>
            </table>
        </div>
        <div class="footer">
        <p>Toko Sarjana "copyright@ Rizqi Hendra Ardiansyah"</p>
        </div>
    </body>
</html>