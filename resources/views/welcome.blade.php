<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-r from-green-200 via-green-300 to-blue-500">
<div class="px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-center">
        <livewire:search-flight/>
    </div>
</div>
@livewireScripts
</body>
</html>
