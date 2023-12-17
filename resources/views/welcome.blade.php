<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>landing page </title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-ebook-landing.css" rel="stylesheet">
    </head>   
    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>LOKER ALUMNI</span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Tentang Kami</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Perusahaan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_6">Informasi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="/login" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-login"></i>
                                <span>Login</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-3 mb-3 pb-5 pb-lg-0 mb-lg-0">
                         <h6>Loker Alumni</h6>
                            <h1 class="text-white mb-4">Selamat Datang Di <br> Loker Alumni <br>SMK YPC Tasikmalaya</h1>
                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">More</a>
                        </div>
                        <div class="hero-image-wrap col-lg-6 col-6 mt-8 mt-lg-0">
                           {{-- <img src="images/education-online-books.png" class="hero-image img-fluid" alt="education online books">  --}}
                      
                        </div>
                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">
                                <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image avatar-image-left" alt="">
                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>
<section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <img src="images/tablet-screen-contents.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h2 class="mb-4">TENTANG KAMI</h2>
                            <p>Bursa Kerja Khusus (BKK) adalah sebuah Lembaga yang dibentu di Sekolah Menengah Kejuaruan Negri dan Swasta, untuk memudahkan para alumni smk ypc mencari lowongan pekerjaan </p>
                            <p>Bursa Kerja Khusus (BKK) adalah sebuah Lembaga yang dibentu di Sekolah Menengah Kejuaruan Negri dan Swasta, untuk memudahkan para alumni smk ypc mencari lowongan pekerjaan </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h2>PERUSAHAAN</h2>
                            <h6>List Perusahaan yang Sudah banyak aumni bekerja disana</h6>
                        </div>
                        <div class="col-lg-4 col-12 my-3s my-lg-0">
                            {{-- <div class="custom-block d-flex flex-wrap"> --}}
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    @foreach ($perusahaans as $item)
                                    <img src="{{ asset('storage/'.$item['foto']) }}" alt="...">
                                    <div class="text-center mt-3">
                                        <span class="text-white">{{ $item->deskripsi }}</span>
                                        <strong class="d-block text-white"><h3 class="text-white">{{ $item->nama_perusahaan }}</h3></strong>
                                    </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                    </div>
                                 @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Reviews</h6>
                            <h2>TESTIMONI</h2>
                        </div>
                        <div class="col-lg-4 col-12">
                                @foreach ($contacts as $item)
                                    {{-- <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt=""> --}}
                                    <div class="text-center mt-3">
                                        <span class="text-dark">{{ $item->nama}}</span>
                                        <strong class="d-block text-dark">{{ $item->pesan}}</strong>
                                    </div>
                                </div>
                               
                                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="reviews-section section-padding" id="section_6">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-5">
                            <h2>LOWONGAN TERSEDIA</h2>
                            <h6>Beberapa lowongan yang tersedia :</h6>
                    </div>
             <div class="col-lg-4 col-12 my-5 my-lg-0">
                            {{-- <div class="custom-block d-flex flex-wrap"> --}}
                                {{-- <div class="custom-block-image-wrap d-flex flex-column flex-wrap"> --}}
                 @foreach ($postings as $item)
                    <img src="{{ asset('storage/'.$item['foto']) }}"  alt="..." >
                         <div class="text-center mt-3">
                         </div>
                            {{-- <a href="/detailposting">
                            <button class="btn btn sm- btn-success" style="margin-left: 40px;margin-top">Lihat Detail</button> 
                        </a> --}}
                             </div>
                             <div class="d-none d-lg-block">
                                <a href="/detailposting" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                    <i class="btn-icon " style="margin-left: 40px;margin-top"></i>
                                    <span>More</span>
                                </a>
                            </div>
                 @endforeach
            </div>
    </section>
            <section class="contact-section section-padding" id="section_5">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-white shadow" action="contact/post" method="post" role="form">
                                @csrf
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Contact</h2>
                                </div>

                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="text" name="nama" id="nama" class="form-control" aria-label="nama" aria-describedby="basic-addon1" placeholder="Nama Lengkap" required>
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" name="pesan" id="pesan" class="form-control" placeholder="Pesan" aria-label="pesan" aria-describedby="basic-addon2" required="">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
                                    </div> --}}
                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Say hi and talk to us</h6>
                            
                            <h2 class="mb-4">Kontak Kami</h2>
                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                               SMK YPC Tasikmalaya, Jawa Barat
                            </p>
                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    0857625481429
                                </a></p>
                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@company.com
                                </a></p>                          

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by templatemo</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>