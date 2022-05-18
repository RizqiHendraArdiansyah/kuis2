<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">      
    </head>
    <body>
       
        </div>
        <div class="header">
        <table width="100%">
            <tr>
                <td><div class="judul"><h1>Toko Buku Sarjana</h1></div></td>
                <td><div class="menu">
                <h2><a href=formLogout.php style="text-decoration : none">Log Out</a></h2>
                </div></td>
            </tr>
        </table>
        </div>
        <div class="middle">

        <h1>SELAMAT DATANG DI TOKO BUKU SARJANA</h1>
        <a href="insertForm.html"><button style= "float : right">Tambah Data Buku</button></a>
        <br>
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
                    <a href="editForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Edit</button> </a>
                    <a href="hapusForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Hapus</button> </a>
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