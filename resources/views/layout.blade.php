<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi akun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>

    <h1 class="text-center mt-3">CRUD Komik</h1>

    
    @if(Auth::check())
    <div class="text-center">
        <b>Halo {{ Auth::user()->name }}, Anda berhasil login</b>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>

        </form>
    </div>
    @endif

    <div class="mt-3 container">
        @yield('konten')
    </div>


</body>
</html>