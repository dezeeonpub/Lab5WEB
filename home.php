<?php require('header.php'); ?>
<div class="content">
    <h2>Home</h2>
    
</div>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <table>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
                <?php
                // membuat koneksi ke database
                $conn = mysqli_connect("localhost", "root", "", "latihan1");

                // memeriksa koneksi ke database
                if (!$conn) {
                    die("Koneksi gagal: " . mysqli_connect_error());
                }

                // menjalankan query untuk menampilkan data dari database
                $sql = "SELECT * FROM akmal";
                $result = mysqli_query($conn, $sql);

                // menampilkan data
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nim'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='4'>Belum ada data</td>";
                    echo "</tr>";
                }

                // menutup koneksi ke database
                mysqli_close($conn);
                ?>

            </table>
        </div>
    </div>
</body>

</html>