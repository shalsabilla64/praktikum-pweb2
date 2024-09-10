## Jobsheet 1

## Class dan Object
Class adalah Blueprint atau template untuk menciptakan objek.
## Kelas
```sh
class Mahasiswa {
```
Objek adalah Instance dari class yang memiliki atribut (properties) dan perilaku
(methods).
## Objek
```sh
$mahasiswa = new Mahasiswa
```

## Attribute dan Metode

## Attribute
```sh
    public $nama;
    public $nim;
    public $jurusan;
```
atribut adalah spesifikasi yang mendefinisikan properti dari suatu objek
## jenis jenis attribute:
- private : attribut yang hanya bisa di akses oleh kelas itu sendiri
- public : attribut yang bisa di akses langsung oleh kelas turunan maupun objek
- protected : attribut yang hanya dapat diakses dari dalam kelas itu sendiri dan dari dalam kelas turunannya,tetapi tida dari luar kelas

## Metode 
```sh
 public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan<br>";
    }
```
- metode adalah fungsi yang didefinisikan di dalam sebuah kelas yang digunakan untuk melakukan operasi atau aksi pada objek dari kelas tersebut.

## Constructor dan Instansiasi

## Constructor 
- metode khusus dalam pemrograman berorientasi objek (OOP) yang secara otomatis dipanggil saat sebuah objek dibuat (diinstansiasi) dari suatu kelas
```sh
 public function __construct
```
## Instansiasi
- Instansiasi adalah proses membuat sebuah objek dari sebuah kelas dalam pemrograman berorientasi objek (OOP).
```sh
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa->tampilkanData();
```
## Encapsulation
- Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.

## Mengubah atribut dalam class Mahasiswa menjadi private
```sh
    private $nama;
    private $nim;
    private $jurusan;
```
## Membuat metode getter dan setter untuk atribut nama, nim, dan jurusan.
# Setter
```sh
$mahasiswa1->setNama("Shalshabilla");
```
# Getter 
```sh
// Tampilkan data
public function tampilkanData() {
    echo "Nama: " . $this->getNama() . "<br>";
    echo "Nim: " . $this->getNIM() . "<br>";
    echo "Jurusan: " . $this->getJurusan() . "<br>";
}
```
## Inheritance
- Kelas dapat mewarisi properti dan metode dari kelas lain.

## Membuat class Dosen yang mewarisi class Pengguna dan tambahkan atribut Mata Kuliah
```sh
class Dosen extends Pengguna {

private $mataKuliah;
```
## Instansiasi objek dari class Dosen dan tampilkan data dosen.
```sh
// Instansiasi objek Dosen
$dosen = new Dosen("Pak Abda'u", "Pemrograman Web 2");

$dosen->tampilkanData();
```
## Polymorphism
- Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
## Membuat class Pengguna dengan metode aksesFitur().
```sh
class Pengguna {
    public function aksesFitur() {
```
# Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
- di kelas dosen
```sh
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}
```
- di kelas mahasiswa
 ```sh
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}
 ```
## Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
- Instansiasi Objek dan Pemanggilan Metode untuk Dosen:
```sh
$dosen = new Dosen();
$dosen->aksesFitur(); // Output: Mengakses fitur dosen.
 ```
- Instansiasi Objek dan Pemanggilan Metode untuk Mahasiswa:
```sh
$mahasiswa = new Mahasiswa();
$mahasiswa->aksesFitur(); // Output: Mengakses fitur mahasiswa.
```
## Abstraction
- Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
# Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```sh
  class Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur umum.<br>";
```
## Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak 

- implementasi kelas dosen
```sh
// Kelas Dosen yang mewarisi Pengguna
class Dosen extends Pengguna {
    // Implementasi metode abstrak dari kelas Pengguna
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}
```
- implementasi dari kelas mahasiswa
```sh
// Kelas Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi metode abstrak dari kelas Pengguna
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}
```








  
























