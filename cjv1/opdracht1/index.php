<?php
function test_even($var)
  {
  return !($var & 1);
  }

$a1=array(1,2,3,4);
$filter = array_filter($a1,"test_even");
print_r(array_sum($filter));
?>