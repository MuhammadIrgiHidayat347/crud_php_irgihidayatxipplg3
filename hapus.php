<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_barang = $_GET['id'];
    $query = "DELETE FROM barang WHERE id_barang='$id_barang'";
    $koneksi->query($query);
    header("Location: index.php");
}
?>
