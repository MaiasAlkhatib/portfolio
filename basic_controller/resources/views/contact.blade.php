<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white shadow-lg rounded-2xl w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-blue-600">Contactpagina</h1>

        <p class="text-gray-700 mb-4">📍 Adres: Voorbeeldstraat 123, 1000 AB Amsterdam</p>
        <p class="text-gray-700 mb-4">📞 Telefoon: +31 6 12345678</p>
        <p class="text-gray-700 mb-4">📧 Email: info@voorbeeldbedrijf.nl</p>

        <!-- Terugknop -->
        <div class="mt-6 text-center">
            <a href="{{ route('Pages.home') }}"
               class="px-6 py-2 bg-gray-500 text-white rounded-xl shadow hover:bg-gray-600 transition">
               ← Terug naar Home
            </a>
        </div>
    </div>
</body>
</html>
