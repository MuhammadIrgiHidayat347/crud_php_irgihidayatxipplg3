<?php
include 'koneksi.php';
include 'index.php';
include 'edit.php';
include 'hapus.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor = $_POST['No'];
    $tanggal = $_POST['Tanggal'];
    $kode_barang = $_POST['Kode_barang'];
    $nama_barang = $_POST['Nama_barang'];
    $merk_barang = $_POST['Merk_barang'];
    $distributor = $_POST['Distributor'];
    $kwantitas = $_POST['Kwantitas'];
    $tahun = $_POST['Tahun'];
    $asal_barang = $_POST['Asal_barang'];
    $tgl_perolehan = $_POST['Tgl_perolehan'];
    $keadaan_barang = $_POST['Keadaan_barang'];
    $harga = $_POST['Harga'];
    $ket = $_POST['Ket'];
    $query = "INSERT INTO barang (Nomor, Tanggal, Kode_barang, Nama_barang, Merk_barang, Distributor, Kwantitas, Tahun, Asal_barang, Tgl_perolehan, Keadaan_barang, Harga, Ket) VALUES ('$nomor', '$tanggal', '$kode_barang', '$nama_barang', '$merk_barang', '$distributor', '$kwantitas', '$tahun', '$asal_barang', '$tgl_perolehan', '$keadaan_barang', '$harga', '$ket')";
    $result = $conn->query($query);
    header("Location: index.php");

if ($result) {
    echo "Data barang berhasil ditambahkan.";
} else {
    echo "Error: " . $conn->error;
}

}
?>

<?php
// Close the database connection
$conn->close();
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form method="post">
        Nomor: <input type="number" name="No" required><br>
        Tanggal: <input type="number" name="Tanggal" required><br>
        Kode_barang: <input type="number" name="Kode_barang" required><br>
        Nama Barang: <input type="text" name="Nama_barang" required><br>
        Merk_barang: <input type="text" name="Merk_barang" required><br>
        Distributor: <input type="text" name="Distributor" required><br>
        Kwantitas: <input type="number" name="Kwantitas" required><br>
        Tahun: <input type="number" name="Tahun" required><br>
        Asal_barang: <input type="text" name="Asal_barang" required><br>
        Tgl_perolehan: <input type="number" name="Tgl_perolehan" required><br>
        Keadaan_barang: <input type="text" name="Keadaan_barang" required><br>
        Harga: <input type="number" name="Harga" required><br>
        Ket: <input type="text" name="Ket" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html> 
 
