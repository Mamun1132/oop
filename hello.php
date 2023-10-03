<?php

$studentGrades = array(
    array('Math' => 85, 'English' => 78, 'Science' => 92),
    array('Math' => 90, 'English' => 88, 'Science' => 76),
    array('Math' => 78, 'English' => 92, 'Science' => 85)
);


function calculateAverageGrades($grades) {
    $numStudents = count($grades);

    for ($i = 0; $i < $numStudents; $i++) {
        $student = $grades[$i];
        $totalGrade = 0;

        
        foreach ($student as $subject => $grade) {
            $totalGrade += $grade;
        }

       
        $averageGrade = $totalGrade / count($student);


        echo "Student " . ($i + 1) . " - Average Grade: " . $averageGrade . "<br>";
    }
}


calculateAverageGrades($studentGrades);
?>