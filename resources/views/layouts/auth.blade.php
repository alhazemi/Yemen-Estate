{{-- resources/views/layouts/auth.blade.php --}}
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet"/>

    <style>
        body {
            background: linear-gradient(rgba(255,255,255,0.85),rgba(83,90,101,0.85));
            min-height: 100vh;
            display: flex;
            font-family: 'Cairo', sans-serif;
            justify-content: center;
            align-items: center;
        }
        .card-auth {
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.3);
            padding: 2rem;
            width: 100%;
            max-width: 360px;
            min-height: 400px;
        }
        h3 { color: #535a65; text-align: center; margin-bottom: 1.5rem; font-weight: 600; }
        .input-group-custom { position: relative; margin-bottom: 1.3rem; }
        .input-group-custom label { display: block; font-weight: 600; margin-bottom: 0.3rem; color: #535a65; }
        .input-group-custom input { padding-right: 2.5rem; }
        .input-group-custom .fa { position: absolute; right: 10px; top: 42px; color: #535a65; font-size: 1.1rem; }
        .form-control:focus { border-color: #ffb300; box-shadow: 0 0 0 0.2rem rgba(255,179,0,0.25); }
        .btn-create, .btn-login { background-color: #ffb300; color: #535a65; transition: all 0.2s ease; }
        .btn-create:active, .btn-create:focus, .btn-login:active, .btn-login:focus { background: linear-gradient(45deg, #ffb300, #ffc94d); color: #fff; transform: scale(0.97); box-shadow: 0 0.3rem 0.6rem rgba(0,0,0,0.2); }
        a { color: #ffb300; text-decoration: none; font-weight: 600; }
        a:hover { text-decoration: underline; }
        .separator { width: 100%; display: flex; align-items: center; margin: 1rem 0; }
        .separator hr { border: none; height: 1px; background-color: #535a65; margin: 0; flex-grow: 1; }
        .separator span { font-weight: 600; color: #535a65; white-space: nowrap; margin: 0 0.5rem; }
        .btn-google { background-color: #fff; color: #444; border: 1.5px solid #ddd; font-weight: 600; font-size: small; transition: background-color 0.3s, box-shadow 0.3s; box-shadow: 0 2px 5px rgb(0 0 0 / 0.1); }
        .btn-google:hover { background-color: #f7f7f7; box-shadow: 0 4px 12px rgb(0 0 0 / 0.15); color: #000; border-color: #ccc; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card-auth">
        @yield('content')
    </div>
</body>
</html>
