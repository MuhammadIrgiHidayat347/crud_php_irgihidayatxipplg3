<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $query = "UPDATE barang SET nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga' WHERE id_barang='$id_barang'";
    $koneksi->query($query);
    header("Location: index.php");
} elseif (isset($_GET['id'])) {
    $id_barang = $_GET['id'];
    $query = "SELECT * FROM barang WHERE id_barang='$id_barang'";
    $result = $koneksi->query($query);
    $barang = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>
    <form method="post">
        <input type="hidden" name="id_barang" value="<?php echo $barang['id_barang']; ?>">
        Nama Barang: <input type="text" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>" required><br>
        Jumlah: <input type="number" name="jumlah" value="<?php echo $barang['jumlah']; ?>" required><br>
        Harga: <input type="number" name="harga" value="<?php echo $barang['harga']; ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
