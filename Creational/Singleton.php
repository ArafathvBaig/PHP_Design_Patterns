<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Singleton Design Problem
 */
class Student
{
    private function __construct()
    {
        echo "Student Constructor has been Called.";
    }

    /**
     * 
     */
    public static function createObject()
    {
        static $student = null;
        if ($student == null) {
            $student = new Student();
        }
        return $student;
    }
}

$student1 = Student::createObject();
$student2 = Student::createObject();
$student3 = Student::createObject();
$student4 = Student::createObject();
