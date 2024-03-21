<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  session_start();

  $liczby = isset($_SESSION["liczby"]) ? json_decode($_SESSION["liczby"]) : [];

  if (isset($_POST["number"])) {
    array_push($liczby, $_POST["number"]);
    $_SESSION["liczby"] = json_encode($liczby);
  }


  ?>

  <form action="#" method="post">
    <input type="number" name="number" />
    <input type="submit" value="Submit" />
  </form>
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