<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="css/setUp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <?php
    // $today = date('Y-m-d'); //setup schedule
    // $maxDate = date('Y-m-d', strtotime('+1 months')); //setup schedule
    // $mindate = date('Y-m-d', strtotime('-600 months')); //Birthday
    // $maxDate2 = date('Y-m-d', strtotime('-192 months')); //Birthday
    ?>

    <title>Set Up Schedule</title>
</head>

<body>
    <div id="popupAlert">
        <span id="popupMessage"></span>
        <button onclick="closePopup()">&times;</button>
    </div>

    <div class="bodyground" data-aos="fade-up">
        <div class="header">
            <h3>DAFTAR KONSULTASI</h3>
        </div>
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <fieldset>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name"
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama Panggilan</label>
                        <input type="text" class="form-control" name="nickname" placeholder="Enter Nickname">
                    </div>
                </div>
                <br>
                <div class=row>
                    <div class="form-group col-md-6">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="birthday" min="{{ $mindate }}"
                            max="{{ $maxDate2 }}" required>
                    </div>
                </div>
                <br>
                <div class=row>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>No. Telpon</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your phone number"
                            required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="address" placeholder="Enter your address" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Tanggal Konsultasi</label>
                    <input type="text" id="day_consultation" name="day_consultation" class="form-control" required>
                </div>
                <br>
                <div class="d-flex">
                    <a class="btn custom-btn" href="{{ url('/') }}">Back to home</a>
                    <button type="submit" class="btn custom-btn ms-auto" value="setUp">Submit</button>
                </div>
            </fieldset>
        </form>
        {{-- <p>Already have schedule? <a href="////">HERE</a></p> --}}
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Pass PHP array to JS
        var scheduledDates = @json($scheduledDates);

        flatpickr("#day_consultation", {
            dateFormat: "Y-m-d",
            minDate: "{{ $today }}",
            maxDate: "{{ $maxDate }}",
            disable: scheduledDates
        });
    </script>

    @if (session('success') || session('error'))
        <script>
            window.onload = function() {
                @if (session('success'))
                    showPopup("{{ session('success') }}", true);
                @elseif (session('error'))
                    showPopup("{{ session('error') }}", false);
                @endif
            };
        </script>
    @endif

    <script>
        function showPopup(message, isSuccess) {
            var popup = document.getElementById('popupAlert');
            var msg = document.getElementById('popupMessage');
            msg.innerText = message;
            popup.style.background = isSuccess ? '#4caf50' : '#e74c3c';
            popup.style.display = 'block';
            setTimeout(closePopup, 5000); // Auto close after 5 seconds
        }

        function closePopup() {
            document.getElementById('popupAlert').style.display = 'none';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900, // durasi animasi (ms)
            once: true // animasi hanya sekali saat scroll
        });
    </script>

</body>

</html>
