<?php
class student{
public $name;
public $course;
public function __construct($n){
$this->name= $n;
}
public function setCourse(course $c){
$this->course =$c;
}
}
class course{
public $cname;
public function __construct($cn){
$this->cname = $cn;
}
}
$student1 = new student('sneha');
$course1 = new course ('php');
$student1->setCourse($course1);
$student2 = clone $student1;
$student2->name = "Sheetal";
$student2->course->cname ="python";
echo "<pre>";
print_r($student1);
echo "<pre>";
echo "<pre>";
print_r($student2);
echo "<pre>";
?>