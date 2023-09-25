<?php
$studentGrades = [
    ['Math' => 90,
    'English' => 82,
    'Science' => 60],
    ['Math' => 92,
    'English' => 75,
    'Science' => 89],
    ['Math' => 84,
    'English' => 62,
    'Science' => 78]    
];

function averageGrade($arr){
    foreach($arr as $key => $value){

        $avg = array_sum($value)/count($value);
        printf("The average grade of stdent_0%d is %d\n", ($key+1), $avg);

    }
}

averageGrade($studentGrades);


//print_r($studentGrades);