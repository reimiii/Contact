<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
          rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="">
            <a href="{{ route('contact') }}">All Contact</a>
            <br>
            <br>
            <a href="{{ route('contact.create') }}">Add Contact</a>
            <br>
            <br>
{{--            <a href="{{ route('contact.show', 12) }}">Show Contact</a>--}}
        </div>

    </div>
</div>
</body>
</html>
