<?php
function test_even($var)
  {
  return !($var & 1);
  }
$a1=['kat', 'hond', 'olifant'];
$filter = array_filter(strlen($a1));
print_r(array_sum($filter));
?>