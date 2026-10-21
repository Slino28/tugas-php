<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Struktur Kendali dan Form Processing</title>
</head>
<body>

    <h2>Form Input Nilai Ujian</h2>
    
    <!-- Form dengan Input: Nama, Email, Nilai Ujian -->
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>

        <input type="submit" name="proses" value="Kirim">
    </form>

    <hr>

    <?php
    // Form Processing & Struktur Kendali
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        // Pengondisian Struktur Kendali
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        // Tampilkan Output ke Halaman Browser
        echo "<h3>Hasil Processing:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";
        echo "Status: <b>$status</b>";
    }
    ?>

</body>
</html>