<header class="tw:bg-white dark:tw:bg-slate-900 tw:border-b tw:border-slate-200 dark:tw:border-slate-800 tw:px-4 lg:tw:px-8 tw:py-4 tw:flex tw:items-center tw:sticky tw:top-0 tw:z-30">

    {{-- Hamburger: Only visible on small/medium screens --}}
    <button @click="sidebarOpen = true"
            type="button"
            class="tw:p-2 tw:mr-4 tw:rounded-md tw:text-slate-600 dark:tw:text-slate-400 hover:tw:bg-slate-100 dark:hover:tw:bg-slate-800 lg:tw:hidden">
        <svg class="tw:w-6 tw:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <div class="tw:flex tw:items-center tw:ml-auto tw:space-x-4">
        {{-- Theme Toggle --}}
        <button onclick="toggleTheme()" type="button" class="tw:text-slate-500 dark:tw:text-slate-400 tw:p-2 tw:rounded-lg hover:tw:bg-slate-100 dark:hover:tw:bg-slate-800">
            <span id="theme-toggle-icon" class="tw:text-xl">🌙</span>
        </button>

        {{-- Profile --}}
        <div class="tw:flex tw:items-center">
            <div class="tw:text-right tw:mr-3 tw:hidden sm:tw:block">
                <p class="tw:text-sm tw:font-bold tw:text-slate-800 dark:tw:text-white">Binod Dangal</p>
                <p class="tw:text-xs tw:text-slate-500 dark:tw:text-slate-400">Binod Consultancy</p>
            </div>
            <img src="https://ui-avatars.com/api/?name=Binod+Dangal" class="tw:w-10 tw:h-10 tw:rounded-full tw:border tw:border-slate-200">
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const icon = document.getElementById('theme-toggle-icon');
        if (icon) {
            icon.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
        }
    });

    function toggleTheme() {
        const html = document.documentElement;
        const icon = document.getElementById('theme-toggle-icon');
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            if (icon) icon.textContent = '🌙';
        } else {
            html.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            if (icon) icon.textContent = '☀️';
        }
    }
</script>
