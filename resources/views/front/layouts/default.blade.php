<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApplyCan | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="tw-bg-slate-50 tw-font-sans">
    <div class="tw-flex tw-min-h-screen">
        @include('front.partials.sidebar')
        <main class="tw-flex-1 tw-flex tw-flex-col">
            @include('front.partials.header')
            <div class="tw-p-8">
                @yield('content')
            </div>
            @include('front.partials.footer')
        </main>
    </div>
</body>

</html>
