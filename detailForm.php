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
        <h2>Detail Buku</h2>
        <?php
        include "myconnection.php";
        $id_buku = $_GET['id'];
        $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
        $result = mysqli_query($connect,$query);
        ?>
        <?php
            while($row=mysqli_fetch_array($result)){
        ?>
        <table>
        <tr>
            <td> id_buku : </td>
            <td><?php echo $row["id_buku"]?></td>
        </tr>
        <tr>
            <td> Judul : </td>
            <td><?php echo $row["Judul"]?></td>
        </tr>
        <tr>
            <td> Pengarang : </td>
            <td><?php echo $row["Pengarang"]?></td>
        </tr>
        <tr>
            <td> Penerbit: </td>
            <td><?php echo $row["Penerbit"]?></td>
        </tr>
        <tr>
            <td> Deskripsi : </td>
            <td><?php echo $row["Deskripsi"]?></td>
        </tr>
        <?php
            }
        ?> 
        </table>

        <form method="post" action="home.php">
            <button type = "submit"> Kembeli ke Menu Home</button>
        </form>
        </div>
        <div class="footer">
            <p>Toko Sarjana "copyright@ Rizqi Hendra Ardiansyah"</p>
        </div>
    </body>
</html>