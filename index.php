<?php
include 'koneksi.php';

$query = "SELECT * FROM inventaris_barang";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Barang</title>
</head>
<body>
    <h2>Daftar Barang</h2>
    <a href="tambah.php">Tambah Barang</a>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Kode_barang</th>
            <th>Nama_barang</th>
            <th>Merk_barang</th>
            <th>Distributor</th>
            <th>Kwantitas</th>
            <th>Tahun</th>
            <th>Asal_barang</th>
            <th>Tgl_perolehan</th>
            <th>Keadaan_barang</th>
            <th>Harga</th>
            <th>Ket</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['Nomor']}</td>";
            echo "<td>{$row['Tanggal']}</td>";
            echo "<td>{$row['Kode_barang']}</td>";
            echo "<td>{$row['Nama_barang']}</td>";
            echo "<td>{$row['Merk_barang']}</td>";
            echo "<td>{$row['Distributor']}</td>";
            echo "<td>{$row['Kwantitas']}</td>";
            echo "<td>{$row['Tahun']}</td>";
            echo "<td>{$row['Asal_barang']}</td>";
            echo "<td>{$row['Tgl_perolehan']}</td>";
            echo "<td>{$row['Keadaan_barang']}</td>";
            echo "<td>{$row['Harga']}</td>";
            echo "<td>{$row['Ket']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
