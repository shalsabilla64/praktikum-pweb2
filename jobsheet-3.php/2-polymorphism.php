<?php

// Kelas Person
class Person {
    protected $name;

    // Setter untuk atribut name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    private $studentID;

    // Setter untuk atribut studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk Student
    public function getName() {
        return "Student Name: " . $this->name;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}

// Kelas Teacher mewarisi Person
class Teacher extends Person {
    private $teacherID;

    // Setter untuk atribut teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher Name: " . $this->name;
    }

    // Metode untuk mendapatkan teacherID
    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }
}

// Membuat objek Student dan Teacher
$student = new Student();
$student->setName("Alifia Putri");
$student->setStudentID("230302025");

$teacher = new Teacher();
$teacher->setName("Annas Setiawan Prabowo");
$teacher->setTeacherID("2333884011902");

// Menampilkan output menggunakan echo
echo $student->getName() . "<br>"; // Output: Student Name: Alifia Putri
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230302025

echo $teacher->getName() . "<br>"; // Output: Teacher Name: Annas Setiawan Prabowo
echo $teacher->getTeacherID() . "<br>"; // Output: Teacher ID: 2333884011902
?>
