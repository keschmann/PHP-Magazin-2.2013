$sorter = function($a, $b) {  return $a - $b;};print_r($sorter);/*Closure Object(  [parameter] => Array  (    [$a] => <required>    [$b] => <required>  ))*/$a = array(10, 4, 8, 9, 2, 3, 7, 1, 6, 5);usort($a, $sorter);