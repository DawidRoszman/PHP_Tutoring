<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $comments = [];

  $file = fopen("comments.json", "r");
  if ($file && filesize("comments.json") > 0) {
    $contents = fread($file, filesize("comments.json"));
    $comments = json_decode($contents, true);
    fclose($file);
  }

  if (isset($_POST["name"]) && isset($_POST["comment"])) {
    $curr_data = date('Y-m-d H:i:s');
    $comment = array(
      "name" => $_POST["name"],
      "comment" => $_POST["comment"],
      "date" => $curr_data
    );
    array_push($comments, $comment);

    $file = fopen("comments.json", "w");
    if ($file) {
      fwrite($file, json_encode($comments));
      fclose($file);
    }
  }
  ?>
  <form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="comment">
    <input type="submit" value="Send comment">
  </form>
  <section id="comments">
    <?php
    foreach ($comments as $comment) {
      echo "<strong>" . $comment["name"] . "</strong>" . " : " . $comment["comment"] . ", at " . $comment["date"] . "<br />";
    }
    ?>
  </section>
</body>

</html>