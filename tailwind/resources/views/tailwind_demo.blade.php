<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Rijksoverheid Demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-[#003366] text-white">
        <div class="container mx-auto flex justify-between items-center p-6">
            <h1 class="text-2xl font-bold">Rijksoverheid Demo</h1>
            <nav>
                <ul class="flex space-x-6 text-sm font-medium">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Over</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#0055a5] text-white p-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Welkom op onze demo pagina</h2>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Deze sectie kan een korte introductie of slogan bevatten.</p>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto p-6 space-y-6">
        <!-- Grid Section -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow">
                <h3 class="font-semibold text-xl mb-2 text-[#003366]">Sectie 1</h3>
                <p>Dit is een voorbeeldtekst voor sectie 1.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow">
                <h3 class="font-semibold text-xl mb-2 text-[#003366]">Sectie 2</h3>
                <p>Dit is een voorbeeldtekst voor sectie 2.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow">
                <h3 class="font-semibold text-xl mb-2 text-[#003366]">Sectie 3</h3>
                <p>Dit is een voorbeeldtekst voor sectie 3.</p>
            </div>
        </section>

        <!-- Additional Section -->
        <section class="bg-white p-6 rounded shadow hover:shadow-lg transition-shadow">
            <h3 class="text-2xl font-semibold mb-2 text-[#003366]">Extra Informatie</h3>
            <p>Hier kun je meer inhoud toevoegen, zoals nieuws, links of updates.</p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#003366] text-white p-6 mt-6 text-center text-sm">
        &copy; 2025 Rijksoverheid Demo
    </footer>

</body>
</html>
