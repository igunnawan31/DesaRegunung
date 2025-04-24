<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <title>Profil Desa</title>
</head>
<body class="overflow-x-hidden">
    <x-navbar></x-navbar>
    <div class="mt-44 mx-10 flex items-center justify-center">
        <div class="block max-w-3xl bg-white items-center text-center py-5 rounded-lg shadow-lg border-2 border-black">
            <div class="text-green-800 text-2xl font-bold">Visi</div>
            <div class="text-xl mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit earum rerum mollitia accusantium qui nesciunt tempore totam officiis nobis blanditiis.</div>
        </div>
    </div>
    <div class="mt-16 mx-10 flex items-center justify-center">
        <div class="block max-w-3xl bg-white items-center text-center py-5 rounded-lg shadow-lg border-2 border-black">
            <div class="text-green-800 text-2xl font-bold">Misi</div>
            <div class="text-xl mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit earum rerum mollitia accusantium qui nesciunt tempore totam officiis nobis blanditiis.</div>
        </div>
    </div>
</body>
</html>