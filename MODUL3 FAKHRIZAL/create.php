<?php
    include ('config.php');

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_POST['gambar'];
        $kategori = $_POST['kategori'];
        $tanggal = $_POST['tanggal'];
        $mulai = $_POST['mulai'];
        $berakhir = $_POST['berakhir'];
        $tempat = $_POST['tempat'];
        $harga = $_POST['harga'];
        $benefit = implode(", ", $_POST['benefit']);
        $query = "INSERT INTO event (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit) 
        VALUES ('$name', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
        
        if ($conn->query($query) === TRUE) {
            header("location:home.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();
    }
?>