<?php

#Indexed Array
echo "<h1>Index Array:</h1>";
$index_arr=array(12,23,"apple");
#traversing array using foreach:
    echo "Foreach loop:<br>";

foreach($index_arr as $val){
echo $val."<br>";
}
echo "<br>";
#traversing array using for:
echo "For loop:<br>";
$ic = count($index_arr);
for($i=0;$i<$ic;$i++){
    echo $index_arr[$i]."<br>";
}

?>
