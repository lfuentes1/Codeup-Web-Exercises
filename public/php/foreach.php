<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datum) {
    if (is_int($datum)) {
        echo "{$datum} is an integer" . PHP_EOL;
    } else if (is_float($datum)) {
        echo "{$datum} is a float" . PHP_EOL;
    } else if (is_bool($datum)) {
        echo "{$datum} is a boolean" . PHP_EOL;
    } else if (is_array($datum)) {
    	var_dump ("array is a array" . PHP_EOL);
    } else if (is_null($datum)) {
    	echo "{$datum} is null" . PHP_EOL;
   	} else if (is_string($datum)) {
   		echo "{$datum} is a string" . PHP_EOL;
   	}
}

echo PHP_EOL;

//Look up gettype function
foreach ($things as $datum) {
	//Float, integer, string, boolean.  Not nulls and not collections
    if (is_scalar($datum)) {
        echo "{$datum} is a is scalar" . PHP_EOL;
    }
}

echo PHP_EOL;

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.

//  Sgt. Pepper
//  11

//  Array (loop through inner array display here)
//  3.14
//  12 + 7

//  11
foreach ($things as $datum) {
    if (is_array($datum)) {
        foreach ($datum as $element) {
            echo $element . PHP_EOL;  
        }
    }
    else {
        echo "{$datum}" . PHP_EOL;    
    }    
}
