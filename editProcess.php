<?php
    include "myconnection.php";

    $id_buku = $_POST["idBuku"];
    $Judul = $_POST["judul"];
    $Pengarang = $_POST["pengarang"];

    $query = "UPDATE buku SET judul='$Judul', pengarang='$Pengarang' WHERE id_buku = '$id_buku'";

    if(mysqli_query($connect, $query)){
       header('Location:admin.php');
    }
    else{
        echo "Data gagal di ubah <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>