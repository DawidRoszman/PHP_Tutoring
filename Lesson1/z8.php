<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $string = "";
  $freq = array();

  if (isset($_GET["string"])) {
    $string = $_GET["string"];
    $freq = count_frequency_of_letters($string);
  }

  function count_frequency_of_letters($word)
  {
    $frequency = array();

    for ($i = 0; $i < strlen($word); $i++) {
      $letter = $word[$i];
      if (!isset($frequency[$letter])) {
        $frequency[$letter] = 1;
      } else {
        $frequency[$letter]++;
      }
    }

    return $frequency;
  }

  ?>
  <form action="">
    <input type="text" name="string">
    <input type="submit" value="Count">
  </form>
  <h1>
    Word:
    <?php
    echo $string . "<br />";

    if (count($freq) > 0) {
      foreach ($freq as $letter => $freq) {
        echo "Letter " . $letter . " appeared " . $freq . " times<br />";
      }
    }
    ?>
  </h1>
</body>

</html>