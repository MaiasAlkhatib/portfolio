<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tailwind</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-8 bg-white shadow rounded text-center">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">Tailwind werkt!</h1>
        <p class="text-gray-700">Als je deze tekst mooi gestyled ziet, dan is Tailwind correct ingesteld 🎉</p>
    </div>
</body>
</html>
