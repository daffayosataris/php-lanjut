<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi array ke Json</title>
</head>
<body>
  <?php

  $people = [
    ["name" => "Daffa", "age" => 25],
    ["name" => "Yosataris", "age" => 32],
    ["name" => "Ronaldo", "age" => 18],
    ["name" => "Bruno", "age" => 41],
    ["name" => "Santi", "age" => 27],
    ["name" => "Nadia", "age" => 60],
    ["name" => "Bass", "age" => 22],
    ["name" => "Emperor", "age" => 38],
    ["name" => "Clayyy", "age" => 19],
    ["name" => "Branz", "age" => 24],
    ["name" => "Anavel", "age" => 55],
    ["name" => "Dreams", "age" => 16],
    ["name" => "Nando", "age" => 30],
    ["name" => "Xinn", "age" => 21],
    ["name" => "Donn", "age" => 28],
  ];

  // Mengkonversi data Array ke Json
  $json = json_encode($people, JSON_PRETTY_PRINT);

  // Menampilkan data Json
  echo "<pre>" . $json . "</pre>";
  ?>
</body>
</html>