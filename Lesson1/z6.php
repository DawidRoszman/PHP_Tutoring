<?php

$list_of_numbers = [];

for ($i = 0; $i < 10; $i++) {
  array_push($list_of_numbers, rand(1, 100));
}

function sortArray($arr)
{
  for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j + 1]) {
        $temp = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $temp;
      }
    }
  }
  return $arr;
}

/*

3 4 5 2

for 1. -> 4
for 2. -> 4 - indeks for 1. - 1 

i = 3, j = 3
j > i
i = 3, j = 4
j > i
4 > 3
3 4 5 2
4 3 5 2





*/

print_r(sortArray($list_of_numbers));
echo "<br />";
print_r($list_of_numbers);
echo "<br />";
print_r(sort($list_of_numbers));
echo "<br />";
print_r($list_of_numbers);
