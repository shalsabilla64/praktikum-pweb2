## Jobsheet 1
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip- prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan

Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.

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
Membuat class Mahasiswa dengan atribut nama, nim, dan jurusan adalah langkah awal untuk mendefinisikan struktur data mahasiswa. Atribut-atribut ini disimpan dalam class sebagai properti yang dapat diakses dan dimodifikasi oleh metode di dalam class. Dengan mendefinisikan atribut dalam class, kita dapat mengelompokkan data yang terkait dengan mahasiswa dalam satu unit yang terstruktur.

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
- protected : attribut yang hanya dapat diakses dari dalam kelas itu sendiri dan dari dalam kelas turunannya
## Metode 
```sh
 public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan<br>";
    }
```
- metode adalah fungsi yang didefinisikan di dalam sebuah kelas yang digunakan untuk melakukan operasi atau aksi pada objek dari kelas tersebut.
- Metode tampilkanData() berfungsi untuk menampilkan nilai dari atribut nama, nim, dan jurusan dari objek Mahasiswa. Metode ini memberikan cara untuk mengakses dan menampilkan data yang disimpan dalam objek dengan cara yang terorganisir dan terstruktur, memudahkan dalam pengujian dan pengelolaan data.

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
- Mengubah atribut dalam class Mahasiswa menjadi private adalah penerapan prinsip encapsulation dalam OOP. Dengan menjadikan atribut private, akses langsung ke atribut tersebut dari luar class dibatasi. Ini melindungi data dari modifikasi yang tidak diinginkan dan memastikan bahwa data hanya dapat diubah melalui metode yang telah disediakan oleh class. Encapsulation meningkatkan keamanan dan integritas data dengan mengontrol bagaimana atribut diakses dan dimodifikasi.
  
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
- Metode getter dan setter adalah cara untuk memberikan akses terbatas ke atribut yang bersifat private. Getter digunakan untuk membaca nilai atribut, sementara setter digunakan untuk mengubahnya. Dengan menyediakan metode ini, kita menjaga kontrol penuh terhadap bagaimana data diakses dan dimodifikasi, sekaligus menjaga konsistensi dan validitas data.

## Inheritance
- Kelas dapat mewarisi properti dan metode dari kelas lain.

## Membuat class Dosen yang mewarisi class Pengguna dan tambahkan atribut Mata Kuliah
```sh
class Dosen extends Pengguna {

private $mataKuliah;
```
- Mewarisi class Pengguna dalam class Dosen menunjukkan penerapan inheritance, di mana Dosen mewarisi atribut dan metode dari Pengguna. Selain itu, class Dosen juga menambahkan atribut mataKuliah yang khusus untuk kebutuhan dosen. Ini memperlihatkan kemampuan untuk memperluas fungsionalitas class dasar dengan menambahkan atribut atau metode tambahan, sambil tetap memanfaatkan fitur yang sudah ada dari class dasar.
  
## Instansiasi objek dari class Dosen dan tampilkan data dosen.
```sh
// Instansiasi objek Dosen
$dosen = new Dosen("Pak Abda'u", "Pemrograman Web 2");

$dosen->tampilkanData();
```
- Instansiasi objek dari class Dosen dan menggunakan metode tampilkanDosen() untuk menampilkan data menunjukkan bagaimana inheritance memungkinkan class turunan (Dosen) untuk menggunakan metode dari class dasar (Pengguna) serta menambahkan fungsionalitas baru. Proses ini menunjukkan bagaimana class turunan dapat memanfaatkan fitur dari class dasar sambil memperkenalkan atribut dan metode baru yang spesifik untuk kebutuhan masing-masing class.
  
## Polymorphism
- Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
## Membuat class Pengguna dengan metode aksesFitur().
```sh
class Pengguna {
    public function aksesFitur() {
```
-  Membuat class Pengguna dengan metode aksesFitur() adalah langkah awal untuk menerapkan prinsip polymorphism. Metode ini mendefinisikan fungsionalitas umum yang akan diimplementasikan secara spesifik oleh class-class turunan. Dengan mendefinisikan metode ini dalam class dasar, kita menyediakan antarmuka yang seragam untuk fitur-fitur yang dapat diakses oleh berbagai jenis pengguna, yang memungkinkan berbagai implementasi di class-class turunan.
-  
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
- Mengimplementasikan metode aksesFitur() secara berbeda di class Dosen dan Mahasiswa menunjukkan penerapan polymorphism. Setiap class turunan (Dosen dan Mahasiswa) memberikan implementasi khusus dari metode aksesFitur(), yang sesuai dengan konteks atau kebutuhan masing-masing class. Polymorphism memungkinkan metode dengan nama yang sama untuk berperilaku berbeda tergantung pada class yang mengimplementasikannya, meningkatkan fleksibilitas dan kemampuan untuk mengelola berbagai jenis objek dengan cara yang konsisten.
  
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
- Instansiasi objek dari class Dosen dan Mahasiswa, kemudian memanggil metode aksesFitur(), mendemonstrasikan bagaimana polymorphism memungkinkan kita untuk menggunakan metode yang sama dengan implementasi yang berbeda pada objek yang berbeda. Ini memperlihatkan bagaimana objek dari class turunan dapat memanfaatkan metode dari class dasar dengan perilaku yang disesuaikan, menunjukkan kekuatan dan fleksibilitas polymorphism dalam OOP.
- 
## Abstraction
- Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
# Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```sh
  class Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur umum.<br>";
```
- Membuat class abstrak Pengguna dengan metode abstrak aksesFitur() adalah langkah awal dalam menerapkan prinsip abstraction. Class abstrak adalah class yang tidak dapat diinstansiasi dan sering digunakan sebagai template atau blueprint untuk class-class turunan. Metode abstrak dalam class ini hanya dideklarasikan tanpa implementasi dan harus diimplementasikan oleh class-class yang mewarisi class abstrak tersebut. Abstraction memungkinkan kita untuk menyembunyikan detail implementasi dan hanya menyediakan antarmuka yang harus diikuti oleh class turunan.
  
## Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak 

- implementasi kelas dosen
```sh
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}
```
- implementasi dari kelas mahasiswa
```sh
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}
```
- Mengimplementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak aksesFitur() dari class Pengguna menunjukkan bagaimana abstraction berfungsi dalam praktik. Class Mahasiswa dan Dosen menyediakan implementasi konkret untuk metode abstrak aksesFitur() sesuai dengan kebutuhan spesifik mereka. Ini memastikan bahwa setiap class turunan menyertakan implementasi dari metode yang didefinisikan oleh class abstrak, memaksa mereka untuk menyediakan detail implementasi yang diperlukan, sehingga mematuhi kontrak yang ditetapkan oleh class abstrak.
  
## Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
```sh
<?php
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

$dosen->aksesFitur(); // Output: Mengakses fitur dosen.
$mahasiswa->aksesFitur(); // Output: Mengakses fitur mahasiswa.
?>
```
- Mendemonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi dari class Mahasiswa dan Dosen memperlihatkan bagaimana abstraction memungkinkan objek untuk menggunakan metode yang didefinisikan dalam class abstrak dengan implementasi yang berbeda. Ini menunjukkan penerapan prinsip abstraction secara nyata, di mana objek dari class turunan mematuhi kontrak metode abstrak dan menyajikan implementasi spesifik sesuai dengan tipe objeknya. Demonstrasi ini mempertegas bagaimana abstraction menyederhanakan penggunaan class dengan menyembunyikan detail implementasi dan hanya mengekspose metode yang diperlukan
  
## output jobsheet 1
1. Class dan Object<br> 
![Screenshot (22)](https://github.com/user-attachments/assets/a2b9a3f3-b60b-41fb-989c-ca95362f6984)
2. Encapsulation<br>
![Screenshot (23)](https://github.com/user-attachments/assets/bdd6680f-b80d-4d4a-b84d-990d4f5cb73b)
3. Inheritance<br>
![Screenshot (24)](https://github.com/user-attachments/assets/443d6d1f-b325-4d9c-a59a-c97beec70fb2)
4. Polymorphism<br>
![Screenshot (25)](https://github.com/user-attachments/assets/8dcc1fe0-9421-4fbc-a0ab-8af9e24325fe)
5. Abstraction<br>
![Screenshot (26)](https://github.com/user-attachments/assets/dcca060a-ef53-43cd-92bb-bc13de3c9274)













  
























