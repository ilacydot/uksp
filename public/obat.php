<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
    <style>
        body {
            text-align: center;
        }

        h3 {
            margin-top: 20px;
        }

        table {
            width: 80%; /* Sesuaikan lebar tabel sesuai kebutuhan */
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Daftar Obat</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Obat</th>
        <th>Satuan</th>
        <th>Stok</th>
    </tr>

    <?php
    include "koneksi.php";

    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM list_obat");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[namaobat]</td>
            <td>$tampil[satuan]</td>
            <td>$tampil[stok_obat]</td>
        </tr>";
        $no++;  
    }
    ?>
</table>

</body>
</html>