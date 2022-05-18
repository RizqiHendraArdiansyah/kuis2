<!DOCTYPE HTML>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <?php
    include "myconnection.php";
    $id_buku = $_GET['id'];
    $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
    $result = mysqli_query($connect,$query);
    ?>
    <form action="editProcess.php" method="post">
        <table>
        <?php
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> id_buku : </td>
            <td>
                <input type="text" name="idBuku" value="<?php echo $row['id_buku'];?>"readonly></td>
        </tr>
        <tr>
            <td>  Judul : </td>
            <td>
                <textarea name="judul" rows="5" cols="20"></textarea></td>
        </tr>
        <tr>
            <td>  Pengarang : </td>
            <td>
            <textarea name="pengarang" rows="5" cols="20"></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="Simpan"></td>
        </tr>
        <?php
            }
        ?>
        </table>
    </form>
</body>
</html>