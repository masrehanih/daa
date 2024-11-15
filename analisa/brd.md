
---

# **Dokumen Kebutuhan Bisnis (BRD)**  
**Sistem Manajemen Data Pasien Rumah Sakit**  

---

## **1. Pendahuluan**

### 1.1 Tujuan Dokumen  
Dokumen ini bertujuan untuk menguraikan kebutuhan bisnis dan teknis dalam pengembangan Sistem Manajemen Data Pasien Rumah Sakit. Sistem ini dirancang untuk mengoptimalkan alur kerja rumah sakit terkait dengan pendaftaran pasien, manajemen data medis, pengecekan ketersediaan layanan medis, serta pengelolaan riwayat medis pasien. Dokumen ini akan memberikan gambaran yang jelas mengenai fitur-fitur yang diperlukan dalam sistem ini, termasuk alur bisnis dan kebutuhan fungsional yang harus dipenuhi agar sistem dapat berjalan dengan efektif.

### 1.2 Lingkup Proyek  
Proyek ini mencakup pembuatan dan pengembangan sebuah sistem informasi yang akan digunakan oleh rumah sakit untuk mengelola data pasien. Sistem ini akan terdiri dari beberapa modul yang saling terkait untuk mendukung operasi rumah sakit, yaitu:

1. **Registrasi Pasien**: Modul untuk mendaftarkan pasien baru ke dalam sistem rumah sakit dan mengelola status registrasi pasien.
2. **Manajemen Data Medis**: Modul untuk memperbarui, menambah, atau menghapus data medis pasien berdasarkan kebutuhan medis.
3. **Pengecekan Ketersediaan Layanan**: Modul untuk mengecek apakah dokter tersedia untuk memberikan layanan medis kepada pasien.
4. **Riwayat Medis Pasien**: Modul untuk menyimpan dan menampilkan riwayat medis pasien yang dapat diakses oleh tenaga medis sesuai kebutuhan.

---

## **2. Kebutuhan Sistem**

### 2.1 Alur Bisnis  

1. **Registrasi Pasien**:
   - **Deskripsi Alur**: Pasien yang datang ke rumah sakit harus melakukan registrasi terlebih dahulu. Proses ini melibatkan pengisian data pribadi pasien dan verifikasi oleh admin rumah sakit. Setelah data pasien diterima dan diverifikasi, pasien akan diberikan status diterima atau ditolak. Jika diterima, pasien akan melanjutkan ke tahap berikutnya dalam proses layanan medis. Jika ditolak, pasien akan mendapatkan pemberitahuan penolakan.
   - **Langkah-langkah**: 
     1. Pasien mengisi data registrasi.
     2. Admin memverifikasi data pasien.
     3. Sistem mengirimkan notifikasi penerimaan atau penolakan kepada pasien.

2. **Pengecekan Ketersediaan Layanan**:
   - **Deskripsi Alur**: Pasien mengajukan permohonan layanan medis, seperti pemeriksaan oleh dokter. Sebelum melanjutkan, sistem akan memverifikasi ketersediaan jadwal dokter untuk memastikan apakah dokter dapat memberikan layanan pada waktu yang diinginkan. Jika dokter tersedia, pasien akan diberikan jadwal. Jika tidak tersedia, pasien akan diberi pemberitahuan bahwa layanan tidak dapat dilanjutkan.
   - **Langkah-langkah**:
     1. Pasien mengajukan permohonan layanan medis.
     2. Sistem mengecek jadwal dokter untuk memastikan ketersediaan.
     3. Jika dokter tersedia, pasien diberikan jadwal. Jika tidak, pasien diberitahukan.

3. **Manajemen Data Medis**:
   - **Deskripsi Alur**: Dokter atau admin memiliki akses untuk mengelola data medis pasien. Mereka dapat memperbarui informasi medis pasien, menambah catatan medis baru, atau menghapus data medis yang sudah tidak relevan lagi. Semua perubahan ini harus tercatat dalam sistem untuk memastikan bahwa informasi medis selalu up-to-date dan akurat.
   - **Langkah-langkah**:
     1. Dokter atau admin memverifikasi dan memperbarui data medis pasien.
     2. Sistem menyimpan pembaruan dan memberikan akses kepada pihak terkait.

4. **Riwayat Medis Pasien**:
   - **Deskripsi Alur**: Riwayat medis pasien merupakan informasi yang menyimpan catatan lengkap mengenai kondisi medis pasien selama mereka mendapatkan layanan di rumah sakit. Sistem harus mampu menyimpan, mengelola, dan menampilkan riwayat medis pasien yang relevan kepada dokter atau tenaga medis yang membutuhkan akses ke data tersebut.
   - **Langkah-langkah**:
     1. Data medis pasien disimpan dalam sistem.
     2. Riwayat medis dapat diakses dan ditampilkan sesuai kebutuhan oleh dokter atau perawat.

---

## **3. Kebutuhan Bisnis**

### 3.1 Kebutuhan Fungsional

| No | Modul/Doctype | Deskripsi Kebutuhan | Status |
|----|----------------|---------------------|--------|
| 1  | **Registrasi Pasien** | Modul yang memungkinkan pasien untuk mendaftar dengan mengisi data diri mereka dan menerima status diterima atau ditolak berdasarkan verifikasi dari admin. | Modul baru |
| 2  | **Penerimaan/Notifikasi Status Registrasi** | Sistem harus mengirimkan pemberitahuan kepada pasien mengenai status registrasi mereka, apakah diterima atau ditolak. | Modul baru |
| 3  | **Manajemen Data Medis** | Dokter atau admin dapat memperbarui data medis pasien, menambah catatan medis baru, atau menghapus data medis yang sudah tidak relevan. | Modul baru |
| 4  | **Pengecekan Ketersediaan Layanan** | Sistem harus memverifikasi ketersediaan jadwal dokter dan memberikan jadwal kepada pasien jika dokter tersedia. | Modul baru |
| 5  | **Riwayat Medis Pasien** | Sistem harus menyimpan riwayat medis pasien dan memungkinkan dokter untuk mengakses dan menampilkan data medis pasien berdasarkan kebutuhan. | Modul baru |

---

## **4. Persetujuan**

| No | Modul/Doctype | Deskripsi Persetujuan |
|----|----------------|-----------------------|
| 1  | **Registrasi Pasien** | Admin memverifikasi data pasien dan menentukan apakah pasien diterima atau ditolak. Proses ini akan memastikan bahwa hanya pasien yang terverifikasi yang dapat melanjutkan ke tahap layanan medis. |
| 2  | **Pengecekan Ketersediaan** | Dokter memeriksa jadwal ketersediaan mereka dan memberikan persetujuan jika tersedia untuk melayani pasien. Jika tidak tersedia, dokter memberikan pemberitahuan kepada pasien mengenai ketersediaan. |
| 3  | **Manajemen Data Medis** | Dokter atau admin memiliki wewenang untuk memperbarui, menambah, atau menghapus data medis pasien. Semua perubahan harus tercatat dengan benar agar dapat diakses dengan mudah oleh tenaga medis lain yang membutuhkan informasi tersebut. |

---

Dokumen ini menyajikan gambaran umum yang jelas mengenai kebutuhan sistem yang akan dikembangkan untuk mendukung operasi rumah sakit dalam mengelola data pasien. Sistem ini akan memastikan bahwa setiap proses berjalan efisien, akurat, dan terkontrol dengan baik, sesuai dengan prosedur yang telah ditetapkan.