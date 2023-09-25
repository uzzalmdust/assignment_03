<?php

$grades = [85,92,78,88,95];



function gradeSort($grades){

    $size = count($grades);

    for($j=0; $j < $size; $j++){
        for($i=0; $i < ($size - 1); $i++){
            if($grades[$i] < $grades[$i + 1]){

                $temp = $grades[$i + 1];
                $grades[$i + 1] = $grades[$i];
                $grades[$i] = $temp;

            }
        }
    }

    print_r($grades);
}

gradeSort($grades);