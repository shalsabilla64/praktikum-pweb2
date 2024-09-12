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

    // Setter untuk atribut studentID
    public function setStudentID($studentID) {
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
```
## Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
- metode getName() di kelas Student
```sh
// Override metode getName() untuk Student
public function getName() {
    return "Student Name: " . $this->name;
}

// Override metode getName() untuk Teacher
public function getName() {
    return "Teacher Name: " . $this->name;
}
```
## Encapsulation
## mengubah atribut name dan studentID dalam kelas Student menjadi private.
```sh
private $studentID; // Atribut studentID diubah menjadi private
```
## Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
```sh
// Setter untuk atribut name
public function setName($name) {
    $this->name = $name;
}

// Getter untuk name
public function getName() {
    return "Nama: " . $this->name;
}
// Setter untuk studentID
public function setStudentID($studentID) {
    $this->studentID = $studentID;
}

// Getter untuk studentID
public function getStudentID() {
    return "Student ID: " . $this->studentID;
```
## Abstraction
## Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```sh
abstract class Course {
    protected $courseName;

    // Setter untuk courseName
    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}
```
## Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
## Membuat kelas OnlineCourse 
```sh
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
```
## Membuat OfflineCourse
```sh
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
```
## Output Jobsheet 3
1. Inheritance<br>
![Screenshot (41)](https://github.com/user-attachments/assets/0cf4b33c-dbf2-4736-b878-68ba33a697d2)
2. Polymorphism<br>
![Screenshot (42)](https://github.com/user-attachments/assets/e91d4a29-d99b-4898-90a1-7cb6c9f23845)
3. Polymorphism<br>
![Screenshot (43)](https://github.com/user-attachments/assets/414b5ce5-a267-4163-bf8f-f5500c0d21cd)
4. Abstraction<br>
![Screenshot (44)](https://github.com/user-attachments/assets/b410c11f-0e41-41e2-b0b3-0630bbff2aff)



## Tugas 3

## Kelas Person sebagai Kelas Induk
```sh
// Kelas Person sebagai induk
class Person {
    protected $name;

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode yang akan dioverride oleh subclass
    public function getRole() {
        return "Person";
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}
```
##  Kelas Dosen yang Mewarisi Person
```sh
// Kelas Dosen mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Encapsulation: atribut nidn

    // Setter untuk NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "dosen";
    }
}
```
## Kelas Mahasiswa yang Mewarisi Person
```sh
// Kelas Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation: atribut nim

    // Setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole
    public function getRole() {
        return "mahasiswa";
    }
}
```
## Kelas Abstrak jurnal
```sh
// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    // Setter untuk judul
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function manageSubmission();
}
```
## Kelas JurnalDosen yang Mengimplementasikan Jurnal
```sh
// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $dosen;

    // Setter untuk Dosen
    public function setDosen(Dosen $dosen) {
        $this->dosen = $dosen;
    }

    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Jurnal dengan judul '" . $this->judul . "' telah diterima oleh Dosen dengan NIDN " . $this->dosen->getNidn();
    }
}
```
##  Kelas JurnalMahasiswa yang Mengimplementasikan Jurnal
```sh
// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $mahasiswa;

    // Setter untuk Mahasiswa
    public function setMahasiswa(Mahasiswa $mahasiswa) {
        $this->mahasiswa = $mahasiswa;
    }

    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Jurnal dengan judul '" . $this->judul . "' telah diterima oleh Mahasiswa dengan NIM " . $this->mahasiswa->getNim();
    }
}
```
## Instansi objek dan output
```sh
// Membuat objek Dosen
$dosen = new Dosen();
$dosen->setName("Bapak Annas");
$dosen->setNidn("22334455");

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->setName("Shalshabilla");
$mahasiswa->setNim("230102043");

// Membuat objek JurnalDosen
$jurnalDosen = new JurnalDosen();
$jurnalDosen->setJudul("Desain Interaksi Pengguna");
$jurnalDosen->setDosen($dosen);

// Membuat objek JurnalMahasiswa
$jurnalMahasiswa = new JurnalMahasiswa();
$jurnalMahasiswa->setJudul("Aplikasi Komputer");
$jurnalMahasiswa->setMahasiswa($mahasiswa);

// Menampilkan output dalam format deskripsi
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . ".<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . ".<br>";
echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission() . "<br>";
```
# output tugas 3
![Screenshot (46)](https://github.com/user-attachments/assets/d85a827e-a089-4d84-ae06-507498c45855)














