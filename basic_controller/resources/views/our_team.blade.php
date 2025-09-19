<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ons team</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white shadow-lg rounded-2xl w-full max-w-4xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-purple-600">Ons team</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Team member 1 -->
            <div class="bg-gray-50 p-4 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-2">Anna Janssen</h2>
                <p class="text-gray-600">CEO & Oprichter</p>
            </div>

            <!-- Team member 2 -->
            <div class="bg-gray-50 p-4 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-2">Mark de Vries</h2>
                <p class="text-gray-600">Hoofd Ontwikkeling</p>
            </div>

            <!-- Team member 3 -->
            <div class="bg-gray-50 p-4 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-2">Sophie Bakker</h2>
                <p class="text-gray-600">Marketing Specialist</p>
            </div>
        </div>

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
