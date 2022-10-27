<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link category" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/mahasiswacontroller">Mahasiswa Controller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/dosencontroller">Dosen Controller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/matakuliah">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/matakuliahcontroller">MataKuliah Contoller</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <section class="konten">
    <div class="container">
        <div class="backgroundshape col-lg-8 m-auto">
            <div class="container judulhalaman m-auto">
                <h2 style="font-weight: bold">
                    @yield('judulhalaman')</h2>
            <div class="shapecard m-auto">
                <div class="container">
                    <div class="col-lg-8 m-auto">
                        @yield('daftar')
                    </div>
                    <div class="footer">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
