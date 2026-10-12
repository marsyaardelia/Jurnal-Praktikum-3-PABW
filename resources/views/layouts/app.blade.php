<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD Bandung</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #ffffff; }
        header { background-color: #0b3cff; color: white; padding: 15px 20px; text-align: center; }
        nav { background-color: #749ce0; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { max-width: 800px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        footer { background-color: #333; color: white; text-align: center; padding: 10px; margin-top: 20px; font-size: 14px; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; background-color: #fff; }
        .badge { padding: 4px 8px; color: white; border-radius: 4px; font-weight: bold; font-size: 12px; display: inline-block; }
        .bg-waspada { background-color: #ffc107; color: #212529; }
        .bg-siaga { background-color: #fd7e14; }
        .bg-awas { background-color: #dc3545; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn { background-color: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        .btn:hover { background-color: #218838; }
    </style>
</head>
<body>

<header>
    <h1>LaporBanjir - BPBD Kabupaten Bandung</h1>
</header>

<nav>
    <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
    <a href="{{ route('lapor.create') }}">Buat Laporan Baru</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 BPBD Kabupaten Bandung - Sistem Pelaporan Banjir Sederhana</p>
</footer>

</body>
</html>