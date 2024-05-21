<?php
$alphabets = array('a'=>'Assamese',
                    'b'=>'Bengali',
                    'c'=>'Chhattisgarhi',
                    'd'=>'Dogri',
                    'e'=>'-',
                    'f'=>'-',
                    'g'=>'Gujarati',
                    'h'=>'Hindi',
                    'i'=>'-',
                    'j'=>'Jarawa',
                    'k'=>"Kannada",
                    'l'=>'Lahuli–Spiti',
                    'm'=>'Marathi',
                    'n'=>'Nepali',
                    'o'=>'Odia',
                    'p'=>'Pali',
                    'q'=>'-',
                    'r'=>'Rajasthani',
                    's'=>'Sanskrit',
                    't'=>'Tamil',
                    'u'=>'Urdu',
                    'v'=>'-',
                    'w'=>'-',
                    'x'=>'-',
                    'y'=>'-',
                    'z'=>'-');
                    
echo 'Languages around the world A-Z: <br>';
foreach($alphabets as $x=>$y)
{
    echo $x. ' : ' .$y.'<br>';
}
?>