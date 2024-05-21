<?php
class Student{
public $name;
public $rollno;
public $course;
function __construct($n,$r,$c){
$this->name= $n;
$this->rollno= $r;
$this->course= $c;
}
public function getStudent(){
echo "Name-{$this->name}<br>rollno-{$this->rollno}<br>Course-{$this->course}<br>";
}
}
class Test extends Student{
public $php;
public $python;
public $mad;
public $man;
function __construct($n,$r,$c,$m1,$m2,$m3,$m4){
parent::__construct($n,$r,$c);
$this->php= $m1;
$this->python= $m2;
$this->mad= $m3;
$this->man= $m4;
}
function getTestDetails(){
$this->getStudent();
echo " PHP: {$this->php}<br>Python:{$this->python}<br>Android:{$this->mad}<br>Management:{$this->man}<br>";
}
}
$t1 = new Test("Shilpa",114,"CO",23,22,23,23);
$t1->getTestDetails();
?>