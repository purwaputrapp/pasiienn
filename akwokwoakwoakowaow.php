<html>
    <head>
        <title>My App | Halaman Utama</title>
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/botstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbarexpand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">My App</a>
                    <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-expanded="false" aria-label="Toogle navigation">
                       <span class="navbar-toggle-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page">Pasien</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Pasien</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambahpasien.php" class="btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELCT * FROM pasien");

                    while ($row =$$hasil->fetch_assoc()) {
                        ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row ['idPasien']; ?></td>
                        <td><?= $row ['namapasien']; ?></td>
                        <td><?= $row ['jk']; ?></td>
                        <td><?= $row ['alamat']; ?></td>
                        <td><a href="editpasien.php?edit=<?= $row ['idPasien']; ?>"class="btn btn-warning btn-sm">Edit </a><a
                        href="koneksi.php?idPasien=<?= $row['idPasien']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>