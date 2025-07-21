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
            <a class="navbar-brand" href="#page-top">Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sertifikat">Sertifikat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead2">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="masthead2-subheading">Selamat Datang di Profil saya</div>
                    <div class="masthead2-heading text-uppercase">Nice To Know You!</div>
                    <a class="btn btn-primary btn-xl" href="#profil" data-aos="fade-up">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
                <div class="col-md-5">
                    <br>
                    <img src="assets/img/portofolio/profile3.jpeg" alt="Profil Terapis" class="img-fluid rounded-3"
                        style="width:350px; height:350px; object-fit:cover; object-position:center; border: 5px solid #ffffffff;">
                </div>
            </div>
        </div>
    </header>

    <!-- profil-->
    <section class="page-section" id="profil" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <img class="img-fluid rounded-3" src="assets/img/portofolio/profile2.jpeg"
                            style="width:450px; height:500px; object-fit:cover; object-position:center;"
                            alt="Proses Hipnoterapi" />
                        <br>
                        <p
                            style="font-family: 'Roboto Slab', serif; font-size: 1.8rem; font-weight: 600; color: #3b1e54 ;">
                            RR. Baiduri Nilawati, S.Pd., M.Si.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5">
                        <br>
                        <h2 class="display-5 fw-bold">Siapa saya?</h2>
                        <p class="lead" style="text-align: justify; font-size: 1rem;">
                            Saat ini saya berprofesi sebagai Guru bimbingan konseling di SMA Negeri 39 Jakarta, memilik
                            latar belakang pendidikan S1 Bimbingan Konseling dan S1 Ilmu Pengetahuan Sosial.
                            Saat ini saya telah meraih gelar Magister Science of Psikologi dari Universitas
                            Persada Indonesia YAI. Selain itu saya telah memiliki memiliki sertifikasi resmi sebagai
                            Hipnoterapis level Fundamental, Advance, dan Professional.
                            Saya sudah membuka praktek Hipnoterapi sejak November 2024 dan telah membantu banyak klien
                            dalam membantu permasalahan yang mereka hadapi terkait dengan masalah-masalah kesehatan
                            mental seperti kecemasan, depresi, trauma, dan masalah lainnya.
                            Saya juga merupakan narasumber parenting dalam beberapa kegiatan di lembaga pendidikan anak
                            usia dini dan di beberapa seminar nasional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Galeri Sertifikat -->
    <section class="page-section bg-light" id="sertifikat" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Sertifikat</h2>
                <h3 class="section-subheading text-muted">Kumpulan sertifikat</h3>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($images as $img)
                    <div class="col-6 col-md-4 col-lg-3 d-flex">
                        <div class="card h-100 shadow-sm w-100">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img="{{ asset('assets/img/portofolio/' . $img) }}">
                                <img src="{{ asset('assets/img/portofolio/' . $img) }}"
                                    class="card-img-top img-fluid rounded" alt="Galeri"
                                    style="height: 240px; object-fit: cover; object-position: center;">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 text-center">
                    <img id="modalImage" src="" alt="Preview" class="img-fluid rounded shadow"
                        style="max-height:80vh;">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; BaiHypno 2025</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="" href="#!" aria-label="Instagram"><i class=""></i></a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function(event) {
                var trigger = event.relatedTarget;
                var imgSrc = trigger.getAttribute('data-img');
                var modalImg = document.getElementById('modalImage');
                modalImg.src = imgSrc;
            });
        });
    </script>

</body>

</html>
