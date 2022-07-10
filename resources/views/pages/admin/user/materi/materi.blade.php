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
</head>

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">MATERI</h6>
                <h1 class="mb-5">Ini Materinya</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="row">
                    <div class="row g-4 justify-content-center">
                        <div class="row">
                            @foreach ($materis as $materi )
                            <div class=" col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                                {{-- <a href="{{ route('user.materi.show', $materi->id) }}"> --}}
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <div class="col-lg-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                            <h3 class="nav-item "> {{ $materi->nama }}</h3>
                                            <h3 class="nav-item "> {{ $materi->isi }}</h3>
                                            {{-- nampilin file --}}
                                            <h3><a href="/downloadMateri/{{ $materi->nama_file }}">{{ $materi->nama_file }}</a></h3>
                                            {{-- nampilin video --}}
                                            @isset($materi->video)
                                            <video width="50%" max-width="150" height="auto" controls>
                                                <source src="{{ asset('/video/'.$materi->video) }}">
                                                Your browser does not support the video tag.
                                            </video>
                                            @endisset
                                        </div>
                                        <div id="container-inputnilai" class="row">
                                        </div>
                                    </div>
                                </div>
                            {{-- </a> --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

           {{-- <div class="row g-4 justify-content-center">
                <div class="row">
                    <div class="row g-4 justify-content-center">
                        <div class="row">
                            <div class=" col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ route('user.mapel2.show', $mapel->id) }}">
                                    <a href='materi' >
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                                        </div>
                                        <div class="text-center p-4 pb-0">
                                            <div class="col-lg-2 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                            <h3 class="nav-item nav-link">DETAIL MATERI </h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>



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

