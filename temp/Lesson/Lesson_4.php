<?php
//    $array = [1, 2, 3, 'dog', 'apple', true, 'four' => 'test'];
//    echo $array[3] . "\r\n";
    $array1 = [
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 'dog',
        'five' => 'apple',
        'six' => true
    ];
//    echo $array1['four'] . "\r\n";
//    $arraySum = $array + $array1;
//    echo var_export($arraySum) . "\r\n";
//    echo var_export(array_values($arraySum)) . "\r\n";
//
    $study = [
        'two' => 2,
        'three' => 3,
        'one' => 1
    ];
    $study1 = [
        'three' => 3,
        'two' => 2,
        'one' => 1
    ];
    $study2 = [
        'one' => 1,
        'three' => 3,
        'two' => 2
    ];
//    echo $study['one'] . "\r\n";
//    echo $study1['one'] . "\r\n";
//    echo $study2['one'] . "\r\n";
//    echo array_values($study)[1] . "\r\n";
//    echo array_values($study1)[1] . "\r\n";
//    echo array_values($study2)[1] . "\r\n";
//    echo var_export(array_slice($array1, 3, 2));
    $arrayTree = [
        1,
        'two' => ['one', 'two', 'three'],
        3,
        'four' => [
            'one' => 1,
            'two' => 2,
            'three' => 3
        ]
    ];

    foreach ($arrayTree as $key => $value) {
        if (is_array($arrayTree[$key])) {
            foreach ($arrayTree[$key] as $key1 => $value1) {
                echo $value1 . "\r\n";
            }
        } else {
            echo $value . "\r\n";
        }
    };

