<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

<h1 class="text-3xl text-center font-bold mt-10">Daftar Produk</h1>

<div class="flex justify-center gap-10 mt-10">

    <div class="bg-white p-5 rounded shadow text-center">
        <h2 class="text-xl font-semibold mb-3">Mentega</h2>
        <img src="{{ asset('images/mentega.jpg') }}" class="w-40 mx-auto">
    </div>

    <div class="bg-white p-5 rounded shadow text-center">
        <h2 class="text-xl font-semibold mb-3">Tepung</h2>
        <img src="{{ asset('images/tepung.jpg') }}" class="w-40 mx-auto">
    </div>

</div>

</body>
</html>