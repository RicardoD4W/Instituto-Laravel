<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>@yield('Titulo')</title>
</head>
<body>
    @section('navbar')
        @show
        <div class="row">
            <div class="col-12 col-lg-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand ms-2" href="/">Paco IV Martos</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="/">Students</a>
                            <a class="nav-item nav-link" href="/createForm">Create student</a>
                            <a class="nav-item nav-link active" href="/subjects">Subjects</a>
                            <a class="nav-item nav-link" href="/CreateForm">Create subject</a>
                           {{-- <a class="nav-item nav-link" href="prueba">prueba</a>
                            <a class="nav-item nav-link disabled" href="verActor">ShowActor</a> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
 

    <div>
        @yield('content')
    </div>
</body>
</html>