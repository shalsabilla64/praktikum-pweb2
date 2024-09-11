<?php
// Kelas Person
class Person {
    public $name;

    // Setter untuk atribut name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan name
    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    // Tambah Atribut Student
    public $studentID;

    // Setter untuk atribut studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}

// Membuat objek Student
$student = new Student();

// Menetapkan nilai atribut menggunakan setter
$student->setName("Alifia Putri");
$student->setStudentID("230302025");

// Menampilkan output
echo $student->getName() . "<br>"; // Output: Nama: Alifia Putri
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230302025
?>

