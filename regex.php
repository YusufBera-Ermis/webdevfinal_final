<?php
$max = 50;
$string ='w/';

if (preg_match('/[^a-zA-Z]/',$string)){
    echo 'Only letters allowed!';
}
if ($len > $max){
    echo 'the name cannot be longer than' .$max;
}
