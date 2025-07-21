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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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
            <a class="navbar-brand" href="#page-top">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead4">
        <div class="container">
            <div class="row align-items-left">
                <div class="masthead4-heading text-uppercase ">Selamat datang kembali admin!</div>
            </div>
        </div>
    </header>

    <!-- Dashboard-->
    <section class="page-section" id="datacust" data-aos="fade-up">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Admin Dashboard</h1>
            <div class="row align-items-center mb-3">
                <div class="col-md-6">
                    <h3 class="mb-0">Daftar Klien</h3>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <form action="{{ route('admin') }}" method="GET" class="d-flex justify-content-md-end">
                        <input type="text" name="q" class="form-control me-2"
                            placeholder="Cari nama/email/telepon..." value="{{ request('q') }}">
                        {{-- <button class="btn btn-primary" type="submit">Cari</button> --}}
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-striped align-middle table-responsive">
                <thead>
                    <tr style="text-align: center;">
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="customer-table">
                    @include('admins.partialTable', ['customers' => $customers])
                </tbody>
            </table>
            <div id="pagination-wrapper">
                {{ $customers->appends(request()->only('q'))->links('pagination::bootstrap-5') }}
            </div>
    </section>

    <!-- Modal Edit Customer -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="fullname" id="edit-fullname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Panggilan</label>
                            <input type="text" class="form-control" name="nickname" id="edit-nickname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="birthday" id="edit-birthday">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" name="phone" id="edit-phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="address" id="edit-address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Konsultasi</label>
                            <input type="text" id="edit-day_consultation" name="day_consultation"
                                class="form-control" required>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector('input[name="q"]').addEventListener('input', function() {
            let q = this.value;
            fetch(`{{ route('admin.search') }}?q=${encodeURIComponent(q)}`)
                .then(res => res.text())
                .then(html => {
                    document.getElementById('customer-table').innerHTML = html;
                });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        const scheduledDates = {!! json_encode($scheduledDates) !!};
        const minDate = "{{ $today }}";
        const maxDate = "{{ $maxDate }}";
    </script>

    <script>
        var flatpickrInstance = null;

        document.addEventListener('DOMContentLoaded', function() {
            var editModal = document.getElementById('editModal');
            editModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                if (!button) return;

                // Ambil data dari atribut tombol
                var id = button.getAttribute('data-id');
                var fullname = button.getAttribute('data-fullname');
                var nickname = button.getAttribute('data-nickname');
                var birthday = button.getAttribute('data-birthday');
                var email = button.getAttribute('data-email');
                var phone = button.getAttribute('data-phone');
                var address = button.getAttribute('data-address');
                var day_consultation = button.getAttribute('data-day_consultation');

                // Set nilai form
                document.getElementById('edit-fullname').value = fullname;
                document.getElementById('edit-nickname').value = nickname;
                document.getElementById('edit-birthday').value = birthday;
                document.getElementById('edit-email').value = email;
                document.getElementById('edit-phone').value = phone;
                document.getElementById('edit-address').value = address;
                document.getElementById('edit-day_consultation').value = day_consultation
                document.getElementById('editForm').action = '/customers/' + id;

                // Inisialisasi ulang flatpickr
                if (flatpickrInstance) {
                    flatpickrInstance.destroy();
                }

                flatpickrInstance = flatpickr("#edit-day_consultation", {
                    dateFormat: "Y-m-d",
                    defaultDate: day_consultation,
                    minDate: minDate,
                    maxDate: maxDate,
                    disable: scheduledDates
                });
            });
        });
    </script>

    <script>
        // Event handler pagination link
        $(document).on('click', '#pagination-wrapper a', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');
            fetchTableData(url);
        });

        function fetchTableData(url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "html",
                success: function(response) {
                    $('#customer-table').html($(response).find('#customer-table').html());
                    $('#pagination-wrapper').html($(response).find('#pagination-wrapper').html());
                },
                error: function(xhr) {
                    alert('Gagal memuat data.');
                }
            });
        }
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
