<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white shadow-lg rounded-2xl w-full max-w-3xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-green-600">Over ons</h1>

        <p class="text-gray-700 mb-4 leading-relaxed">
            Wij zijn een fictief bedrijf met een duidelijke missie en visie. 
            Onze missie is om innovatieve oplossingen te bieden die het dagelijks leven verbeteren. 
            Onze visie is om wereldwijd een betrouwbare partner te zijn die duurzaamheid en kwaliteit vooropstelt.
        </p>

        <p class="text-gray-700 mb-4 leading-relaxed">
            Met een team van gepassioneerde professionals streven wij ernaar om onze klanten altijd centraal te stellen 
            en hen te voorzien van de beste service.
        </p>

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
