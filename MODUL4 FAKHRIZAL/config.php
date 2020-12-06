<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul4";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "<script>";
    echo "alert('Gagal Tersambung ke Database')";
    echo "</script>";
}

if (isset($_POST["daftar"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $sandi = $_POST["sandi"];
    $konfirmasi = $_POST["konfirmasi"];
    if ($sandi != $konfirmasi) {
        echo '<script type="text/javascript">alert("Kata Sandi berbeda!")</script>';
        return;
    }

    $query = mysqli_query($conn, "INSERT INTO user VALUES('','$nama','$email','$no_hp','$sandi')");
    if ($query > 0) {
        echo "<script>alert('Berhasil Mendaftar'); window.location.href='login.php'</script>";
    } else {
        echo "<script>alert('Coba Lagi!');</script>";
    }

    //Memulai Session
    header("Refresh:10;url=login.php");

    session_start();
    $_SESSION["regisnama"] = $nama;
    $_SESSION["regisemail"] = $email;
    $_SESSION["regisno_hp"] = $no_hp;
    $_SESSION["regissandi"] = $sandi;
    $_SESSION["regisTime"] = time();
    echo "'$nama' Berhasil Register. akan diarahkan ke login";
}
