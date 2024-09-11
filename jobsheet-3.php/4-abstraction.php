<?php

// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Setter untuk courseName
    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform;

    // Setter untuk platform
    public function setPlatform($platform) {
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " on " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location;

    // Setter untuk location
    public function setLocation($location) {
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}

// Membuat objek OnlineCourse
$onlineCourse = new OnlineCourse();

// Menetapkan nilai atribut menggunakan setter
$onlineCourse->setCourseName("PHP Programming");
$onlineCourse->setPlatform("Cafe");

// Membuat objek OfflineCourse
$offlineCourse = new OfflineCourse();

// Menetapkan nilai atribut menggunakan setter
$offlineCourse->setCourseName("Data Science");
$offlineCourse->setLocation("Campus");

// Menampilkan output untuk OnlineCourse
echo $onlineCourse->getCourseDetails() . "<br>"; 
// Menampilkan output untuk OfflineCourse
echo $offlineCourse->getCourseDetails() . "<br>"; 
?>


