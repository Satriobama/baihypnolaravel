<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

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

        #calendar,
        .fc {
            background: #fff;
            color: #212529;
            border-radius: 12px;
            padding: 10px;
            max-width: 900px;
            margin: 0 auto;
            font-family: 'Roboto Slab' !important;
        }

        .fc .fc-toolbar-title,
        .fc .fc-button,
        .fc .fc-col-header-cell-cushion,
        .fc .fc-daygrid-day-number {
            color: #212529 !important;
        }

        .fc .fc-button-primary {
            background: #222 !important;
            border-color: #333 !important;
            color: #fff !important;
        }

        .fc .fc-button-primary:not(:disabled):hover {
            background: #333 !important;
            border-color: #444 !important;
        }

        .fc .fc-daygrid-day {
            background: #fff;
            border-color: #212529;
        }

        .fc .fc-day-today {
            background: #f3f3f3 !important;
        }

        /* Event abu-abu untuk booked */
        .fc .fc-event.booked-event {
            background: rgb(81, 156, 255) !important;
            color: #222 !important;
            border: none;
        }
    </style>
</head>

<body id="page-top" class="page-fade">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#schedule">Jadwal</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profil Terapis</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container" data-aos="fade-up">
            <div class="masthead-subheading">Selamat Datang di Bai Hypnotherapy</div>
            <div class="masthead-heading text-uppercase">Nice To Meet You!</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#about" data-aos="fade-up">Lihat Detail...</a>
        </div>
    </header>

    <!-- About-->
    <section class="page-section" id="about" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="assets/img/about/about1.jpeg" alt="Proses Hipnoterapi" />
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <br>
                        <h2 class="display-5 fw-bold">Tentang Hipnoterapi</h2>
                        <p class="lead" style="text-align: justify; font-size: 1rem;">Apa itu Hipnoterapi?<br>
                            Hipnoterapi adalah terapi yang menggunakan hipnosis untuk membantu seseorang memasuki alam
                            bawah sadar dan memberikan sugesti positif yang bertujuan untuk mengubah pikiran, perasaan,
                            dan perilaku yang tidak diinginkan. </p>
                        <p class="lead mb-0" style="text-align: justify; font-size: 1rem;">Konsultasi hipnoterapi adalah
                            sesi konsultasi
                            dengan seorang ahli
                            hipnoterapi untuk membahas masalah Anda dan menentukan apakah hipnoterapi cocok sebagai
                            metode pengobatan. Hipnoterapi dapat membantu mengatasi berbagai masalah psikologis seperti
                            kecemasan, fobia, masalah tidur, dan lain-lain. </p>
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn btn-primary btn-xl text-uppercase" href="#services"> Lihat Layanan...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section bg-light" id="services" data-aos="fade-up">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan Konseling & Hypnotherapy</h2>
                <h3 class="section-subheading text-muted">Hipnoterapi membantu mengatasi berbagai keluhan emosi dan
                    pikiran, serta gangguan fisik akibat psikosomatis.</h3>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-2 mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Layanan Konseling</h4>
                        <ul class="list-unstyled mb-0" style="font-size: 1rem;">
                            <li>✔ Konseling Individu</li>
                            <li>✔ Konseling Keluarga</li>
                            <li>✔ Konseling Lansia</li>
                            <li>✔ Konseling Belajar</li>
                            <li>✔ Konseling Karir</li>
                            <li>✔ Parenting Lembaga</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Layanan Hypnotherapy</h4>
                        <ul class="list-unstyled mb-0" style="font-size: 1rem;">
                            <li>✔ Kecemasan</li>
                            <li>✔ Stress</li>
                            <li>✔ Kesedihan Mendalam</li>
                            <li>✔ Traumatik Masa Lalu</li>
                            <li>✔ Phobia</li>
                            <li>✔ Frustasi / Depresi</li>
                            <li>✔ Motivasi Hidup / Motivasi Belajar</li>
                            <li>✔ Baby Blues / Sindrome Pasca Melahirkan</li>
                            <li>✔ Insomnia</li>
                            <li>✔ Pelangsingan</li>
                            <li>✔ Kecanduan Rokok</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="page-section" id="schedule" data-aos="fade-up">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Mulai Berkonsultasi</h3>
                <div>
                    <div>
                        <!-- Kalender Booking -->
                        <div id="calendar"></div>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{ route('setUpSchedule') }}" class="btn btn-primary btn-xl text-uppercase"
                            id="setUp">Set Up Your Consultation</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">Setelah mengatur jadwal akan di hubungi untuk konfirmasi.</p>
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
                    <a class="" href="#" aria-label="instagram"><i class=""></i></a>
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

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var bookedDates = @json($bookedDates ?? []);
            var events = bookedDates.map(function(date) {
                return {
                    title: 'Booked',
                    start: date,
                    allDay: true,
                    className: 'booked-event' // gunakan class untuk event abu-abu
                };
            });

            var calendarEl = document.getElementById('calendar');
            if (calendarEl) {
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: events,
                    height: 550,
                    buttonText: {
                        today: 'Today'
                    }
                });
                calendar.render();
            }
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
