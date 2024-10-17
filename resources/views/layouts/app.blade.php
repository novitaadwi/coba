<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-8">
        @include('partials.navbar') <!-- Menggunakan include untuk navbar -->
        <div class="content">
            @yield('content') <!-- Yield untuk konten halaman -->
        </div>
    </div>
</body>
</html>
