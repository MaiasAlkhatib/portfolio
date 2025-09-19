<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ViewData["Title"]</title>
    <link rel="stylesheet" href="~/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/KorteBroek/Index">الرئيسية</a></li>
                <li><a href="/KorteBroek/Weer">الطقس</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @RenderBody()
    </main>
</body>
</html>
