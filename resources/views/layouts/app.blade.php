<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations Immobilières</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
    <div class="min-h-screen">
        <header class="bg-primary text-white p-4 shadow">
            <h1 class="text-xl font-bold">Mon Agence Immo</h1>
        </header>

        <main class="p-6">
            @yield('content')
        </main>

        <footer class="bg-secondary text-white p-4 text-center">
            &copy; {{ date('Y') }} Mon Agence Immo. Tous droits réservés.
        </footer>
    </div>
</body>
</html>
