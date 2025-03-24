<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ENKA TOUR') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold custom-primary" href="#home">ENKA TOUR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paket-tour">Paket Tour</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ulasan">Ulasan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dokumentasi">Dokumentasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang-kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
                <form class="d-flex" id="search-form">
                    <input class="form-control me-2" type="search" placeholder="Cari Paket Tour" id="search-input">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Travel Memories You'll Never Forget</h1>
                    <p>Two proximetly switches detect when the value has reached the end of its travel.</p>
                    <div class="mt-4">
                        <a href="#paket-tour" class="btn btn-find-more px-4 py-2 me-2">Find Out More</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/1.jpg') }}" alt="Travel Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Find Your Best Destination Section -->
<section id="find-destination" class=" best-section py-5">
    <div class="container text-center">
        <h2 class="mb-2">Find Your Best Destination</h2>
        <p class="mb-4">We have more than 2000 destination you can choose</p>
        <!-- Search Bar -->
        <div class="search-destination mb-5 mx-auto">
            <form class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 400px;">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" class="form-control" placeholder="Search Destination">
                    <button class="btn btn-find-more" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- Destination Images -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="outdoor">
                    <img src="{{ asset('images/2.jpg') }}" alt="Destination 1" class="img-fluid">
                    <div class="destination-label">Outdoor</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="beach">
                    <img src="{{ asset('images/3.jpg') }}" alt="Destination 2" class="img-fluid">
                    <div class="destination-label">Beach</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="lake">
                    <img src="{{ asset('images/4.jpg') }}" alt="Destination 3" class="img-fluid">
                    <div class="destination-label">Lake</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="destination-card" data-destination="religi">
                    <img src="{{ asset('images/5.jpg') }}" alt="Destination 4" class="img-fluid">
                    <div class="destination-label">Religi</div>
                </div>
            </div>
        </div>
        <!-- See More Button -->
        <a href="#" class="btn btn-find-more mt-3">See More</a>
    </div>
</section>

    <!-- Best Vacation Plan Section -->
<section id="paket-tour" class="paket-section py-5">
    <div class="container text-center">
        <h2 class="mb-2">Best Vacation Plan</h2>
        <p class="mb-5">Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive offer!</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card">
                    <img src="{{ asset('images/6.jpg') }}" alt="Bali, Indonesia" class="img-fluid">
                    <div class="vacation-info" data-location="Bali">
                        <h5>Bali, Indonesia</h5>
                        <p class="price">$746k</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card" data-location="Yogyakarta">
                    <img src="{{ asset('images/7.jpg') }}" alt="Yogyakarta, Indonesia" class="img-fluid">
                    <div class="vacation-info">
                        <h5>Yogyakarta, Indonesia</h5>
                        <p class="price">$746k</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card">
                    <img src="{{ asset('images/8.jpg') }}" alt="Lombok, Indonesia" class="img-fluid">
                    <div class="vacation-info" data-location="Lombok">
                        <h5>Lombok, Indonesia</h5>
                        <p class="price">$746k</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="vacation-card" data-location="Malang">
                    <img src="{{ asset('images/9.jpg') }}" alt="Malang, Indonesia" class="img-fluid">
                    <div class="vacation-info">
                        <h5>Malang, Indonesia</h5>
                        <p class="price">$746k</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-plane me-1"></i> 7 Day Trip</span>
                            <span><i class="fas fa-star me-1"></i> 4.5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-find-more mt-3">See More</a>
    </div>
</section>

    <!-- Ulasan Section (Testimonials Carousel) -->
<section id="ulasan" class="ulasan-section py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-2">What Our Customers Say</h2>
        <p class="mb-5">Hear from travelers who’ve experienced the magic of Enka Tour!</p>
        <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="testimonial-card">
                                <img src="{{ asset('images/10.jpg') }}" alt="User 1" class="avatar">
                                <h5 class="mt-3">Dewi</h5>
                                <div class="rating mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>"Pengalaman tak terlupakan bersama Enka Tour! Pelayanan sangat baik dan destinasi yang ditawarkan sangat indah."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="testimonial-card">
                                <img src="{{ asset('images/10.jpg') }}" alt="User 2" class="avatar">
                                <h5 class="mt-3">Candra</h5>
                                <div class="rating mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>"Tour guide sangat ramah dan membantu. Semua terorganisasi dengan baik, membuat perjalanan kami menyenangkan."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="testimonial-card">
                                <img src="{{ asset('images/10.jpg') }}" alt="User 3" class="avatar">
                                <h5 class="mt-3">Asoyy</h5>
                                <div class="rating mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>"Harga paket tour sangat terjangkau dengan fasilitas yang lengkap. Sangat recommended untuk liburan keluarga!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Dokumentasi Section -->
<section id="dokumentasi" class="gallery-section py-5">
    <div class="container text-center">
        <h2 class="m-4">Galeri Perjalanan Kami 📸</h2>
        <p>Intip momen-momen indah dari perjalanan bersama Enka Tour 🍃</p>
        <div class="row gallery-grid">
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/11.jpg') }}" alt="Trip 1" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/12.jpg') }}" alt="Trip 2" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/13.jpg') }}" alt="Trip 3" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/14.jpg') }}" alt="Trip 4" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/15.jpg') }}" alt="Trip 5" />
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-img">
                <span class="gallery-number"></span>
                <img src="{{ asset('images/16.jpg') }}" alt="Trip 6" />
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami Section -->
<section class="about-section py-5" id="tentang-kami">
    <div class="container">
        <p class="text-center m-4 fs-1 fw-bold">Tentang Enka Tour</p>
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img class="img-thumbnail rounded-5" src="{{ asset('images/17.jpg') }}" alt="Enka Tour Team" />
            </div>
            <div class="col-lg-6">
                <div class="row about-container g-4">
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-address-book"></i>
                            <h3>Kualifikasi</h3>
                            <p>Supplier Terpercaya</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-headset"></i>
                            <h3>Layanan</h3>
                            <p>Full Support 24 Jam</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-check-circle"></i>
                            <h3>Kerjasama</h3>
                            <p>Saling Menguntungkan</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-box">
                            <i class="fas fa-cart-arrow-down"></i>
                            <h3>Persediaan</h3>
                            <p>Sayuran dengan Kualitas Terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="about-paragraf">
                    <p>
                        Enka Tour adalah agen travel terpercaya yang telah melayani ribuan pelanggan sejak 2020. Kami berkomitmen untuk memberikan pengalaman perjalanan yang tak terlupakan dengan destinasi wisata terbaik di seluruh dunia 🌍.
                    </p>
                    <p>
                        Enka Tour siap membantu Anda merencanakan liburan impian. Kami menawarkan paket tour yang fleksibel, harga kompetitif, dan pelayanan penuh kehangatan! ✈️✨
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section" id="contact">
    <div class="container">
        <h2>Kirim Pesan</h2>
        <p>
            Punya pertanyaan atau ingin memesan paket tour impian Anda? Kami siap membantu! Hubungi kami melalui telepon, WhatsApp, atau email, dan rasakan kemudahan merencanakan perjalanan bersama Enka Tour.
        </p>

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jl. Apa Saya Tidak Tahu Ini No. 88, Kuta, Bali, Indonesia</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fab fa-whatsapp"></i>
                        <span>08123456789</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="mailto:info@enkatour.com">info@enkatour.com</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulir Kontak -->
        <form class="contact-form" id="contactForm">
            <div class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Nama*" required />
                </div>
                <div class="col-12">
                    <input type="email" class="form-control" placeholder="Email*" required />
                </div>
                <div class="col-12">
                    <textarea class="form-control" rows="3" placeholder="Pesan*" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                </div>
            </div>
        </form>
        <!-- Untuk pesan feedback -->
        <div id="formMessage" class="mt-3" style="display: none;"></div>
    </div>
</footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>