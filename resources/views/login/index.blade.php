{{--
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Karyawan Tetap | Login</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body
    style="background-image: url('/assets/img/bg-mobile-fallback.jpg'); background-repeat: no-repeat; background-size: cover;">
    <section class="vh-100" style="background-color: rgba(0, 0, 0, 0.637);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block"
                                style="background-color: #213555; border-radius: 15px 0 0 15px;">
                                <img src="/assets/img/logo.png" alt="Login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <h1 class="fw-bold mb-3 pb-3">PT. Indah Persada Tech</h1>

                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Email address" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password"
                                                    id="passwordInput" placeholder="Password" required>
                                                <span class="input-group-text" id="togglePassword">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <a href="/" class="btn btn-dark btn-block" type="button">Batal</a>
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var passwordInput = document.getElementById("passwordInput");
        var togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
            } else {
                passwordInput.type = "password";
                togglePassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html> --}}

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SPK Karyawan Tetap | Login</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="/login/logo/icon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/login/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/login/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/login/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/login/css/demo.css" />
    <link rel="stylesheet" href="/login/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/login/vendor/css/pages/page-auth.css" />
    <script src="/login/vendor/js/helpers.js"></script>
    <script src="/login/js/config.js"></script>

    <style>
        body {
            background:
                linear-gradient(rgba(255, 255, 255, 0.384), rgba(53, 196, 236, 0.767), rgba(255, 255, 255, 0.384)),
                /* linear-gradient(rgba(53, 196, 236, 0.5), rgba(255, 255, 255, 0.384)), */
                url('/login/logo/background.png') no-repeat;
        }
    </style>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center" style="margin-bottom: -5px">
                            <a href="/login" class="app-brand-link">
                                <span class="app-brand-logo">
                                    <img src="/login/logo/logo2.png" width="200px">
                                </span>
                            </a>
                        </div>
                        <p class="mb-4 text-center">SPK AHP Karyawan Tetap</p>

                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ old('email') }}" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 d-flex">
                                <button class="btn btn-primary flex-fill" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/login/vendor/libs/jquery/jquery.js"></script>
    <script src="/login/vendor/libs/popper/popper.js"></script>
    <script src="/login/vendor/js/bootstrap.js"></script>
    <script src="/login/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/login/vendor/js/menu.js"></script>
    <script src="/login/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
