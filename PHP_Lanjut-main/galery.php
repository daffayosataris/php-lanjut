<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
        }
        body img {
            height: 5rem;
            width: auto;
            padding: 1rem 1rem;
        }
    </style>
</head>
<body>
    <?php 
    $fileList = glob('gambar/*');
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            echo '<img src="'. $filename . '" alt="Gambar"><br>';
        }
    }
    ?>
</body>
</html>