--TEST--
Test array_keys_unfix() function (basic)
--FILE--
<?php

echo "*** Testing array_keys_unfix() ***\n";
$test = [
    'prefix_first' => 1,
    'prefix_second' => 2,
    'third' => ['first', 'second'],
    'fourth',
    'prefix_fifth' => new \stdClass(),
    'aVeryLong_prefix_sixth' => '6'
];
var_dump(array_keys_unfix($test, 'prefix_'));

echo "Done\n";
?>
--EXPECTF--
*** Testing array_keys_unfix() ***
array(6) {
  ["first"]=>
  int(1)
  ["second"]=>
  int(2)
  ["third"]=>
  array(2) {
    [0]=>
    string(5) "first"
    [1]=>
    string(6) "second"
  }
  [0]=>
  string(6) "fourth"
  ["fifth"]=>
  object(stdClass)#1 (0) {
  }
  ["aVeryLong_prefix_sixth"]=>
  string(1) "6"
}
Done
