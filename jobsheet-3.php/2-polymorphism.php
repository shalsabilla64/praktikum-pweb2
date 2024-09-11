<?php

// Kelas Person
class Person {
    protected $name;

    public function __construct($name) {
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

    // Constructor Student
    public function __construct($name, $studentID) {
        parent::__construct($name);
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

    // Constructor Teacher
    public function __construct($name, $teacherID) {
        parent::__construct($name);
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
$student = new Student("Alifia Putri", "230302025");
$teacher = new Teacher("Annas Setiawan Prabowo", "2333884011902");

// Menampilkan output menggunakan echo
echo $student->getName() . "<br>"; // Output: Student Name: Alifia Putri
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230302025

echo $teacher->getName() . "<br>"; // Output: Teacher Name: Annas Setiawan Prabowo
echo $teacher->getTeacherID() . "<br>"; // Output: Teacher ID: 2333884011902
?>
