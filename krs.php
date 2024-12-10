<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Rencana Studi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="my-4">Kartu Rencana Studi (KRS)</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Mata Kuliah</th>
                <th>Nama Dosen</th>
                <th>Jumlah SKS</th>
                <th>Tahun Pengambilan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT nim, nama_mahasiswa, nama_mata_kuliah, nama_dosen, jumlah_sks, tahun_pengambilan FROM krs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['nim']}</td>
                            <td>{$row['nama_mahasiswa']}</td>
                            <td>{$row['nama_mata_kuliah']}</td>
                            <td>{$row['nama_dosen']}</td>
                            <td>{$row['jumlah_sks']}</td>
                            <td>{$row['tahun_pengambilan']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>