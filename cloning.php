<?php
class student{
public $name;
public function __construct($n){
$this->name= $n;
}
public function display(){
echo "Name:{$this->name}<br>";
}
}
$student1 = new student('Sneha');
//echo $student1->name."<br>";
echo "Student1 details<br>";
$student1->display();
echo "After clonning<br>";
$student2 = clone $student1;
$student2->display();
$student2->name = 'Snehal';
echo "Student1 details<br>";
$student1->display();
echo "Student2 details<br>";
$student2->display();
?>