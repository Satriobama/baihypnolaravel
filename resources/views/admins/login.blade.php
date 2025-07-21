<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="css/loginUsers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <title>Welcome Users</title>

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

<body class="page-fade">
    {{-- message --}}


    {{-- login body --}}
    <div class="bodyground" data-aos="fade-up">
        <div class="header">
            <h3>LOG IN TO ADMIN</h3>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="assets/img/bg/login-image.jpg" style="width: 100%" alt="image">
            </div>
            <div class="col-sm-6">
                <form aaction="{{ route('login-user') }}" method="POST">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                        <p></p>
                        <div class="d-flex">
                            <a class="btn custom-btn" href="{{ url('/') }}">Back to home</a>
                            <button type="submit" class="btn custom-btn ms-auto" value="login">Login</button>
                        </div>
                    </fieldset>
                </form>
                <br>
                {{-- <p>Not have an account? Sign Up <a href="////////">HERE</a></p> --}}
            </div>
        </div>
    </div>

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
