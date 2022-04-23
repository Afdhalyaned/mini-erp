<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0"
        />
        <title>Dreamchat - Dashboard</title>

        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="assets/img/favicon.png"
        />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <link rel="stylesheet" href="assets/css/feathericon.min.css" />

        <link rel="stylesheet" href="assets/plugins/morris/morris.css" />

        <link rel="stylesheet" href="assets/css/style.css" />

        @yield('plugin')
    </head>
    <body>
        {{-- wrapper --}}
        <div class="main-wrapper">
            {{-- header --}}
            @include('partials.header')
            {{-- end header --}}

            {{-- sidebar --}}
            @include('partials.sidebar')
            {{-- end sidebar --}}

            {{-- page wrapper --}}
            <div class="page-wrapper">
                <div class="content container-fluid">
                    @yield('content')
                </div>
            </div>
            {{-- end page wrapper --}}

        </div>
        {{-- end wrapper --}}

        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/datatables.min.js"></script>

        <script src="assets/js/script.js"></script>

        @yield('script')

    </body>
</html>
