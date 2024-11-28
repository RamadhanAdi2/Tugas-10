<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TUGAS 10</title>
        <h1>TUGAS 10</h1>
    </head>
        <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama"><br>
        <br><label>Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir"><br>
        <br><label for="pekerjaan">Pekerjaan :</label>
        <select name="pekerjaan" id="pekerjaan" required>
            <option value="" disabled selected>-- Pilih Pekerjaan --</option>
            <option value="Tentara">Tentara</option>
            <option value="Polisi">Polisi</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
        </select><br>
        <br><input type="submit" value="SEND">
        </form><br><br>
        <?php

        $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
        $thn = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;

        $pekerjaan= $_POST["pekerjaan"];
        switch ($pekerjaan){
            case"Tentara":
                $gaji="Rp. 10.000.000,00";
            case"Polisi":
                $gaji="Rp. 20.000.000,00";
            case"Guru":
                $gaji="Rp. 30.000.000,00";
            case"Dokter":
                $gaji="Rp. 40.000.000,00";
            default:
            "Pilih Pekerjaan";
            }
        
        echo "<h2>Output Tugas PHP</h2>" . "<br>";
        echo 'Nama: ' . $_POST['nama'] . "<br>";
        echo 'Umur: '  .$thn." tahun " ."<br>";
        echo 'Pekerjaann:'.$_POST['pekerjaan']."<br>";
        echo 'Gaji: '  .$gaji ."<br>";
        ?>
    </body>
</html>