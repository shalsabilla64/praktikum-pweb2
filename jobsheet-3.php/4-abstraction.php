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

// Membuat objek OnlineCourse
$onlineCourse = new OnlineCourse("PHP Programming", "Cafe");

// Membuat objek OfflineCourse
$offlineCourse = new OfflineCourse("Data Science", "Campus");

// Menampilkan output untuk OnlineCourse
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Online Course: PHP Programming on Cafe

// Menampilkan output untuk OfflineCourse
echo $offlineCourse->getCourseDetails() . "<br>"; // Output: Offline Course: Data Science at Campus 

?>

