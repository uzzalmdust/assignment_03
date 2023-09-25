<?php

$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulatioon($text){
    $lowerText = strtolower($text);

    $search = "brown";
    $replace = "red";
    echo str_replace($search,$replace,$lowerText);
}

stringManipulatioon($text);