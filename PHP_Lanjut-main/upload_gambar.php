<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307049">
    <meta name="author" content="Fandhi Syahru Rishaleh">
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload: </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $upload0k = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                echo "File berupa citra/gambar - " . $check["mime"] . ".";
                $upload0k = 1;
            } else {
                echo "File bukan gambar.";
                $upload0k = 0;
            }
        }

        if (file_exists($target_file)) {
            echo "Sorry, file alredy exists.";
            $upload0k = 0;
        }

        if ($_FILES["gambar"]["size"] > 5000000) {
            echo "Sorry, file anda terlalu besar.";
            $upload0k = 0;
        }

        if($tipeGambar !="jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "Sorry, hanya file JPG, JPEG, PNG & GIF .";
            $upload0k = 0;
        }

        if ($upload0k == 0) {
            echo "Sorry, File anda gagal upload.";
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file ". htmlspecialchars( basename($_FILES["gambar"]["name"])). " berhasil upload.";
        } else {
            echo "Sorry, Ada error saat upload.";
            }
        }
    }
    ?>
</body>
</html>