<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layouts/plain-layout.css') }}">
    <title>{{ $title }}</title>
    @stack('styles') <!-- Stack for adding styles at the root of the document. -->
</head>
<body>
    <main class="background-container">
        {{ $slot }}
    </main>
</body>
</html>
