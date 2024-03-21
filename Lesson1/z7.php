<?php


/*

3 2 1 4
8 7 9 2

i=0
3 - 8 -> 3 = 8?
2, 7 -> 2 = 7

i=0 -> 3
j=0 -> 8
3 = 8?

i=0 -> 3
j=1 -> 7
3 = 7?


0 -> 1 -> 2 -> 3
3 -> 2 -> 1 -> 4

*/
$arr1 = [8, 2, 1, 4];
$arr2 = [8, 7, 9, 2];
for ($i = 0; $i < 4; $i++) {
  echo ("$arr1[$i] ");
  // echo ("$arr2[$j]");
}
echo ("<br>");
for ($j = 0; $j < 4; $j++) {
  // echo ("$arr1[$i] ");
  echo ("$arr2[$j] ");
}
echo ("<br>");
echo ("<br>");
for ($i = 0; $i < 4; $i++) {
  for ($j = 0; $j < 4; $j++) {
    // echo $i;
    // echo "<br/>";
    // echo $arr1[$i];
    // echo " I <br/>";
    // echo $j;
    // echo "<br/>";
    // echo $arr2[$j];
    // echo " J <br/>";
    // // echo $i == $j;
    // // echo "<br/>";
    // echo $arr1[$i] == $arr2[$j];
    // echo "<br/>";
    if ($arr1[$i] == $arr2[$j]) {
      echo ("Duplikat: ");
      echo ("$arr1[$i] <br/>");
    }
  }
}

// echo ("$arr1");

/*
3 2 1 4
8 7 9 2

Duplikat

*/






























/*








$list1 = [];
$list2 = [];
for ($i = 0; $i < 10; $i++) {
  array_push($list1, rand(1, 100));
  array_push($list2, rand(1, 100));
}

print_r($list1);
echo "<br />";
print_r($list2);
echo "<br />";

same_value_in_both_lists($list1, $list2);

echo "<br />";

more_optimized($list1, $list2);

// O(n^2)
function same_value_in_both_lists($arr1, $arr2)
{
  for ($i = 0; $i < count($arr1); $i++) {
    for ($j = 0; $j < count($arr2); $j++) {
      if ($arr1[$i] == $arr2[$j]) {
        // echo "Jest duplikat";
        // return;
        echo "Same number: " . $arr1[$i] . "<br />";
      }
    }
  }
}

// O(n)
function more_optimized($arr1, $arr2)
{
  $set1 = array_flip($arr1);
  $set2 = array_flip($arr2);

  $common_elements = array_intersect_key($set1, $set2);

  if (count($common_elements) > 0) {
    print_r($common_elements);
  }

  if (!empty($common_elements)) {
    echo "Jest duplikat";
    return;
  }
}

*/