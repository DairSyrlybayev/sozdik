<?php
$db = new PDO("mysql:host = localhost; dbname = etymology; charset = utf8mb4", "root", "root");

$res = [];

echo "<pre>";

if($query = $db->query("SELECT * FROM words")) {
  $res = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($res);
} else {
  var_dump($db->errorInfo());
}

echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Etymologyst</title>
</head>

<body>
  <?php require "blocks/header.php" ?>




  <?php require "blocks/footer.php" ?>
</body>

</html>
