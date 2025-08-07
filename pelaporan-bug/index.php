<!DOCTYPE html>
<html>
<head>
    <title>Form Tempahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Tempahan Barang</h1>

    
    <form method="post" action="#">
        <label for="nama">Nama Peljar:</label>
        <input type="text" id="nama" name="nama"><br><br>

       
        <label for="barang">Jenis Barang:</label>
        <select id="barang" name="barang">
            <option value="">--Sila pilih--</option>
            <option value="projector">Projector</option>
            <option value="laptop">Laptop</option>
        </select><br><br>

        <input type="submit" name="submit" value="Hantar">
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $barang = $_POST['barang'];

        echo "<p>Terima kasih, $nama. Anda telah menempah $barang.</p>";
    }
    ?>
</body>
</html>
