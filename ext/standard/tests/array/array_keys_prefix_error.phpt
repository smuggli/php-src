--TEST--
Test array_keys_prefix() function (error conditions)
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump(array_keys_prefix());  // Zero arguments
var_dump(array_keys_prefix(['test']));
var_dump(array_keys_prefix(['prefix_first'], []));
var_dump(array_keys_prefix('test_abc', 'test_'));
var_dump(array_keys_prefix(new \stdClass, 'prefix_'));  // object

echo "Done\n";
?>
--EXPECTF--

*** Testing error conditions ***
Warning: array_keys_prefix() expects exactly 2 parameters, 0 given in %s on line %d
NULL

Warning: array_keys_prefix() expects exactly 2 parameters, 1 given in %s on line %d
NULL

Warning: array_keys_prefix() expects parameter 2 to be string, array given in %s on line %d
NULL

Warning: array_keys_prefix() expects parameter 1 to be array, string given in %s on line %d
NULL

Warning: array_keys_prefix() expects parameter 1 to be array, object given in %s on line %d
NULL
Done
