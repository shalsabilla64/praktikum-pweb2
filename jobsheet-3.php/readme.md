## Jobsheet 3
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.
## Inheritence
## membuat kelas Person dengan atribut name dan metode getName().
```sh
public function getName() {
        return "Nama: " . $this->name;
```
## Membuat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```sh
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
```
## Polymorphism
## Membuat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```sh
// Kelas Teacher mewarisi Person
class Teacher extends Person {
    private $teacherID; // Atribut teacherID

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
```
## Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
- metode getName() di kelas Student
```sh
 // Override metode getName() untuk Student
    public function getName() {
        return "Student Name: " . $this->name;
```
- metode getName() di kelas Teacher
```sh
// Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher Name: " . $this->name;
```
## Encapsulation
## mengubah atribut name dan studentID dalam kelas Student menjadi private.
```sh
private $studentID; // Atribut studentID diubah menjadi private
```
## Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
- setter untuk name
```sh
public function setName($name) {
    $this->name = $name;
}
```
- getter untuk name
```sh
public function getName() {
    return "Student Name: " . $this->name;
}
```
- setter untuk studentID
```sh
public function setStudentID($studentID) {
    $this->studentID = $studentID;
}
```
- getter untuk studentID
```sh
public function getStudentID() {
    return "Student ID: " . $this->studentID;
}
```
## Abstraction
## Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```sh
<?php

// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Konstruktor untuk mengatur nama kursus
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}
```
## Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
## Membuat kelas OnlineCourse 
```sh
 // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform;

    // Konstruktor untuk OnlineCourse
    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}
```
## Membuat OfflineCourse
```sh
// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location;

    // Konstruktor untuk OfflineCourse
    public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}
```

















