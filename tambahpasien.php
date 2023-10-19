<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pasien</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idpasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nmpasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmpasien" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan" id="perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki" id="laki-laki">
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>