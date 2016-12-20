--TEST--
Test array_keys_prefix() function (basic)
--FILE--
<?php

echo "*** Testing array_keys_prefix() ***\n";
$test = [
    'first' => 1,
    'second' => 2,
    'third' => ['first', 'second'],
    'fourth',
    'fifth' => new \stdClass(),
    'prefix_aVeryLong_prefix_sixth' => '6',
    '7' => "test"
];
var_dump(array_keys_prefix($test, 'prefix_'));

echo "Done\n";
?>
--EXPECTF--
*** Testing array_keys_prefix() ***
array(7) {
  ["prefix_first"]=>
  int(1)
  ["prefix_second"]=>
  int(2)
  ["prefix_third"]=>
  array(2) {
    [0]=>
    string(5) "first"
    [1]=>
    string(6) "second"
  }
  [0]=>
  string(6) "fourth"
  ["prefix_fifth"]=>
  object(stdClass)#1 (0) {
  }
  ["prefix_aVeryLong_prefix_sixth"]=>
  string(1) "6"
  [7]=>
  string(4) "test"
}
Done
