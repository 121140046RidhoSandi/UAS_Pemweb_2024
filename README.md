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
  Berikut adalah langkah-langkah untuk meng-hosting situs web statis Anda secara gratis menggunakan GitHub Pages:

  1. **Buat Repository di GitHub**:
     - Masuk ke akun GitHub Anda.
     - Klik tombol "New" untuk membuat repository baru.
     - Beri nama repository Anda dengan format `username.github.io`, di mana `username` adalah nama pengguna GitHub Anda.
     - Pastikan repository diatur sebagai "Public".
     - Klik tombol "Create repository".

  2. **Unggah File Situs Web Anda**:
     - Di dalam repository yang baru dibuat, klik tombol "Add file" dan pilih "Upload files".
     - Unggah semua file situs web statis Anda (HTML, CSS, JavaScript, dll.).
     - Pastikan file utama Anda bernama `index.html` dan berada di direktori utama.
     - Setelah semua file diunggah, gulir ke bawah dan klik "Commit changes" untuk menyimpan perubahan.

  3. **Aktifkan GitHub Pages**:
     - Masuk ke tab "Settings" di repository Anda.
     - Di sidebar kiri, klik "Pages".
     - Di bagian "Source", pilih branch `main` dan folder `/ (root)`.
     - Klik "Save" untuk mengaktifkan GitHub Pages.
     - Setelah beberapa menit, situs web Anda akan tersedia di `https://username.github.io/`.

- **Pemilihan Penyedia Hosting (5%)**:
  Hosting yang saya pilih adalah GitHub Pages karena mudah dilakukan dan tidak memungut biaya.

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
