--TEST--
Test array_keys_unfix() function (error conditions)
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump(array_keys_unfix());  // Zero arguments
var_dump(array_keys_unfix(['test']));
var_dump(array_keys_unfix(['prefix_first'], []));
var_dump(array_keys_unfix('test_abc', 'test_'));
var_dump(array_keys_unfix(new \stdClass));  // object

echo "Done\n";
?>
--EXPECTF--

*** Testing error conditions ***
Warning: array_keys_unfix() expects exactly 2 parameters, 0 given in %s on line %d
NULL

Warning: array_keys_unfix() expects exactly 2 parameters, 1 given in %s on line %d
NULL

Warning: array_keys_unfix() expects parameter 2 to be string, array given in %s on line %d
NULL

Warning: array_keys_unfix() expects parameter 1 to be array, string given in %s on line %d
NULL

Warning: array_keys_unfix() expects exactly 2 parameters, 1 given in %s on line %d
NULL
Done
