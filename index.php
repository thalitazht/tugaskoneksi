<!DOCTYPE html>
<html>
<head>
    <title>Database Laundry</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #81D8D0;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #77BFC7;
        }
    </style>
</head>
<body>

<center><h1>Data Laundry Bersih Selalu</h1></center>

<h2>Data Pelanggan</h2>
<table>
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Nomor Telepon</th>
    </tr>
    <?php
    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "uts_312310137");
    
    // Query untuk mengambil data pelanggan
    $query = "SELECT * FROM pelanggan";
    $result = mysqli_query($koneksi, $query);
    
    // Loop untuk menampilkan data pelanggan dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_pelanggan'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['tanggal_lahir'] . "</td>";
        echo "<td>" . $row['nomor_telepon'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Data Pegawai</h2>
<table>
    <tr>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Nomor Telepon</th>
    </tr>
    <?php
    // Query untuk mengambil data pegawai
    $query = "SELECT * FROM pegawai";
    $result = mysqli_query($koneksi, $query);
    
    // Loop untuk menampilkan data pegawai dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_pegawai'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['jabatan'] . "</td>";
        echo "<td>" . $row['nomor_telepon'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Data Transaksi</h2>
<table>
    <tr>
        <th>ID Transaksi</th>
        <th>ID Pelanggan</th>
        <th>ID Pegawai</th>
        <th>Tanggal Transaksi</th>
        <th>Total Biaya</th>
    </tr>
    <?php
    // Query untuk mengambil data transaksi
    $query = "SELECT * FROM transaksi";
    $result = mysqli_query($koneksi, $query);
    
    // Loop untuk menampilkan data transaksi dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_transaksi'] . "</td>";
        echo "<td>" . $row['id_pelanggan'] . "</td>";
        echo "<td>" . $row['id_pegawai'] . "</td>";
        echo "<td>" . $row['tanggal_transaksi'] . "</td>";
        echo "<td>" . $row['total_biaya'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Data Layanan</h2>
<table>
    <tr>
        <th>ID Layanan</th>
        <th>Nama Layanan</th>
        <th>Harga</th>
    </tr>
    <?php
    // Query untuk mengambil data layanan
    $query = "SELECT * FROM layanan";
    $result = mysqli_query($koneksi, $query);
    
    // Loop untuk menampilkan data layanan dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_layanan'] . "</td>";
        echo "<td>" . $row['nama_layanan'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Detail Transaksi</h2>
<table>
    <tr>
        <th>ID Transaksi</th>
        <th>ID Layanan</th>
        <th>Jumlah</th>
    </tr>
    <?php
    // Query untuk mengambil data detail transaksi
    $query = "SELECT * FROM detail_transaksi";
    $result = mysqli_query($koneksi, $query);
    
    // Loop untuk menampilkan data detail transaksi dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_transaksi'] . "</td>";
        echo "<td>" . $row['id_layanan'] . "</td>";
        echo "<td>" . $row['jumlah'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>