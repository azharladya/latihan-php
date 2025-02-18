<?php
  // Definisikan variabel
  $judul_section = "Temukan Gaya Unikmu!";
  $paragraf_fashion = "Fashion bukan hanya pakaian, tetapi juga cara kita berbicara kepada dunia!";
  $default_teks = "Halo Dunia";
  $gambar_fashion = "https://plus.unsplash.com/premium_photo-1664202525979-80d1da46b34b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Ym91dGlxdWV8ZW58MHx8MHx8fDA%3D&w=1000&q=80";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Trend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function ubahTeks() {
            document.getElementById("fashionText").innerHTML = "Fashion adalah ekspresi diri!";
        }
    </script>
    <style>
        .judul {
            background-color: #ff61ba;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
        }
        .btn-custom {
            background-color: #da61ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #d328ab;
        }
        .img-custom {
            width: 50%;
            max-width: 200px;
            height: 35cm;
            display: block;
            margin: 20cm;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="judul"><?php echo $judul_section; ?></h1>
        <p id="fashionText" class="mt-3"><?php echo $default_teks; ?></p>
        <button class="btn btn-custom" onclick="ubahTeks()">Ubah Teks</button>
        <div class="row mt-4">
            <div class="col-md-6">
                <p><?php echo $paragraf_fashion; ?></p>
                <textarea class="form-control" placeholder="Tulis pendapatmu tentang fashion..."></textarea>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $gambar_fashion; ?>" class="img-fluid rounded" alt="Fashion Image">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
