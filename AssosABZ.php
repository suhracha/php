<?php
$alphabets = array('a'=>'Arabic',
                    'b'=>'Balinese',
                    'c'=>'Cantonese',
                    'd'=>'Dutch',
                    'e'=>'English',
                    'f'=>'French',
                    'g'=>'German',
                    'h'=>'Hindi',
                    'i'=>'Italian',
                    'j'=>'Japanese',
                    'k'=>"Korean",
                    'l'=>'Latin',
                    'm'=>'Marathi',
                    'n'=>'Nepali',
                    'o'=>'Odia',
                    'p'=>'Persian',
                    'q'=>'Qabena',
                    'r'=>'Russian',
                    's'=>'Spanish',
                    't'=>'Turkish',
                    'u'=>'Urdu',
                    'v'=>'Vietanamese',
                    'w'=>'Welsh',
                    'x'=>'Xhosa',
                    'y'=>'Yiddish',
                    'z'=>'Zulu');
                    
echo 'Languages around the world A-Z: <br>';
foreach($alphabets as $x=>$y)
{
    echo $x. ' : ' .$y.'<br>';
}
?>