<?php

// Zapełnij tablicę 10-cio losowo wybranymi liczbami z zakresu 1 – 100. 

$arr = [];

for ($i = 0; $i < 10; $i++) {
  // echo $i . "<br/>";
  $arr[$i] = rand(1, 100);
}

foreach ($arr as $num) {
  echo $num . " ";
};

echo "<br />";
// Napisz skrypt, który znajdzie najmniejszą i największą liczbę  z tablicy z zadania 1.

$min = $arr[0];
for ($i = 1; $i <= 9; $i++) {
  if ($min > $arr[$i]) {
    $min = $arr[$i];
  }
}
echo ("$min ");


// 3 4 2 1 5
// $min = 3
// for $i = 1, $arr[$i] = 4
// $min > $arr[$i]
// 3 > 4 F
// 3 > 2 P -> $min = 2

$max = $arr[0];
for ($i = 1; $i <= 9; $i++) {
  if ($max < $arr[$i]) {
    $max = $arr[$i];
  }
}
echo $max;

// 3 4 2 1 5
// $max = 3
// for $i = 1, $arr[$i] = 4
// $min < $arr[$i]
// 3 < 4 P
// $max = 4
// 4 > 2 F 

// $min = min($arr);
// $max = max($arr);


// echo "Min: " . $min . "<br />";
// echo "Max " . $max;
