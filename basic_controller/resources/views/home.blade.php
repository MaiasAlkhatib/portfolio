<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white shadow-lg rounded-2xl w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-center mb-8">Welkom bij ons bedrijf</h1>

        <!-- Knoppen -->
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('Pages.contact') }}"
               class="px-6 py-3 text-center bg-blue-500 text-white rounded-xl shadow hover:bg-blue-600 transition">
               Contact
            </a>
            <a href="{{ route('Pages.aboutUs') }}"
               class="px-6 py-3 text-center bg-green-500 text-white rounded-xl shadow hover:bg-green-600 transition">
               Over ons
            </a>
            <a href="{{ route('Pages.ourTeam') }}"
               class="px-6 py-3 text-center bg-purple-500 text-white rounded-xl shadow hover:bg-purple-600 transition">
               Ons team
            </a>
        </div>
    </div>
</body>
</html>
