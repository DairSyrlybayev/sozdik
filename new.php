<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Etymologyst сөз енгізу</title>
</head>

<body>
  <?php require "blocks/header.php" ?>

  <div class="container mt-4">
    <form action="check.php" method="post">
      <input type="text" class="form-control" name="word" id="word" placeholder="Жаңа сөзді енгізіп қой"><br>
      <input type="text" class="form-control" name="etymology" id="etymology" placeholder="Этимологиясын енгізіп қой"><br>
      <input type="text" class="form-control" name="example" id="example" placeholder="Сөз қолданылған әдебиеттерді енгізіп қой"><br>
      <button class="btn btn-submit" type="submit">Бас</button>
    </form>
  </div>

  <?php require "blocks/footer.php" ?>
</body>

</html>
