<?php
    include "myconnection.php";

    $id_buku = $_POST["idBuku"];
    $Judul = $_POST["judul"];
    $Pengarang = $_POST["pengarang"];

    $query = "INSERT INTO buku(id_buku,Judul,Pengarang)
                VALUE('$id_buku','$Judul','$Pengarang')";

    if(mysqli_query($connect, $query)){
       echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
<br>
<a href="admin.php">Kembali ke Menu Admin</a>