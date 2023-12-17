<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-ebook-landing.css" rel="stylesheet">
        
    </head> 
    <body>
        <main>
            <div class="contact-center section-padding" id="section_5">
                <div class="container py-3 mt-3">
                    <div class="row">
                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-white shadow" action="/auth" method="post" role="form">
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Login</h2>
                                        @csrf
                                </div>                              
                                <div class="input-group mb-4">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@gmail.com" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">                                   
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="custom-form-icon bi-envelope"></i>
                                    </span>
                                </div>    
                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="password" name="password" id="form3Example4c" class="form-control" aria-label="Password" aria-describedby="basic-addon1" placeholder="Input Password" required>
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-eye"></i>
                                        </span>
                                    </div>
                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Login</button>
                                    </div>  
                                    <hr>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>       
            </div>
             </main>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>