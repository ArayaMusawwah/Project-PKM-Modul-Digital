## 📘 JUDUL PROYEK

**Tutorial Instalasi Windows 10 menggunakan Rufus (Panduan Web Interaktif)**

---

## 🎯 1. GAMBARAN PROYEK

Website ini bertujuan menjadi **tutorial interaktif** langkah demi langkah untuk membantu pengguna awam membuat media instalasi Windows 10 menggunakan **Rufus**, lalu melakukan instalasi sistem operasi.

Model inspirasi utama:

* [Tutorial Instalasi Ubuntu](https://ubuntu.com/tutorials/install-ubuntu-desktop)
* Struktur linear berbasis langkah (1–7)
* Tampilan bersih, responsif, fokus ke teks dan gambar

---

## 💡 2. TUJUAN

1. Menyediakan tutorial web yang mudah diikuti dengan navigasi langkah-per-langkah.
2. Menyajikan teks, gambar, dan catatan penting dalam format yang jelas dan ringan.
3. Mengoptimalkan UX agar cocok di desktop dan mobile.
4. Menjadi proyek dasar untuk pengembangan sistem dokumentasi berbasis AI (misalnya update otomatis, narasi dinamis, dsb).

---

## 🧩 3. KEBUTUHAN
Baik! Supaya **agent AI-mu** bisa membangun situs tutorial "Instalasi Windows 10 dengan Rufus" secara terarah, berikut saya bantu siapkan dokumen **project requirement**, **desain UI/UX**, dan **task breakdown** lengkap (sudah disusun seperti format project software development yang jelas untuk engineer & AI agent).

---

## 📘 JUDUL PROYEK

**Tutorial Instalasi Windows 10 menggunakan Rufus (Panduan Web Interaktif)**

---

## 🎯 1. GAMBARAN PROYEK

Website ini bertujuan menjadi **tutorial interaktif** langkah demi langkah untuk membantu pengguna awam membuat media instalasi Windows 10 menggunakan **Rufus**, lalu melakukan instalasi sistem operasi.

Model inspirasi utama:

* [Tutorial Instalasi Ubuntu](https://ubuntu.com/tutorials/install-ubuntu-desktop)
* Struktur linear berbasis langkah (1–7)
* Tampilan bersih, responsif, fokus ke teks dan gambar

---

## 💡 2. TUJUAN

1. Menyediakan tutorial web yang mudah diikuti dengan navigasi langkah-per-langkah.
2. Menyajikan teks, gambar, dan catatan penting dalam format yang jelas dan ringan.
3. Mengoptimalkan UX agar cocok di desktop dan mobile.
4. Menjadi proyek dasar untuk pengembangan sistem dokumentasi berbasis AI (misalnya update otomatis, narasi dinamis, dsb).

---

## 🧩 3. KEBUTUHAN

### a. Kebutuhan Fungsional

1. **Navigasi Langkah Tutorial**

   * Sidebar (atau progress bar di atas) menampilkan langkah 1–7.
   * Klik tiap langkah akan men-scroll ke bagian terkait (anchor-based).
2. **Layout Responsif**

   * Tampilan optimal untuk desktop, tablet, dan mobile.
3. **Tampilan Gambar**

   * Gambar ilustrasi pada tiap langkah (lazy load untuk performa).
4. **Sistem Umpan Balik**

   * Form sederhana: "Apakah tutorial ini membantu?" → tombol Ya / Tidak.
   * Data disimpan lokal (atau mock API).
5. **Tombol Ganti Tema Terang/Gelap**

   * Opsi tampilan terang dan gelap.
6. **Scroll Halus**

   * Navigasi antar-langkah halus.
7. **SEO & Aksesibilitas**

   * Struktur heading semantik (h1–h3), alt-text pada gambar, meta tag lengkap.

### b. Kebutuhan Non-Fungsional

1. **Performa:** Load < 2 detik di koneksi 10 Mbps.
2. **Kompatibilitas:** Berjalan baik di Chrome, Firefox, Edge, Safari.
3. **Kemudahan Pemeliharaan:** Struktur file modular (HTML + CSS + JS terpisah).
4. **Siap Lokalisasi:** Bisa diterjemahkan (ID/EN).
5. **Lisensi:** Semua gambar dari sumber bebas lisensi atau buatan sendiri.

---

## 🎨 4. SISTEM DESAIN

### a. Layout

* **Header:** Judul proyek, logo kecil Rufus/Windows.
* **Sidebar / Panel Progres:**

  ```
  1. Ikhtisar  
  2. Persiapan  
  3. Pengaturan Rufus  
  4. Proses Bootable  
  5. Instalasi Windows  
  6. Pemecahan Masalah  
  7. Ringkasan
  ```
* **Area Konten Utama:** Artikel per langkah berisi teks, list, gambar, dan box informasi.
* **Footer:** Form umpan balik, hak cipta, link sumber.

### b. Warna & Tipografi

| Elemen           | Warna                               | Catatan             |
| ---------------- | ----------------------------------- | ------------------- |
| Background Light | `#FAFAFA`                           | netral putih        |
| Background Dark  | `#121212`                           | abu gelap           |
| Accent Primary   | `#0078D4`                           | biru Windows        |
| Accent Secondary | `#FFB900`                           | warna kontras Rufus |
| Font Family      | `Inter`, `Roboto`, atau `Noto Sans` | modern & clean      |
| Font Size        | 16–18px body, 28–36px heading       | keterbacaan tinggi  |

### c. Komponen Reusable

* `StepCard` → berisi nomor langkah, judul, isi, gambar.
* `AlertBox` → untuk catatan penting atau peringatan.
* `NavSidebar` → daftar langkah dengan status aktif.
* `FeedbackForm` → tombol Ya/Tidak + komentar singkat.

---

## 🧠 5. PEMBAGIAN TUGAS AGENT AI

| Task ID | Kategori     | Deskripsi                                                                              | Output                    |
| ------- | ------------ | -------------------------------------------------------------------------------------- | ------------------------- |
| T1      | Perencanaan  | Buat struktur folder proyek (`/public`, `/src`, `/assets`, `/styles`)                  | Struktur file             |
| T2      | Layout HTML  | Generate struktur HTML utama dengan elemen `<header>`, `<aside>`, `<main>`, `<footer>` | `index.html`              |
| T3      | Navigasi     | Tambahkan sidebar interaktif untuk navigasi langkah tutorial (scrollspy/anchor)        | JS navigation             |
| T4      | Styling      | Buat CSS responsif + tema gelap/terang                                                 | `style.css`               |
| T5      | Komponen     | Buat komponen StepCard & AlertBox                                                      | modular components        |
| T6      | Konten       | Isi konten tutorial (7 langkah sesuai struktur)                                        | teks + placeholder gambar |
| T7      | Interaksi    | Implementasikan scroll halus & tombol ganti tema                                       | JS script                 |
| T8      | Umpan Balik  | Tambahkan form umpan balik sederhana (localStorage)                                    | form + handler            |
| T9      | Optimasi     | Tambahkan lazy-loading gambar + meta SEO                                               | optimized site            |
| T10     | Deployment   | Build final output ke folder `/dist` & tes di local server                             | deploy-ready build        |

---

## 🔧 6. TEKNOLOGI YANG DIGUNAKAN

| Layer      | Tools                                                 |
| ---------- | ----------------------------------------------------- |
| Frontend   | HTML5, CSS3, JavaScript, React                        |
| Styling    | TailwindCSS atau custom CSS                           |
| Build Tool | Vite                                                  |
| Storage    | LocalStorage untuk umpan balik                        |
| Hosting    | GitHub Pages / Netlify / Vercel                       |

---

## 📅 7. TIMELINE (Estimasi untuk AI Agent)

| Hari | Aktivitas                                  |
| ---- | ------------------------------------------ |
| 1    | Generate struktur proyek + layout dasar    |
| 2    | Implementasi navigasi dan langkah tutorial |
| 3    | Tambah styling dan gambar ilustrasi        |
| 4    | Integrasi feedback + dark mode             |
| 5    | Optimasi performa + testing + deployment   |

---

## 🧭 8. PENINGKATAN DI MASA DEPAN

* Integrasi **voice guide (AI narration)**
* Penjelasan interaktif per langkah (AI chat di samping tutorial)
* Mode **auto-detect hardware** untuk rekomendasi Rufus setting
* Pembuatan versi PDF dari tutorial

---

Kalau kamu mau, saya bisa bantu **buatkan file project awal (HTML, CSS, JS)** sesuai dokumen ini agar agent AI-mu bisa langsung lanjut implementasi.
Apakah kamu mau saya buatkan skeleton project-nya (misalnya berbasis HTML + Tailwind atau React + Vite)?

### a. Kebutuhan Fungsional

1. **Navigasi Langkah Tutorial**

   * Sidebar (atau progress bar di atas) menampilkan langkah 1–7.
   * Klik tiap langkah akan men-scroll ke bagian terkait (anchor-based).
2. **Layout Responsif**

   * Tampilan optimal untuk desktop, tablet, dan mobile.
3. **Tampilan Gambar**

   * Gambar ilustrasi pada tiap langkah (lazy load untuk performa).
4. **Sistem Umpan Balik**

   * Form sederhana: "Apakah tutorial ini membantu?" → tombol Ya / Tidak.
   * Data disimpan lokal (atau mock API).
5. **Tombol Ganti Tema Terang/Gelap**

   * Opsi tampilan terang dan gelap.
6. **Scroll Halus**

   * Navigasi antar-langkah halus.
7. **SEO & Aksesibilitas**

   * Struktur heading semantik (h1–h3), alt-text pada gambar, meta tag lengkap.

### b. Kebutuhan Non-Fungsional

1. **Performa:** Load < 2 detik di koneksi 10 Mbps.
2. **Kompatibilitas:** Berjalan baik di Chrome, Firefox, Edge, Safari.
3. **Kemudahan Pemeliharaan:** Struktur file modular (HTML + CSS + JS terpisah).
4. **Siap Lokalisasi:** Bisa diterjemahkan (ID/EN).
5. **Lisensi:** Semua gambar dari sumber bebas lisensi atau buatan sendiri.

---

## 🎨 4. SISTEM DESAIN

### a. Layout

* **Header:** Judul proyek, logo kecil Rufus/Windows.
* **Sidebar / Panel Progres:**

  ```
  1. Ikhtisar  
  2. Persiapan  
  3. Pengaturan Rufus  
  4. Proses Bootable  
  5. Instalasi Windows  
  6. Pemecahan Masalah  
  7. Ringkasan
  ```
* **Area Konten Utama:** Artikel per langkah berisi teks, list, gambar, dan box informasi.
* **Footer:** Form umpan balik, hak cipta, link sumber.

### b. Warna & Tipografi

| Elemen           | Warna                               | Catatan             |
| ---------------- | ----------------------------------- | ------------------- |
| Background Light | `#FAFAFA`                           | netral putih        |
| Background Dark  | `#121212`                           | abu gelap           |
| Accent Primary   | `#0078D4`                           | biru Windows        |
| Accent Secondary | `#FFB900`                           | warna kontras Rufus |
| Font Family      | `Inter`, `Roboto`, atau `Noto Sans` | modern & clean      |
| Font Size        | 16–18px body, 28–36px heading       | keterbacaan tinggi  |

### c. Komponen Reusable

* `StepCard` → berisi nomor langkah, judul, isi, gambar.
* `AlertBox` → untuk catatan penting atau peringatan.
* `NavSidebar` → daftar langkah dengan status aktif.
* `FeedbackForm` → tombol Ya/Tidak + komentar singkat.

---

## 🧠 5. PEMBAGIAN TUGAS AGENT AI

| Task ID | Kategori     | Deskripsi                                                                              | Output                    |
| ------- | ------------ | -------------------------------------------------------------------------------------- | ------------------------- |
| T1      | Perencanaan  | Buat struktur folder proyek (`/public`, `/src`, `/assets`, `/styles`)                  | Struktur file             |
| T2      | Layout HTML  | Generate struktur HTML utama dengan elemen `<header>`, `<aside>`, `<main>`, `<footer>` | `index.html`              |
| T3      | Navigasi     | Tambahkan sidebar interaktif untuk navigasi langkah tutorial (scrollspy/anchor)        | JS navigation             |
| T4      | Styling      | Buat CSS responsif + tema gelap/terang                                                 | `style.css`               |
| T5      | Komponen     | Buat komponen StepCard & AlertBox                                                      | modular components        |
| T6      | Konten       | Isi konten tutorial (7 langkah sesuai struktur)                                        | teks + placeholder gambar |
| T7      | Interaksi    | Implementasikan scroll halus & tombol ganti tema                                       | JS script                 |
| T8      | Umpan Balik  | Tambahkan form umpan balik sederhana (localStorage)                                    | form + handler            |
| T9      | Optimasi     | Tambahkan lazy-loading gambar + meta SEO                                               | optimized site            |
| T10     | Deployment   | Build final output ke folder `/dist` & tes di local server                             | deploy-ready build        |

---

## 🔧 6. TEKNOLOGI YANG DIGUNAKAN

| Layer      | Tools                                                 |
| ---------- | ----------------------------------------------------- |
| Frontend   | HTML5, CSS3, JavaScript, React                        |
| Styling    | TailwindCSS atau custom CSS                           |
| Build Tool | Vite                                                  |
| Storage    | LocalStorage untuk umpan balik                        |

---

## 🧭 8. PENINGKATAN DI MASA DEPAN

* Integrasi **voice guide (AI narration)**
* Penjelasan interaktif per langkah (AI chat di samping tutorial)
* Mode **auto-detect hardware** untuk rekomendasi Rufus setting
* Pembuatan versi PDF dari tutorial

---

Kalau kamu mau, saya bisa bantu **buatkan file project awal (HTML, CSS, JS)** sesuai dokumen ini agar agent AI-mu bisa langsung lanjut implementasi.
Apakah kamu mau saya buatkan skeleton project-nya (misalnya berbasis HTML + Tailwind atau React + Vite)?