<?php
$var = 5;

function myFunction($var)
{
    var_export($var);
};

myFunction($var);

function myFunction2($var)
{
    return $var + $var;
}

myFunction(myFunction2($var));

function myFunction3($var)
{
    $var = 10;
    $var = myFunction2($var);
    myFunction($var);
}

myFunction3($var);

//function myFunction4($var = NULL)
//{
//    $var = myFunction2($var);
//    myFunction2($var);
//}
//
//myFunction3();

function myFunction5($var)
{
    if (NULL === $var) {
        $var = 10;
    }
    $var = myFunction2($var);
    myFunction($var);
}

myFunction5($var);
