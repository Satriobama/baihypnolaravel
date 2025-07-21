<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Hypnotherapy</title>

    <!-- Favicon-->
    {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />   --}}
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/home.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet" />

    <style>
        .page-fade {
            opacity: 0;
            transition: opacity 0.6s;
        }

        .page-fade.page-fade-in {
            opacity: 1;
        }
    </style>

</head>

<body id="page-top" class="page-fade">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Kontak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profil Terapis</a></li>
                    <li class="nav-item"><a class="nav-link" href="#page-top">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#maps">Maps</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead3">
        <div class="container" data-aos="fade-up">
            <div class="masthead3-heading text-uppercase">Jika terdapat pertanyaan <br> atau <br> ingin mengubah jadwal
                silahkan hubungi langsung</div>
            <a class="btn btn-success btn-xl text-uppercase d-inline-flex align-items-center gap-2"
                href="{{ $waUrl }}" target="_blank" data-aos="fade-up">
                <img src="{{ asset('assets/img/logos/whatsapp.svg') }}" alt="WhatsApp"
                    style="width: 28px; height: 28px; filter: brightness(0) invert(1);" />
                Hubungi Langsung
            </a>
        </div>
    </header>

    <!-- Section Maps -->
    <section class="page-section" id="maps" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-heading text-uppercase">Lokasi Praktik</h2>
                <h3 class="section-subheading text-muted">Silakan kunjungi lokasi kami di bawah ini</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="ratio ratio-16x9 rounded shadow">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.826423026001!2d106.90451401182645!3d-6.365209651268986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed29d709f98d%3A0x8972171bd916fe26!2sPAUD%20UMMI%20NAHWIYAH!5e0!3m2!1sen!2sid!4v1752731001644!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; BaiHypno 2025</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="" href="#!" aria-label="Twitter"><i class=""></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/home.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900, // durasi animasi (ms)
            once: true // animasi hanya sekali saat scroll
        });
    </script>

    <script>
        // Animasi masuk halaman
        document.body.classList.add('page-fade-in');

        // Animasi keluar halaman saat klik link
        document.querySelectorAll('a[href]').forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Hanya animasi untuk link internal (bukan target _blank atau file download)
                if (
                    link.hostname === window.location.hostname &&
                    !link.hasAttribute('target') &&
                    link.getAttribute('href').charAt(0) !== '#'
                ) {
                    e.preventDefault();
                    document.body.classList.remove('page-fade-in');
                    setTimeout(function() {
                        window.location = link.href;
                    }, 400); // waktu sama dengan transition
                }
            });
        });
    </script>

</body>

</html>
