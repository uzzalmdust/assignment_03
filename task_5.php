<?php

 function generatePassword($length){
        
    $str = 'abcdefghijklmnopqrstuvwzyz';
    $str1= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str2= '1234567890';
    $str3= '!@#$%^&*()_+';
    $shuffled = str_shuffle($str);
    $shuffled1 = str_shuffle($str1);
    $shuffled2 = str_shuffle($str2);
    $shuffled3 = str_shuffle($str3);
    $total = $shuffled.$shuffled1.$shuffled2.$shuffled3;
    //$total = $str.$str1.$str2.$str3;
    $shuffled4 = str_shuffle($total);
    $result= substr($shuffled4, 0, $length);

    return $result;

}

echo generatePassword(12);
