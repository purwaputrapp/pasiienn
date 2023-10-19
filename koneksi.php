<?php
$koneksi = new mysqli('localhost', 'root', '', 'purwa_xipplg1')
or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])) {
    $idpasien = $_POST['idPasien'];
    $nmpasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO Pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");

    header('location:Pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idpasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM Pasien WHERE idPasien = '$idPasien'");
    header("location:Pasien.php");
}

if (isset($_POST['edit'])) {
    $idpasien = $_POST['idPasien'];
    $nmpasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE Pasien SET idPasien='$idpasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");
    header("location:Pasien.php");
}