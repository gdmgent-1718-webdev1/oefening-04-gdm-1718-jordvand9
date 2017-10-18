<?php
$watIs = array('test', false, 2, 3.2, ["array"]);
foreach($watIs as $value)
{
    echo ("De waarde is : " . PHP_EOL);
    echo gettype($value);
}