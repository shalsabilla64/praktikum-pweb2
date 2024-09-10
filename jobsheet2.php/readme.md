## Joobsheet 2
## Kelas dan Objek dalam PHP
## Kelas (Class)
```sh
class Mahasiswa {
```
- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
## Objek (Object)
```sh
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
```
- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
## membuat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
```sh
    public $nama;
    public $nim;
    public $jurusan;
```
- Nama kelas adalah Mahasiswa, yang merepresentasikan entitas mahasiswa.
## Membuat metode tampilkanData() dalam class Mahasiswa.
```sh
public function tampilkanData() {
    echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan<br>";
}
```
-  Metode ini digunakan untuk menampilkan informasi dari objek Mahasiswa.
## Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
- instansiasi objek class mahasiswa
```sh
// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
```
- menampilkan data mahasiswa 
```sh
// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
$mahasiswa->tampilkanData();
```
- Instansiasi objek adalah proses pembuatan objek baru dari sebuah kelas. Ketika sebuah kelas diinstansiasi, PHP akan membuat salinan dari struktur kelas tersebut dalam memori, yang kemudian disebut sebagai objek. Objek yang diinstansiasi dapat memiliki atribut (properti) dan metode (fungsi) yang didefinisikan dalam kelasnya.
## Implementasi Constructor
- Constructor adalah metode khusus yang dipanggil secara otomatis saat objek baru dibuat dari sebuah kelas. Constructor biasanya digunakan untuk menginisialisasi atribut objek dengan nilai yang diberikan.
## Menambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
```sh
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;     
    $this->nim = $nim;       
    $this->jurusan = $jurusan;  
}
```
- Saat kita membuat objek dari kelas Mahasiswa, constructor secara otomatis dipanggil dan menginisialisasi atribut berdasarkan nilai yang kita berikan.
- Constructor menggunakan argumen yang diberikan untuk mengisi atribut nama, nim, dan jurusan dari objek $mahasiswa, Akibatnya, objek $mahasiswa langsung memiliki nilai atribut yang diatur.
## Menggunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```bash
// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");

public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
- Constructor memastikan atribut diisi dengan nilai yang diberikan tanpa perlu langkah tambahan setelah objek dibuat.
- Dengan menggunakan constructor, kita memastikan objek selalu dibuat dengan nilai lengkap untuk atribut yang dibutuhkan.
- Penggunaan constructor membuat kode lebih ringkas dan mudah dibaca, karena inisialisasi atribut dilakukan dalam satu langkah.
## Membuat Metode Tambahan
- Metode tambahan seperti updateJurusan() dalam kelas Mahasiswa berfungsi untuk memperbarui atau mengubah nilai atribut objek setelah objek tersebut dibuat.
- Metode updateJurusan() memungkinkan perubahan nilai dari atribut jurusan objek Mahasiswa. Fungsi utama dari metode ini adalah untuk memberikan cara dinamis dan fleksibel dalam memperbarui nilai atribut, dibandingkan dengan hanya mengatur nilai saat objek dibuat.
## Membuat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
```bash
public function updateJurusan($jurusanBaru) {
    $this->jurusan = $jurusanBaru;
}
```
- Metode ini memungkinkan perubahan jurusan pada objek Mahasiswa setelah objek tersebut dibuat, sesuai dengan tujuan yang diminta.

## Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```bash
$mahasiswa3->updateJurusan("Teknik Lingkungan");
```
- Baris ini menunjukkan bagaimana metode updateJurusan() digunakan untuk mengubah data pada objek yang sudah dibuat, sesuai dengan instruksi yang diberikan.

## Penggunaan Atribut dan Metode
-  Mengatur dan mengelola informasi terkait objek dengan cara yang terstruktur, memungkinkan perubahan dan pembaruan data objek setelah objek dibuat, menyediakan cara yang terpisah untuk memperbarui data dan menampilkan informasi, memudahkan pemeliharaan dan pembacaan kode.
```bash
$mahasiswa4->setNim("230102042");
```
- public menunjukkan metode ini dapat diakses dari luar kelas.
- $nimBaru adalah parameter yang diberikan nilai baru untuk atribut nim.
  
Bagian yang menandakan penggunaan metode setter untuk memperbarui nilai atribut adalah baris yang memanggil metode setNim() pada objek $mahasiswa4.

## Menampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
```bash
echo "<br>Setelah update NIM:<br>";
$mahasiswa4->tampilkanData(); // Menampilkan data setelah pembaruan
```
- dalam metode ini, mengizinkan pengguna untuk melihat data objek dalam format yang terstruktur dan mudah dibaca, setelah melakukan perubahan pada atribut objek, seperti menggunakan metode setter, tampilkanData() memastikan bahwa perubahan tersebut diterapkan dengan benar.

 ## TUGAS 3-4

 ## Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
 ```bash
    public $nama;
    public $nip;
    public $mataKuliah;
```
- Bagian kode ini menciptakan kelas Dosen dengan atribut untuk menyimpan informasi dosen dan menyediakan metode untuk menampilkan informasi tersebut. Constructor digunakan untuk menginisialisasi atribut saat objek dibuat, dan metode tampilkanDosen() digunakan untuk menampilkan data dosen.

## Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
 ```bash
public function tampilkanDosen() {
    echo "Nama Dosen: " . $this->nama . "<br>";
    echo "NIP: " . $this->nip . "<br>";
    echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
}
 ```
- Metode tampilkanDosen() adalah komponen kunci dari kelas Dosen yang memungkinkan informasi tentang dosen disajikan dengan cara yang mudah dibaca. Dengan mencetak data atribut dosen secara terstruktur, metode ini memfasilitasi pemeriksaan dan penggunaan informasi dosen dalam aplikasi atau sistem yang menggunakan kelas Dosen.

## Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
 ```bash
// Membuat objek dari kelas Dosen
$dosen1 = new Dosen("Annas Setiawan Prabowo", "198711172018031001", "Konsep Basis Data");

// Menggunakan metode tampilkanDosen() untuk menampilkan informasi dosen
$dosen1->tampilkanDosen();
 ```
- Bagian kode ini menunjukkan cara membuat dan menggunakan objek dari kelas Dosen. Objek dosen1 diinstansiasi dengan data spesifik dan kemudian metode tampilkanDosen() dipanggil untuk menampilkan informasi terkait dosen tersebut.






