<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @isset($description)
        <meta name="description" content="{{ $description }}">
    @endisset
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('icons/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('icons/apple-touch-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-primary bg-no-repeat bg-linear-(--color-primary-gr) text-white">
<div class="w-full overflow-hidden">
    @include('partials.header')

    <main>
        {!! $slot !!}
    </main>

    @include('partials.footer')
</div>

</body>
</html>
