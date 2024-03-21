<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Utwórz dwie tablice:
  // marka {"ford","toyota","opel",""audi","bmw")
  // model {"focus",""yaris","astra",")
  // Utwórz listę rozwijalną z możliwością wyboru marki samochodu oraz przycisk szukaj
  // po wybraniu przez użytkownika danej marki i wcisśnięciu przycisku ma się pojawić odpowiedni model


  $marka = ["ford", "toyota", "opel", "audi", "bmw"];
  $model = ["focus", "yaris", "astra"];

  if (isset($_POST['marka'])) {
    $selected_marka = $_POST['marka'];
    $index = array_search($selected_marka, $marka);
    $ans =  $marka[$index] . " " . $model[$index];
  }
  ?>

  <form method="post">
    <select name="marka">
      <?php
      foreach ($marka as $car) {
        echo "<option value='$car'>$car</option>";
      }
      ?>
    </select>
    <input type="submit" value="Find">
  </form>

  <h1>
    <?php echo $ans ?>
  </h1>

</body>

</html>