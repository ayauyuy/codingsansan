<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link rel="stylesheet" href="lthn3.css">
</head>
<body>
    <div id="container">
        <header>
            <div class="judul">
                <h1>Menu Makanan Enak</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="latihan3.php?gbr=tahugejrot">Tahu Gejrot </a></li>
                    <li><a href="latihan3.php?gbr=sotobtw">Soto Betawi</a></li>
                    <li><a href="latihan3.php?gbr=seblakseafood">Seblak Seafood</a></li>
                    <li><a href="latihan3.php?gbr=satemdr">Sate Madura</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                if(isset($_GET["gbr"])){
                    $gambar=$_GET["gbr"];
                    switch ($gambar) {
                        case "tahugejrot":
                            ?><img src="tahugejrot.jpg" alt="tahugejrot" width=100%>
                        <?php
                        break;
                        case "sotobtw":
                            ?><img src="sotobtw.jpg" alt="sotobtw" width=100%>
                        <?php
                        break;
                        case "seblakseafood":
                            ?><img src="seblakseafood.jpg" alt="seblakseafood" width=100%>
                        <?php
                        break;
                        case "satemdr":
                            ?><img src="satemdr.jpg" alt="satemdr" width=100%>
                        <?php
                        break;
                    }
                }
            ?>
        </main>
    </div>
</body>
</html>