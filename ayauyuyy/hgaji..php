<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_form.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gaji Pegawai</h1>
        </header>
        <main>
            <div class="hgaji">
                <h2>Gaji</h2>
            </div>
            <form action="hgaji.php" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama">

                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan">
                <option value="produksi">Produksi</option>
                <option value="pemasaran">Pemasaran</option>
                <option value="manajemen">Manajemen</option>
                </select>
                
                <label for="tunjanganis">Sudah menikah?</label>
                <select name="tunjanganis" id="tunjanganis">
                <option value="menikah">Sudah menikah</option>
                <option value="belmenikah">Belum menikah</option>
                

                <label for="anak">Berapa anak?</label>
                <input type="number" name="anak">

                <input type="submit" value="Simpan" name="simpan">
            </form>
        </main>
        <footer>
            <h4>Dibuat oleh sania comel</h4>
        </footer>
    </div>
    <?php
    if(isset($_POST['simpan'])){
        $nama=$_POST['nama'];
        $jabatan=$_POST['jabatan'];
        $tunjanganis=$_POST['tunjanganis'];
        $anak=$_POST['anak'];

    if ($jabatan="produksi") {
        $gaji=100000;
    }
    elseif($jabatan="pemasaran"){
       $gaji=120000;
    }
    else {
        $gaji=150000;
    }
    
    if ($tunjanganis="menikah") {
        $tunj=1000000;
    }
    else {
        $tunj=0;
    }

    if ($anak="satu") {
        $tunj1=75000
    }
    
    }
    ?>
</body>
</html>