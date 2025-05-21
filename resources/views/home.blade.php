@extends('layouts.app')

@section('content')
<section class="hero-section vh-100 d-flex align-items-center">
    <div class="container position-relative z-index-1">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <h1 class="display-3 fw-bold mb-4">Selamat Datang  - <span class="text-warning">Untrim</span></h1>
                <p class="lead mb-5">Selamat datang di Universitas Triatma Mulya, kampus masa depan yang siap membentuk generasi unggul, kreatif, dan berdaya saing global. Temukan pengalaman belajar terbaik, fasilitas modern, serta lingkungan akademik yang inspiratif untuk mewujudkan mimpimu dan meraih masa depan gemilang bersama kami.
</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#programs" class="btn btn-light btn-lg rounded-pill px-4 py-2 animate__animated animate__pulse animate__infinite">Lihat Program</a>
                  
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left">
                <img src="https://triatmamulya.ac.id/wp-content/uploads/2022/09/5-1.jpg" 
                     alt="Kampus Unitech" 
                     class="img-fluid rounded-4 shadow-lg animate__animated animate__fadeInUp">
            </div>
        </div>
    </div>
    <div class="scroll-down">
        <a href="#about" class="text-white">
            <i class="fas fa-chevron-down animate__animated animate__bounce animate__infinite"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 py-lg-7 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <img src="https://triatmamulya.ac.id/wp-content/uploads/2022/06/2-3.jpg" 
                     alt="Tentang Kampus" 
                     class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-bold mb-4">Kampus <span class="text-primary">Masa Depan</span> di Tahun 2025</h2>
                <p class="lead mb-4">Triatma Mulya adalah perguruan tinggi berbasis Paiwisata Dan Umum yang mempersiapkan mahasiswa untuk menghadapi tantangan era digital dan industri Mendatang.</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-graduation-cap fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Akreditasi B</h5>
                                <p class="mb-0">Terakreditasi Dengan Predikat Terbaik Di Kabupaten</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="fas fa-user-tie fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Dosen Profesional</h5>
                                <p class="mb-0">Dosen praktisi dari berbagai keahlian</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-lg mt-4 rounded-pill px-4">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>


<!-- Programs Section -->
<section id="programs" class="py-5 py-lg-7">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">Program <span class="text-primary">Unggulan</span></h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Kami menawarkan berbagai program studi yang dirancang untuk memenuhi kebutuhan industri masa depan.</p>
        </div>
        
        <div class="row g-4">
    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="AI & Robotika">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                        <i class="fas fa-robot text-primary fs-4"></i>
                    </div>
                    <h5 class="card-title mb-0">AI & Robotika</h5>
                </div>
                <p class="card-text text-muted">Program studi yang mempersiapkan mahasiswa menjadi ahli di bidang kecerdasan buatan dan robotika.</p>
                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Detail Program</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Bisnis Digital">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                        <i class="fas fa-chart-line text-primary fs-4"></i>
                    </div>
                    <h5 class="card-title mb-0">Bisnis & Pariwisata</h5>
                </div>
                <p class="card-text text-muted">Mengembangkan keahlian di bidang digital marketing, startup, dan ekonomi kreatif berbasis teknologi.</p>
                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Detail Program</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
    <div class="feature-card card h-100 border-0 shadow-sm">
        <img src="https://tse1.mm.bing.net/th?id=OIP.WxnMAtKkHeU9PEskmkXymgHaE8&pid=Api&P=0&h=180" class="card-img-top" alt="Kesehatan">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                    <i class="fas fa-heartbeat text-primary fs-4"></i>
                </div>
                <h5 class="card-title mb-0">Kesehatan</h5>
            </div>
            <p class="card-text text-muted">Mempersiapkan tenaga profesional di bidang pelayanan kesehatan, keperawatan, dan kesehatan masyarakat yang kompeten dan beretika.</p>
            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Detail Program</a>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
    <div class="feature-card card h-100 border-0 shadow-sm">
        <img src="https://tse3.mm.bing.net/th?id=OIP.GWSJdM_ptLjqlM0jTTZw-AHaFO&pid=Api&P=0&h=180" class="card-img-top" alt="Pendidikan Guru">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                    <i class="fas fa-chalkboard-teacher text-primary fs-4"></i>
                </div>
                <h5 class="card-title mb-0">Pendidikan Guru</h5>
            </div>
            <p class="card-text text-muted">Mendidik calon guru profesional dengan kompetensi pedagogik, profesional, kepribadian, dan sosial untuk dunia pendidikan masa depan.</p>
            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Detail Program</a>
        </div>
    </div>
</div>
         
        <!-- Tambahkan 3 program studi lainnya dengan struktur yang sama -->
        </div>
    </div>
</section>

<!-- Our Group Section -->
<section id="our-group" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">Nama <span class="text-primary">Kelompok</span></h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Kami adalah tim yang solid dan berkomitmen dalam mengembangkan proyek ini bersama.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="d-flex justify-content-center pt-4">
                        <img src="https://cdn-icons-png.flaticon.com/128/949/949635.png" 
                             alt="Kadek Putri Narayani" 
                             class="rounded-circle" 
                             style="object-fit: cover; height: 250px; width: 250px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kadek Putri Narayani</h5>
                        <p class="card-text text-muted">2355201014</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="d-flex justify-content-center pt-4">
                        <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" 
                             alt="Naila Nurfaiza" 
                             class="rounded-circle" 
                             style="object-fit: cover; height: 250px; width: 250px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Naila Nurfaiza</h5>
                        <p class="card-text text-muted">2355201016</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="d-flex justify-content-center pt-4">
                        <img src="https://cdn-icons-png.flaticon.com/128/16683/16683439.png" 
                             alt="Cindy Aulia Sari" 
                             class="rounded-circle" 
                             style="object-fit: cover; height: 250px; width: 250px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cindy Aulia Sari</h5>
                        <p class="card-text text-muted">2355201003</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonial Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">Apa Kata <span class="text-primary">Mereka</span></h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Testimoni dari mahasiswa dan alumni kami.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-quote-left text-primary fs-1 opacity-25"></i>
                        </div>
                        <p class="card-text mb-4">"Untrim memberikan pengalaman belajar yang luar biasa dengan fasilitas lengkap dan dosen yang kompeten."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/128/4140/4140037.png" 
                                 alt="Testimoni" 
                                 class="rounded-circle me-3" 
                                 width="50">
                            <div>
                                <h6 class="mb-0">PUTU AGUS</h6>
                                <small class="text-muted">Alumni Teknik Informatika, 2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tambahkan 2 testimoni lainnya dengan struktur yang sama -->
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="display-6 fw-bold mb-3">Siap Bergabung Dengan Kami?</h2>
                <p class="lead mb-0">Daftarkan diri Anda sekarang dan raih masa depan gemilang di Universitas Triatma Mulya PSDKU.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="#" class="btn btn-light btn-lg rounded-pill px-4 py-2">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
@endsection