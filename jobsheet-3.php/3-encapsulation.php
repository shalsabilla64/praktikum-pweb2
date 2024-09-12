<?php

class Student {
    private $name;
    private $studentID;

    // Metode untuk menetapkan nama
    public function setName($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode untuk menetapkan studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

$student1 = new Student();

$student1->setName("Ariel");
$student1->setStudentID("230330042");

echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

// Mengubah nilai atribut menggunakan setter
$student1->setName("Zaky");
$student1->setStudentID("320202045");

// Menampilkan data mahasiswa setelah perubahan
echo "<br>Data mahasiswa setelah perubahan:<br>";
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>