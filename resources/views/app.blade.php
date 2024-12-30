<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @routes
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @inertiaHead
</head>

<body>
    @inertia

</body>

</html>
