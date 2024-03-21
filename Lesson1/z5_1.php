<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $liczby = [];

  if (isset($_GET["number"]) && isset($_GET["list"])) {
    $liczby = json_decode($_GET["list"]);
    array_push($liczby, $_GET["number"]);
  }


  ?>

  <form action="" method="get">
    <input hidden value=<?php echo json_encode($liczby); ?> name="list" />
    <input type="number" name="number" />
    <input type="submit" value="Submit" />
  </form>

  <p>
    Liczby:
    <br />
    <?php
    foreach ($liczby as $liczba) {
      echo $liczba . "<br />";
    }
    $avg = 0;
    if (count($liczby) > 0) {
      foreach ($liczby as $liczba) {
        $avg += $liczba;
      }
      $avg /= count($liczby);
      echo "Average: " . $avg;
    }
    ?>
  </p>
</body>

</html>