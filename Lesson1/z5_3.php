<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $filename = 'numbers.json';
  // $liczby = file_exists($filename) ? json_decode(file_get_contents($filename)) : [];
  if (file_exists($filename)) {
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    echo $content;

    $liczby = json_decode($content);
    // print_r($liczby);
    // print_r($decoded[0]);
  } else {
    $liczby = [];
  }

  if (isset($_POST["number"])) {
    array_push($liczby, $_POST["number"]);
    // r = read
    // w = write
    // a = append
    $file = fopen($filename, "w");
    fwrite($file, json_encode($liczby));
    // file_put_contents($filename, json_encode($liczby));
  }
  ?>

  <form action="#" method="post">
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
      for ($i = 0; $i < count($liczby); $i++) {
        $avg += $liczby[$i];
      }
      // foreach ($liczby as $liczba) {
      //   $avg += $liczba;
      // }
      echo $avg;
      $avg = $avg / count($liczby);
      echo "Average: " . $avg;
    }
    ?>
  </p>
</body>

</html>