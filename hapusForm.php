<?php
include "myconnection.php";

$id_buku = $_GET["id"];
$query = "DELETE FROM buku WHERE id_buku ='$id_buku'";

if(mysqli_query($connect, $query)){
    header('Location:admin.php');
}
else{
    echo "Data gagal dihapus <br>".
    mysqli_error($connect);
}
mysqli_close();
?>