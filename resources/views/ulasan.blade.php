<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="css/setUp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <title>Review Ulasan</title>
</head>

<body>
    <div id="popupAlert">
        <span id="popupMessage"></span>
        <button onclick="closePopup()">&times;</button>
    </div>

    <div class="bodyground" data-aos="fade-up">
        <div class="header">
            <h3>BERIKAN ULASAN</h3>
        </div>
        <form action="{{ route('review.store') }}" method="POST">
            @csrf
            <fieldset>
                <br>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Rating</label>
                        <select class="form-control" name="rating" required>
                            <option value="">Pilih Rating</option>
                            <option value="5">⭐⭐⭐⭐⭐ Sangat Memuaskan</option>
                            <option value="4">⭐⭐⭐⭐ Memuaskan</option>
                            <option value="3">⭐⭐⭐ Cukup</option>
                            <option value="2">⭐⭐ Kurang Memuaskan</option>
                            <option value="1">⭐ Tidak Memuaskan</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Ulasan</label>
                    <textarea class="form-control" name="reviews" placeholder="Tulis ulasan anda..."
                        required></textarea>
                </div>
                <br>
                <div class="d-flex">
                    <a class="btn custom-btn" href="{{ url('/') }}">Back to home</a>
                    <button type="submit" class="btn custom-btn ms-auto" value="submitReview">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>

    <script>
        function showPopup(message, isSuccess) {
            var popup = document.getElementById('popupAlert');
            var msg = document.getElementById('popupMessage');
            msg.innerText = message;
            popup.style.background = isSuccess ? '#4caf50' : '#e74c3c';
            popup.style.display = 'block';
            setTimeout(closePopup, 5000);
        }

        function closePopup() {
            document.getElementById('popupAlert').style.display = 'none';
        }
    </script>

    @if (session('success') || session('error'))
        <script>
            window.onload = function () {
                @if (session('success'))
                    showPopup("{{ session('success') }}", true);
                @elseif (session('error'))
                    showPopup("{{ session('error') }}", false);
                @endif
                };
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            once: true
        });
    </script>

</body>

</html>