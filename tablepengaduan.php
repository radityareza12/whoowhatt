<?php
// memanggil config
include 'config.php';

// kueri data
$query = "SELECT * FROM pengaduan";
$result = mysqli_query($mysqli, $query);
$data_pengadaun = mysqli_fetch_all($result, MYSQLI_ASSOC);

// menutup koneksi ke database
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Laporan Pengaduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@400; 500; 700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(pa.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <h1 class="text-white text-center mt-5 mb-5">PORTAL PENGADUAN MASYRAKAT</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <a href="pengaduan.php" class="mt-5 btn btn-secondary">Kembali</a>
                <table class="table mt-2">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tgl Pengaduan</th>
                            <th scope="col" width="70%">Isi Laporan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data_pengadaun as $pengaduan) : ?>
                            <tr>
                                <th scope="row"><?= $pengaduan['id_pengaduan']; ?></th>
                                <td><?= $pengaduan['tgl_pengaduan']; ?></td>
                                <td><?= $pengaduan['isi_laporan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>