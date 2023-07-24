<?php
    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );

    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );

    $keysAndValues = array();

    foreach ($keys as $key => $keyName) {
        $valueKey = $key . "value";
        if (isset($values[$valueKey])) {
            $keysAndValues[$keyName] = $values[$valueKey];
        }
    }

    print_r($keysAndValues);
?>
