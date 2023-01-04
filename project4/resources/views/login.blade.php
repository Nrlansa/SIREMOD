<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url("img/t.jpg");
    }
</style>

<body class="">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header " style="background-color: #94B49F">
                                    <h3 class="text-center font-weight-light my-4" style="color: white"> Admin Regulasi
                                        DPMPTSP
                                    </h3>
                                </div>
                                <div class="card-body" style="background-color:#CEE5D0 ">

                                    <form action="{{ url('loginregulasi') }}" method="post">
                                        @csrf

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" id="username" type="text"
                                                placeholder="username" />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control"name="password" id="password" type="password"
                                                placeholder="Password" />
                                            <label for="Password">Password</label>
                                        </div>

                                        <div
                                            class="d-flex align-items-center justify-content-between mt-4 mb-0 float-end">

                                            <button type="submit"
                                                class="btn btn-primary btn-block float-end">Masuk</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('/') }}/js/scripts.js"></script>
</body>

</html>
