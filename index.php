<?php
//reflex

//public, protected, private

class Foo
{
    protected $var = 5;

    public function getVar()
    {
        return $this->var;
    }

    public function setVar($value)
    {
        $this->var = $value;
    }
}

class Bar extends Foo
{
    protected $var1 = 15;

    public function getVar1()
    {
        return $this->var1;
    }

    public function setVar1($value)
    {
        $this->var1 = $value;
    }

    public function sumVar()
    {
        return $this->var + $this->var1;
    }
}

$bar = new Bar;
echo $bar->getVar1() . "\r\n";
echo $bar->getVar() . "\r\n";
echo $bar->sumVar() . "\r\n";

//$foo = new Foo;
////var_export($foo);
////echo $foo->var  . "\r\n";
//$foo->setVar(10);
//echo $foo->getVar() . "\r\n";
////echo $foo->var . "\r\n";
////$foo->var = 15;
////echo $foo->var . "\r\n";
//
//$foo1 = new Foo;
//echo $foo1->getVar() . "\r\n";

//ДЗ от родителя сделать трех наследников. От этих наследников от двух сделать еще по одному. Одного наследника сделать финальным (final). И в паренте выписать выписать абстрактную функцию.
//