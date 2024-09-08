<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="bg-white dark:bg-gray-700 text-gray-50 dark:text-gray-200">
        @inertia
    </body>
</html>
