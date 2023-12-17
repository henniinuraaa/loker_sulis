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
            <nav class="navbar navbar-expand-lg bg-dark">
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
                                <a class="nav-link click-scroll" href="/tampilperusahaan">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Tentang Kami</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Perusahaan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Informasi</a>
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
<section class="reviews-section section-padding" id="section_4">
    <div class="container">
         <div class="row">
           <div class="col-lg-4 col-12 my-5 my-lg-0">
              @foreach ($postings as $item)
                  <img src="{{ asset('storage/'.$item['foto']) }}" alt="..." width="400" height="600">
                     <span class="text-white">{{ $item->nama_perusahaan }}</span>
                     <div class="d-none d-lg-block">
                        <a href="/pengajuan" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon " style="margin-left: 40px;margin-top"></i>
                            <span>Daftar</span>
                        </a>
                      </div>
              @endforeach
             </div>
         </div>
    </div>
</section>

</html>