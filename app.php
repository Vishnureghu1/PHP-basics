<?php

$age = (int)readline('Enter a age: ');
$student_class_result = null;
$student_teacher = null;
$student_department = null;

class student_age {
    public function set_student_age($age) {
        if ($age < 6) {
            return 'Child';
        } else if ($age > 15) {
            return 'Adult';
        } else {
            return $age;
        }
    }
}
 class student_class {
    public $student_class;
    public function set_student_class($student_class) {
        $this->student_class = $student_class;
    }

    public function get_student_class() {
        return $this->student_class;
    }
  }

 class student_teacher {

    public $teacher;
    public function set_student_teacher($teacher) {
        $this->teacher = $teacher;
    }

    public function get_student_teacher() {
        return $this->teacher;
    }
 } 
 
 class student_department {

    public $department;

    public function set_student_department($department) {
        $this->department = $department;
    }

    public function get_student_department() {
        return $this->department;
    }
 }

$student_class_obj = new student_age();
$get_student_age = $student_class_obj->set_student_age($age);

$student_class_obj = new student_class();

$student_teacher_obj = new student_teacher();

$student_department_obj = new student_department();

    if (is_string($get_student_age)) {
        echo 'true';
        return;
    } else {
        switch($get_student_age) {
            case 6;
            $student_class_result = 1;
            $student_teacher = 'Teacher_One';
            break;

            case 7;
            $student_class_result = 2;
            $student_teacher = 'Teacher_Two';
            break;

            case 8;
            $student_class_result = 3;
            $student_teacher = 'Teacher_Three';
            break;

            case 9;
            $student_class_result = 4;
            $student_teacher = 'Teacher_Four';
            break;

            case 10;
            $student_class_result = 5;
            $student_teacher = 'Teacher_Five';
            break;

            case 11;
            $student_class_result = 6;
            $student_teacher = 'Teacher_Six';
            break;

            case 12;
            $student_class_result = 7;
            $student_teacher = 'Teacher_Seven';
            break;

            case 13;
            $student_class_result = 8;
            $student_teacher = 'Teacher_Eight';
            break;

            case 14;
            $student_class_result = 9;
            $student_teacher = 'Teacher_Nine';
            break;

            case 15;
            $student_class_result = 10;
            $student_teacher = 'Teacher_Ten';
            break;
        }
    }

    if ($student_class_result) {
        if ($student_class_result <= 4) {
            $student_department = 'LP';
        } elseif ($student_class_result > 4 && $student_class_result <= 7) {
            $student_department = 'UP';
        } elseif ($student_class_result >=8 && $student_class_result <= 10) {
            $student_department = 'HS';
        }
    }

    $student_class_obj->set_student_class($student_class_result);
    $get_student_class = $student_class_obj->get_student_class();

    $student_teacher_obj->set_student_teacher($student_teacher);
    $get_teacher = $student_teacher_obj->get_student_teacher();

    $student_department_obj->set_student_department($student_department);
    $get_student_department = $student_department_obj->get_student_department();
    
    $student_age_data = $get_student_age;
    $stude_class_data = $get_student_class;
    $student_teacher_data = $get_teacher;
    $student_department_data = $get_student_department;
?>