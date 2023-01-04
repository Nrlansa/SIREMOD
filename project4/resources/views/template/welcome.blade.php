<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIREMOD</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ url('/') }}/csshome/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/css/fontawesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('template.section.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        @include('admin.utils.notif')
                    </div>
                </div>
                <div class="container overflow-hidden mt-2">
                    <div class="text-center">
                        <img src="img/DINAS.png" class="rounded" alt="..." width="550px" height="100px">
                    </div>
                </div>
                <div class="mt-3">
                    <h4 class="text-white" style="text-align: center">SISTEM INFORMASI REGULASI PENANAMAN MODAL
                        (SIREMOD)</h4>

                </div>
                <div class=" mt-4 " style="margin: auto; width: 60%;">
                    <div class="container col-lg-12">
                        <div class="form-group d-inline-flex col-lg-12">
                            <label for="pencarian"></label>
                            <input type="search" class="form-control" id="search" name="search"
                                placeholder="Cari disini....">
                            {{-- <button class="btn btn-primary"><i class="fa fa-search"></i></button> --}}
                        </div>
                        <div id="read" class="mt-2"></div>
                    </div>
                </div>
            </div>


            {{-- @include('template.Section.footer') --}}
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/Javascript">
        $('#search').on('keyup', function() {
                                            $value = $(this).val();

                                            $.ajax({

                                                type: 'get',
                                                url: '{{ URL::to('search') }}',
                                                data: {
                                                    'search': $value
                                                },
                                                success: function(data) {
                                                    $("#read").html(data);
                                                }
                                            });

                                        })
                                    </script>

    // {{-- <script>
    //     $(document).ready(function(query = '') {
    //         readData()
    //         $("#input").keyup(function() {
    //             var strcari = $("#input").val();
    //             if (strcari != "") {
    //                 $("#read").html(
    //                     '<center><p class="text-white" style="font-size:16px">Harap Tunggu...</p></center>'
    //                 );
    //                 $.ajax({
    //                     type: "get",
    //                     url: "{{ url('ajax') }}",
    //                     data: "tentang=" + strcari,
    //                     success: function(data) {
    //                         $("#read").html(data);
    //                     }
    //                 });
    //             } else {
    //                 readData()
    //             }

    //         });
    //     });

    //     function readData() {
    //         $.get("{{ url('read') }}", {}, function(data, status) {
    //             $("#read").html(data);
    //         });
    //     }
    // </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous">
        < /scrip> <
        script src = "{{ url('/') }}/jshome/datatables-simple-demo.js" >
    </script>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "arial", heletica, sans-serif;
        font-size: 12px;
        background: #2980b9 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
        -webkit-animation: 10s linear 0s normal none infinite animate;
        -moz-animation: 10s linear 0s normal none infinite animate;
        -ms-animation: 10s linear 0s normal none infinite animate;
        -o-animation: 10s linear 0s normal none infinite animate;
        animation: 10s linear 0s normal none infinite animate;

    }

    @-webkit-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-moz-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-ms-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-o-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }
</style>

</html>
