<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style_form.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>LATIHAN PHP</h1>
        </header>
        <main>
            <div class="judul_form">
                <h2>Form nilai</h2>
            </div>
            <form action="form.php" method="post">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn"><br>

                <label for="nama">Nama</label>
                <input type="text" name="nama"><br>

                <label for="nilai">Nilai</label>
                <input type="number" name="nilai" id="nilai"><br>

                <input type="submit" value="Input" name="Input">
            </form>
        </main>
        <footer>
            <h5>Dibuat Oleh Sania Comel</h5>
        </footer>
    </div>
    <?php
        if(isset($_POST['Input'])){
            $nisn=$_POST['nisn'];
            $nama=$_POST['nama'];
            $nilai=$_POST['nilai'];

       if($nilai>=90){
            $huruf="A";
       }
       elseif ($nilai>=85){
            $huruf="B";
       }
       elseif ($nilai>=70){
            $huruf="c";
       }
       else{
            $huruf="D";
       }
    ?>
    <table>
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Huruf</th>
        </tr>
        <tr>
            <td><?= $nisn;?></td>
            <td><?= $nama;?></td>
            <td><?= $nilai;?></td>
            <td><?= $huruf;?></td>
        </tr>
    </table>
    <?php
     }
     ?>
</body>
</html>