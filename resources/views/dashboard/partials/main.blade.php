<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">


    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>SPK Karyawan Tetap | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/login/logo/logo2.png" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link id="pagestyle" href="/dashboard/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <link href="/dashboard/css/styles.css" rel="stylesheet" />
    <link href="/dashboard/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="logoutLabel">Logout</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin keluar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <form id="logoutForm" action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-info">Ya, Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.partials.sidebar')

        <div class="main">

            @include('dashboard.partials.navbar')

            <h1 class="h1 mx-3 border-bottom"><strong>@yield('title')</strong></h1>

            {{-- <main class="content"> --}}
                <div class="m-3">

                    @yield('content')

                </div>
                {{--
            </main> --}}

            @include('dashboard.partials.footer')

        </div>
    </div>

    <script src="/dashboard/js/app.js"></script>

</body>

</html>
