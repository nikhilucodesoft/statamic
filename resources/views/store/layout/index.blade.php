<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('title', 'Diamond Blog Pages')
    </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white text-lg font-mono">
    <div class="container max-w-lg mx-auto py-8">
        @yield('content')
    </div>
</body>

</html>
