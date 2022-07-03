{{-- @extends('layouts.user') --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assetsnnnnnnnlib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About</a>
                <a href="mapel" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>


</head>

<body>
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Mapels</h6>
                <h1 class="mb-5">Mata Pelajaran</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="row">
                    <div class="row g-4 justify-content-center">
                        <div class="row">
                            @foreach ($mapel2 as $mapel )
                            <div class=" col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ route('user.mapel2.show', $mapel->id) }}"> --}}


                                    {{-- <a href='materi'> --}}
                                        {{-- <a href="{{ route('materi') }}"> --}}


                                {{-- <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <div class="col-lg-2 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                        <h3 class="nav-item nav-link">{{ $mapel->nama }} </h3>
                                        </div>

                                    </div>
                                </div>
                            </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Mapels</h6>
        <h1 class="mb-5">Mata Pelajaran</h1>
    </div>
    @foreach ($mapel2 as $mapel )
    <div class="container-xxl py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="course-item bg-light">
                    <div class="testimonial-item text-center">
                        <a href="{{ route('user.mapel2.show', $mapel->id) }}">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src=" " style="width: 80px; height: 80px;">
                            <h5 class="mb-0">{{ $mapel->nama }} </h5>
                            <p> </p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">{{ $mapel->deskripsi }} </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>


</body>
</html>

