<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
