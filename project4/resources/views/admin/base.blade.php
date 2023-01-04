<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin|REGULASI</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('/') }}/csshome/styles.css" rel="stylesheet" />
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/') }}/css/fontawesome.min.css">

</head>

<body class="sb-nav-fixed">
    @include('admin.section.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('admin.section.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            @include('admin.utils.notif')
                        </div>
                    </div>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
            @include('admin.section.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ url('/') }}/jshome/datatables-simple-demo.js"></script>
    <script src="{{ url('/') }}/js/scripts.js"></script>
</body>

</html>
