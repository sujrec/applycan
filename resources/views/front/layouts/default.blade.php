<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApplyCan | @yield('title')</title>

    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="{ sidebarOpen: false }"
    class="tw:bg-slate-50 dark:tw:bg-slate-950 tw:text-slate-900 dark:tw:text-slate-100 tw:transition-colors tw:duration-300 lg:tw:pl-64">

    {{-- Mobile Overlay: Only visible on small/medium when sidebar is open --}}
    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="tw:fixed tw:inset-0 tw:z-40 tw:bg-black/60 lg:tw:hidden"
        x-transition:enter="tw:transition tw:ease-out tw:duration-300" x-transition:enter-start="tw:opacity-0"
        x-transition:enter-end="tw:opacity-100" x-transition:leave="tw:transition tw:ease-in tw:duration-300"
        x-transition:leave-start="tw:opacity-100" x-transition:leave-end="tw:opacity-0"></div>

    <div class="tw:flex tw:w-full">

        {{-- Sidebar --}}
        @include('front.partials.sidebar')

        {{-- Main Content Area (fixed on desktop; scrolls internally) --}}
        <main
            class="tw:flex-1 tw:min-w-0 tw:flex tw:flex-col tw:ml-64 app-main lg:tw:h-screen lg:tw:overflow-auto">
            @include('front.partials.header')
            <div class="tw:p-4 md:tw:p-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>

