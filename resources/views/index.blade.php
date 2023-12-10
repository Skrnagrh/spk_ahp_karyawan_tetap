{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SPK Karyawan Tetap</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body
    style="background-image: url('/assets/img/bg-mobile-fallback.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <img src="/assets/img/logo.png" data-aos="fade-down" data-aos-duration="3000"
                    alt="Logo PT. Indah Persada Tech" width="200" height="auto">
                <h2 class="fst-italic lh-1 mb-4">PT. Indah Persada Tech</h2>
                <p class="mb-3">Sistem Pendukung Keputusan pemilihan Karyawan Tetap pada PT. Indah Persada Tech
                    menggunakan Metode Analytical Hierarchy Process (AHP)</p>
                <div class="row input-group-newsletter">
                    <div class="col-auto" data-aos="fade-up" data-aos-duration="3000">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
                @if(auth()->check())
                <div class="row input-group-newsletter">
                    <div class="col-auto" data-aos="fade-up" data-aos-duration="3000">
                        <a href="/dashboard" class="btn btn-primary">Dashboard</a>
                    </div>
                </div>
                @else
                <div class="row input-group-newsletter">
                    <div class="col-auto" data-aos="fade-up" data-aos-duration="3000">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html> --}}
<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SPK Karyawan Tetap </title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="/login/logo/logo2.png" />
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
    <script src="/login/vendor/js/helpers.js"></script>
    <script src="/login/js/config.js"></script>
    <style>
        @media (max-width: 768px) {
            .brand-name {
                display: none;
            }
        }

        body {
            background:
                linear-gradient(rgb(255, 255, 255), rgba(49, 154, 253, 0.884), rgba(255, 255, 255, 0.884)),
                url('/login/logo/background.png') no-repeat;
        }
    </style>
</head>

<body>

    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fs-5" id="exampleModalLabel">Logout</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Apakah Anda yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <nav class="main-header navbar navbar-expand navbar-detached d-flex justify-content-between bg-navbar-theme px-3">
        <div class="container">
            <a class="navbar-brand text-primary" href="/">
                <img src="/login/logo/logo2.png" alt="Logo" class="img-fluid" style="max-width: 50px;">
                <span class="fs-3 mt-3" style="color: #21366F">SPK AHP</span>
            </a>

            <div class="navbar-nav-right d-flex align-items-end navbar-expand-xl" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    @auth
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <span class="brand-name text-capitalize" style='color: #21366F'>{{ Auth()->user()->name }}</span>
                            <i class='bx bxs-user-circle' style='font-size: 24px; color: #21366F'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="bx bx-home me-2"></i>
                                    <span class="align-middle" style='color: #21366F'>Dashoard</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle" style='color: #21366F'>Log Out</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    @endauth

                    @guest
                    <a class="navbar-brand" href="/login" style="color: #21366F">Login</a>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>

    <div class="container mt-5">
        <div class="p-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <img src="/login/logo/logo2.png" class="img-fluid" style="max-width: 250px;">
                    <h2 class="text-capitalize" style="color: #00154e">
                        Sistem Pendukung Keputusan (SPK)
                    </h2>
                    <h2 class="text-capitalize" style="color: #00154e">Pemilihan Karyawan Tetap
                    </h2>
                    <h3 class="" style="color: #00154e">
                        Menggunakan Metode AHP
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center fixed-bottom bg-white mt-3" style="color: #21366F">
        <div class="footer-below">
            <div class="container">
                <div class="row p-3">
                    <div class="col-lg-6">
                        <span>Copyright &copy; SPK AHP
                            <?= date('Y') ?>
                        </span>
                    </div>
                    <div class="col-lg-6">
                        <span class="float-lg-right">Karyawan Tetap</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="/login/vendor/libs/jquery/jquery.js"></script>
    <script src="/login/vendor/libs/popper/popper.js"></script>
    <script src="/login/vendor/js/bootstrap.js"></script>
    <script src="/login/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/login/vendor/js/menu.js"></script>
    <script src="/login/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
