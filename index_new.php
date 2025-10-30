<?php
// Windows 10 Installation Tutorial with Rufus - Ubuntu-style format
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Instalasi Windows 10 dengan Rufus - Panduan Lengkap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <button class="mobile-menu-btn me-3" type="button" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">Tutorial Windows 10</a>
        </div>
    </nav>
    
    <!-- Sidebar overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3 col-md-4">
                <div class="tutorial-sidebar">
                    <div class="list-group">
                        <a href="#overview" class="list-group-item list-group-item-action active" data-section="overview" data-number="0">Overview</a>
                        <a href="#download" class="list-group-item list-group-item-action" data-section="download" data-number="1">Download Rufus</a>
                        <a href="#create-usb" class="list-group-item list-group-item-action" data-section="create-usb" data-number="2">Buat USB Bootable</a>
                        <a href="#boot-usb" class="list-group-item list-group-item-action" data-section="boot-usb" data-number="3">Boot dari USB</a>
                        <a href="#installation-setup" class="list-group-item list-group-item-action" data-section="installation-setup" data-number="4">Setup Instalasi</a>
                        <a href="#type-installation" class="list-group-item list-group-item-action" data-section="type-installation" data-number="5">Jenis Instalasi</a>
                        <a href="#login-details" class="list-group-item list-group-item-action" data-section="login-details" data-number="6">Detail Login</a>
                        <a href="#location" class="list-group-item list-group-item-action" data-section="location" data-number="7">Pilih Lokasi</a>
                        <a href="#ready-install" class="list-group-item list-group-item-action" data-section="ready-install" data-number="8">Siap Instalasi</a>
                        <a href="#complete-installation" class="list-group-item list-group-item-action" data-section="complete-installation" data-number="9">Lengkapi Instalasi</a>
                        <a href="#update" class="list-group-item list-group-item-action" data-section="update" data-number="10">Jangan Lupa Update!</a>
                        <a href="#complete" class="list-group-item list-group-item-action" data-section="complete" data-number="11">Instalasi Selesai!</a>
                    </div>
                </div>
            </div>

            <!-- Tutorial Content -->
            <div class="col-lg-9 col-md-8">
                <div class="tutorial-content">
                    <!-- Overview Section -->
                    <section id="overview" class="section-content active">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Tutorial Instalasi Windows 10 dengan Rufus</h1>
                            </div>
                            <div class="card-body">
                                <p class="lead">Tutorial langkah-demi-langkah untuk menginstal Windows 10 menggunakan Rufus, alat gratis untuk membuat USB bootable.</p>
                                
                                <!-- Warning Notification -->
                                <div class="warning-notification">
                                    <div class="warning-content">
                                        <h5><i class="fas fa-exclamation-triangle warning-icon"></i> Peringatan Penting</h5>
                                        <p>Jika Anda menginstal Windows 10 pada PC atau laptop yang sebelumnya telah Anda gunakan, selalu disarankan untuk mencadangkan data Anda sebelum instalasi.</p>
                                    </div>
                                </div>
                                
                                <h2 class="card-title">Ikhtisar</h2>
                                <p class="card-text">Tutorial ini akan memandu Anda melalui proses instalasi Windows 10 menggunakan Rufus. Ikuti langkah-langkah berikut secara berurutan:</p>
                                <ol>
                                    <li>Download Rufus dan file ISO Windows 10</li>
                                    <li>Buat USB bootable menggunakan Rufus</li>
                                    <li>Boot komputer dari USB tersebut</li>
                                    <li>Ikuti wizard instalasi Windows 10</li>
                                </ol>
                                <div class="alert alert-info">
                                    <strong>Catatan:</strong> Pastikan Anda memiliki cadangan data penting sebelum memulai proses instalasi.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <div></div>
                            <button class="btn btn-lg btn-primary" onclick="showSection('download')">Mulai Tutorial</button>
                        </div>
                    </section>

                    <!-- Download Section -->
                    <section id="download" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Download Rufus</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Download Rufus</h2>
                                <p>Rufus adalah alat gratis dan open-source yang digunakan untuk membuat USB bootable. Ini adalah aplikasi portable yang tidak perlu diinstal.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah Download:</h3>
                                        <ol>
                                            <li>Kunjungi situs resmi Rufus: <a href="https://rufus.ie" target="_blank">https://rufus.ie</a></li>
                                            <li>Pilih versi stable terbaru</li>
                                            <li>Klik tombol download untuk versi yang sesuai dengan sistem Anda</li>
                                            <li>Simpan file di folder yang mudah diingat</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/rufus-download.jpg" data-toggle="lightbox" data-caption="Halaman download Rufus">
                                            <img src="images/rufus-download.jpg" class="img-fluid" alt="Download Rufus" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning mt-3">
                                    <strong>Penting:</strong> Pastikan Anda mengunduh Rufus dari situs resmi untuk menghindari malware.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('overview')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('create-usb')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Create USB Section -->
                    <section id="create-usb" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Buat USB Bootable</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Buat USB Bootable dengan Rufus</h2>
                                <p>Langkah-langkah untuk membuat USB bootable yang siap digunakan untuk instalasi Windows 10:</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Instruksi:</h3>
                                        <ol>
                                            <li>Sisipkan USB flash drive dengan kapasitas minimal 8GB</li>
                                            <li>Jalankan aplikasi Rufus (file executable yang Anda download)</li>
                                            <li>Pilih perangkat USB Anda dari dropdown "Device"</li>
                                            <li>Klik ikon folder di sebelah "Boot selection" untuk memilih file ISO Windows 10 Anda</li>
                                            <li>Pastikan pengaturan berikut dipilih:
                                                <ul>
                                                    <li>Sistem File: NTFS</li>
                                                    <li>Tipe Partisi: GPT (jika Anda menggunakan UEFI)</li>
                                                    <li>Skema Target Sistem: UEFI (non-CSM)</li>
                                                </ul>
                                            </li>
                                            <li>Klik "Mulai" dan tunggu proses selesai</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/rufus-configuration.jpg" data-toggle="lightbox" data-caption="Konfigurasi Rufus untuk membuat USB bootable">
                                            <img src="images/rufus-configuration.jpg" class="img-fluid" alt="Konfigurasi Rufus" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Tip:</strong> Proses pembuatan USB bootable akan menghapus semua data di USB, pastikan Anda sudah mencadangkan data penting.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('download')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('boot-usb')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Boot from USB Section -->
                    <section id="boot-usb" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Boot dari USB Flash Drive</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Boot dari USB Flash Drive</h2>
                                <p>Untuk menginstal Windows 10, Anda harus boot komputer Anda dari USB yang sudah Anda buat tadi.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Restart komputer Anda</li>
                                            <li>Masuk ke BIOS/UEFI (biasanya dengan menekan F2, F12, DEL, atau ESC saat startup)</li>
                                            <li>Cari pengaturan "Boot" atau "Pengaturan Boot"</li>
                                            <li>Atur USB drive sebagai prioritas boot pertama</li>
                                            <li>Simpan perubahan dan restart komputer</li>
                                            <li>Komputer akan boot dari USB dan menampilkan wizard instalasi Windows</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/bios-setting.jpg" data-toggle="lightbox" data-caption="Contoh pengaturan BIOS untuk boot dari USB">
                                            <img src="images/bios-setting.jpg" class="img-fluid" alt="Pengaturan BIOS" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning mt-3">
                                    <strong>Catatan:</strong> Setiap motherboard memiliki tampilan BIOS yang berbeda, tetapi fungsi dasarnya sama.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('create-usb')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('installation-setup')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Installation Setup Section -->
                    <section id="installation-setup" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Setup Instalasi</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Setup Instalasi</h2>
                                <p>Proses instalasi Windows 10 akan dimulai setelah komputer boot dari USB.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah Awal:</h3>
                                        <ol>
                                            <li>Pilih bahasa, waktu, dan format keyboard Anda</li>
                                            <li>Klik "Instal Sekarang"</li>
                                            <li>Masukkan kunci produk jika diminta (lewati jika Anda akan memasukkannya nanti)</li>
                                            <li>Setujui persyaratan lisensi</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/windows-installation.jpg" data-toggle="lightbox" data-caption="Proses instalasi Windows 10">
                                            <img src="images/windows-installation.jpg" class="img-fluid" alt="Instalasi Windows 10" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Pro Tip:</strong> Jika Anda tidak memiliki kunci produk sekarang, Anda bisa melewati dan memasukkan nanti setelah instalasi selesai.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('boot-usb')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('type-installation')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Type of Installation Section -->
                    <section id="type-installation" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Jenis Instalasi</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Jenis Instalasi</h2>
                                <p>Anda akan diminta memilih jenis instalasi yang ingin Anda lakukan.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Pilihan Tersedia:</h3>
                                        <ul>
                                            <li><strong>Upgrade:</strong> Jika Anda ingin memperbarui dari versi Windows yang sudah ada</li>
                                            <li><strong>Custom (advanced):</strong> Jika Anda ingin instalasi bersih</li>
                                        </ul>
                                        <p>Untuk instalasi bersih, pilih "Custom (advanced)".</p>
                                        
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Pilih "Custom: Install Windows only (advanced)"</li>
                                            <li>Pilih drive tempat Anda ingin menginstal Windows</li>
                                            <li>Jika Anda ingin menghapus drive yang dipilih, klik "Drive options (advanced)" lalu "Delete"</li>
                                            <li>Gunakan ruang kosong untuk membuat partisi baru</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/type-installation.jpg" data-toggle="lightbox" data-caption="Jenis instalasi Windows">
                                            <img src="images/type-installation.jpg" class="img-fluid" alt="Jenis Instalasi" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning mt-3">
                                    <strong>PERINGATAN:</strong> Hati-hati memilih drive, menginstal Windows akan menghapus semua data di drive pilihan Anda!
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('installation-setup')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('login-details')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Login Details Section -->
                    <section id="login-details" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Detail Login</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Buat Akun Pengguna</h2>
                                <p>Anda akan diminta membuat akun Microsoft atau akun lokal untuk masuk ke sistem.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Pilih untuk masuk menggunakan akun Microsoft atau membuat akun lokal</li>
                                            <li>Masukkan nama pengguna yang ingin Anda gunakan</li>
                                            <li>Buat kata sandi yang kuat (opsional)</li>
                                            <li>Tambahkan petunjuk sandi (opsional)</li>
                                            <li>Masukkan nama komputer Anda</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/login-details.jpg" data-toggle="lightbox" data-caption="Detail login Windows 10">
                                            <img src="images/login-details.jpg" class="img-fluid" alt="Detail Login" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Tip:</strong> Akun Microsoft memungkinkan sinkronisasi pengaturan, file, dan aplikasi di berbagai perangkat.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('type-installation')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('location')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Location Section -->
                    <section id="location" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Pilih Lokasi</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Setelan Lokasi</h2>
                                <p>Pilih lokasi Anda untuk mengatur zona waktu dan format regional.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Pilih lokasi Anda dari daftar</li>
                                            <li>Zona waktu akan otomatis disetel berdasarkan lokasi</li>
                                            <li>Klik "Yes" jika lokasi Anda benar</li>
                                        </ol>
                                        <p>Anda bisa mengubah pengaturan ini nanti di Pengaturan Windows.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/location.jpg" data-toggle="lightbox" data-caption="Pemilihan lokasi dan zona waktu">
                                            <img src="images/location.jpg" class="img-fluid" alt="Pengaturan Lokasi" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Catatan:</strong> Pengaturan ini mempengaruhi zona waktu, format tanggal/waktu, dan bahasa sistem.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('login-details')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('ready-install')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Ready to Install Section -->
                    <section id="ready-install" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Siap Instalasi</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Pengaturan Tambahan</h2>
                                <p>Anda akan memiliki beberapa opsi pengaturan sebelum instalasi selesai.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Pilih apakah akan mengizinkan pengaturan privasi</li>
                                            <li>Atur fitur keamanan (Cortana, fitur pelacakan, dll)</li>
                                            <li>Pilih aplikasi yang ingin Anda instal awal</li>
                                            <li>Tunggu Windows menyiapkan desktop Anda</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/ready-install.jpg" data-toggle="lightbox" data-caption="Persiapan akhir instalasi">
                                            <img src="images/ready-install.jpg" class="img-fluid" alt="Siap Instalasi" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Proses:</strong> Tahap ini mungkin memakan waktu beberapa menit tergantung spesifikasi komputer Anda.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('location')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('complete-installation')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Complete Installation Section -->
                    <section id="complete-installation" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Lengkapi Instalasi</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Tahap Akhir Instalasi</h2>
                                <p>Windows akan menyelesaikan setelan dan mempersiapkan lingkungan desktop Anda.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Tunggu proses penyiapan selesai</li>
                                            <li>Sistem akan restart beberapa kali secara otomatis</li>
                                            <li>Setelah restart terakhir, Anda akan melihat desktop Windows 10</li>
                                            <li>Windows mungkin melakukan update tambahan setelah instalasi</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/complete-installation.jpg" data-toggle="lightbox" data-caption="Tahap akhir instalasi">
                                            <img src="images/complete-installation.jpg" class="img-fluid" alt="Lengkapi Instalasi" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success mt-3">
                                    <strong>Selamat!</strong> Anda telah berhasil menginstal Windows 10. Proses akhir ini bisa memakan waktu 10-15 menit.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('ready-install')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('update')">Lanjutkan</button>
                        </div>
                    </section>

                    <!-- Update Section -->
                    <section id="update" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Jangan Lupa Update!</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Perbarui Windows</h2>
                                <p>Penting untuk memperbarui Windows setelah instalasi untuk keamanan dan fungsionalitas.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Langkah-langkah:</h3>
                                        <ol>
                                            <li>Buka menu Start dan pilih Settings</li>
                                            <li>Pilih "Update & Security"</li>
                                            <li>Klik "Check for updates"</li>
                                            <li>Instal semua update yang tersedia</li>
                                            <li>Restart komputer jika diminta</li>
                                        </ol>
                                        <p>Ulangi proses ini sampai tidak ada lagi update tersedia.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/update.jpg" data-toggle="lightbox" data-caption="Proses update Windows 10">
                                            <img src="images/update.jpg" class="img-fluid" alt="Update Windows" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-3">
                                    <strong>Keamanan:</strong> Update penting berisi perbaikan keamanan dan bug fixes yang penting untuk sistem Anda.
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('complete-installation')">Kembali</button>
                            <button class="btn btn-lg btn-success" onclick="showSection('complete')">Selesaikan Tutorial</button>
                        </div>
                    </section>

                    <!-- Complete Section -->
                    <section id="complete" class="section-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h1>Instalasi Selesai!</h1>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">Selamat! Anda Telah Menginstal Windows 10</h2>
                                <p>Anda telah berhasil menyelesaikan tutorial instalasi Windows 10 menggunakan Rufus.</p>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Apa Langkah Selanjutnya?</h3>
                                        <ul>
                                            <li>Instal driver perangkat yang sesuai</li>
                                            <li>Instal aplikasi produktivitas yang Anda perlukan</li>
                                            <li>Atur pengaturan keamanan (Windows Defender, Firewall)</li>
                                            <li>Pertimbangkan untuk membuat titik pemulihan sistem</li>
                                        </ul>
                                        
                                        <h3>Perlu Bantuan?</h3>
                                        <ul>
                                            <li>Dukungan resmi Microsoft</li>
                                            <li>Forum komunitas Windows</li>
                                            <li>Video tutorial tambahan</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="images/complete.jpg" data-toggle="lightbox" data-caption="Desktop Windows 10 setelah instalasi">
                                            <img src="images/complete.jpg" class="img-fluid" alt="Instalasi Selesai" style="max-height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success mt-3">
                                    <h4>Terima kasih telah menyelesaikan tutorial ini!</h4>
                                    <p>Jika tutorial ini membantu, silakan bagikan kepada orang lain yang mungkin membutuhkan.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tutorial-nav d-flex justify-content-between">
                            <button class="btn btn-lg btn-secondary" onclick="showSection('update')">Kembali</button>
                            <button class="btn btn-lg btn-primary" onclick="showSection('overview')">Ulangi Tutorial</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Tutorial Instalasi Windows 10 dengan Rufus. Semua hak dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-decoration-none">Kebijakan Privasi</a> | 
                    <a href="#" class="text-decoration-none">Syarat dan Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.5/dist/index.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>