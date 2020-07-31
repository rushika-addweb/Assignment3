<?php

class My_Class{
public $mine = "Value Of My_Class";
public function getValue(){
return $this->mine;
}
}

class Your_Class{
public $yours="this my class";
function construct(My_Class$class1)
{
echo $class1->getValue();
}
}

$class2 = new Your_Class(new My_Class());
echo $class2->yours;
?>