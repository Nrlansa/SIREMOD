<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('/') }}/csshome/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/css/fontawesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Status</title>
</head>
<style>
    body {
        background-image: url('{{ asset('assets/images/p.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        backdrop-filter: blur(10px);
    }
</style>

<body>
    <div class="container"style="margin: auto;">
        <div class="row row-cols-me-5">
            <div class="col-md-8 mt-4 " style="margin: auto;">
                <a href="{{ url('/siremod') }}" class="btn btn-primary mb-2"><i
                        class="fas fa-arrow-left"></i>Kembali</a>
                <div class="card ">
                    <h5 class="card-header bg-primary text-white">File-file Peraturan</h5>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $upload->no_regulasi }} <br>
                            {{ $upload->kategori }} <br>
                            {{ $upload->tentang }}
                        </p>
                        <a href="{{ asset('storage/' . $upload->file) }}" class="btn btn-primary fload-end"> Lihat File
                            disini<i class="fas fa-download mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container " style="margin: auto;">
        <div class="row row-cols-me-5">
            @if ($upload->no_perubahan)
                <div class="col-md-8 mt-4 " style="margin: auto;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Status</h5>
                            <p class="card-text"> Mencabut: <br>
                                {{ $upload->no_perubahan }}
                                <br>
                                {{ $upload->perubahan }}
                            </p>
                            <a href="{{ asset('storage/' . $upload->file_perubahan) }}" class="btn btn-primary">Lihat
                                File
                                disini<i class="fas fa-download mx-1"></i></a>
            @endif
        </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>
