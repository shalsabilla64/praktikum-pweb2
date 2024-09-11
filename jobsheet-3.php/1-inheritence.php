<?php
// Kelas Person
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    // Tambah Atribut Student
    public $studentID;

    // Constructor Student
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}

// Membuat objek Student
$student = new Student("Alifia Putri", "230302025");

// Menampilkan output
echo $student->getName() . "<br>"; // Output: Nama: Alifia Putri
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230302025
?>
