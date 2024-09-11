<?php

// Kelas Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    private $studentID; // Atribut name dan studentID diubah menjadi private

    // Constructor Student
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    // Override metode getName() untuk Student
    public function getName() {
        return "Student Name: " . $this->name;
    }
}

// Membuat objek Student
$student = new Student("Alifia Putri", "230302025");

// Menampilkan output menggunakan echo
echo $student->getName() . "<br>"; // Output: Student Name: Alifia Putri
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230302025

// Mengubah nilai atribut name dan studentID menggunakan setter
$student->setName("Shalshabilla");
$student->setStudentID("230102043");

// Menampilkan nilai yang telah diubah
echo "<br>Setelah diubah:<br>";
echo $student->getName() . "<br>"; // Output: Student Name: Shalshabilla
echo $student->getStudentID() . "<br>"; // Output: Student ID: 230102043

?>
