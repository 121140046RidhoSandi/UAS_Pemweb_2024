# UAS Pemrograman Web 2024

## Deskripsi
Repository ini dibuat untuk memenuhi tugas Ujian Akhir Semester Mata Kuliah Pemrograman Web.

---

## Kriteria Penilaian

### **1. Client-side Programming (30%)**
#### 1.1 Manipulasi DOM dengan JavaScript (15%)
- **Form Input dengan Minimal 4 Elemen**: 
  Formulir ini memiliki elemen input berupa teks, email, radio button, dan checkbox.
- **Menampilkan Data dari Server ke Tabel HTML**: 
  Menggunakan JavaScript untuk memanipulasi DOM dan menampilkan data yang diterima dari server.

#### 1.2 Event Handling (15%)
- **Menambahkan Minimal 3 Event Berbeda**:
  Event yang diterapkan, antara lain:
  - `onsubmit` untuk validasi formulir.
  - `onclick` untuk memproses checkbox.
  - Event lain seperti `onchange` dapat ditambahkan untuk meningkatkan interaktivitas.
- **Validasi Input dengan JavaScript**:
  Validasi sederhana dilakukan di sisi klien untuk memastikan data telah diisi dengan benar sebelum dikirim ke server.

---

### **2. Server-side Programming (30%)**
#### 2.1 Pengelolaan Data dengan PHP (20%)
- **Metode `POST` atau `GET` pada Formulir**: 
  Data dikirim ke server menggunakan metode HTTP `POST`.
- **Parsing dan Validasi Data di Server**: 
  Data yang diterima diproses dan divalidasi menggunakan fungsi PHP seperti `htmlspecialchars` dan `filter_var`.
- **Menyimpan Data ke Basis Data**: 
  Data pengguna disimpan dalam tabel `pengguna` di database MySQL.

#### 2.2 Objek PHP Berbasis OOP (10%)
- Membuat kelas PHP dengan metode untuk mengelola operasi basis data seperti `INSERT` dan `SELECT`.

---

### **3. Database Management (20%)**
#### 3.1 Pembuatan Tabel Database (5%)
- Tabel `pengguna` dibuat untuk menyimpan data pengguna dari formulir.

#### 3.2 Konfigurasi Koneksi Database (5%)
- Koneksi ke database diatur menggunakan parameter seperti host, username, password, dan nama database.

#### 3.3 Manipulasi Data pada Database (10%)
- Operasi CRUD (Create, Read, Update, Delete) diimplementasikan untuk mengelola data pengguna.

---

### **4. State Management (20%)**
#### 4.1 State Management dengan Session (10%)
- Sesi pengguna diinisialisasi menggunakan `session_start()`.
- Informasi pengguna disimpan dalam variabel sesi untuk digunakan di berbagai halaman.

#### 4.2 Pengelolaan State dengan Cookie dan Browser Storage (10%)
- Cookie digunakan untuk menyimpan preferensi pengguna.
- Browser Storage (localStorage atau sessionStorage) digunakan untuk menyimpan data sementara.

---

### **5. Bonus: Hosting Aplikasi Web (20%)**
- **Langkah-langkah Hosting Aplikasi Web (5%)**:
  Aplikasi di-host menggunakan platform yang mendukung PHP dan MySQL.
- **Pemilihan Penyedia Hosting (5%)**:
  Hosting dipilih berdasarkan kebutuhan aplikasi, seperti kecepatan, kapasitas, dan harga.
- **Keamanan Aplikasi Web (5%)**:
  Langkah-langkah keamanan seperti penggunaan HTTPS, sanitasi input, dan proteksi terhadap serangan SQL Injection diterapkan.
- **Konfigurasi Server (5%)**:
  Konfigurasi server meliputi pengaturan domain, SSL, dan database.

---

## Teknologi yang Digunakan
- **HTML**: Untuk struktur dasar halaman web.
- **CSS**: Untuk desain dan tata letak.
- **JavaScript**: Untuk interaktivitas dan manipulasi DOM.
- **PHP**: Untuk logika server-side dan pengelolaan database.
- **MySQL**: Untuk penyimpanan data.

---

## Author
Nama: **Muhammad Ridho Sandi Kurniawan**  
NIM: **121140046**  
Mata Kuliah: Pemrograman Web  
Dosen Pengampu: Muhammad Habib Algifari, S.Kom., M.TI.
