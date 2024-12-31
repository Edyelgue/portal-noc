<!DOCTYPE html>
<html lang="en" data-theme="light" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboards NOC</title>
</head>
<body class="h-full">
    {{ $slot }}
</body>
</html>