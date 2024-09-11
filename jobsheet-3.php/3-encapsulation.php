<?php

// Kelas Person
class Person {
    protected $name;

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    private $studentID;

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
$student = new Student();

// Menetapkan nilai atribut menggunakan setter
$student->setName("Alifia Putri");
$student->setStudentID("230302025");

// Menampilkan output menggunakan echo
echo $student->getName() . "<br>"; 
echo $student->getStudentID() . "<br>"; 

// Mengubah nilai atribut name dan studentID menggunakan setter
$student->setName("Shalshabilla");
$student->setStudentID("230102043");

// Menampilkan nilai yang telah diubah
echo "<br>Setelah diubah:<br>";
echo $student->getName() . "<br>"; 
echo $student->getStudentID() . "<br>"; 
?>
