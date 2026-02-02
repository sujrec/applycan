<header
    class="tw:bg-white dark:tw:bg-slate-900 tw:border-b tw:border-slate-200 dark:tw:border-slate-800 tw:px-3 sm:tw:px-4 md:tw:px-6 lg:tw:px-8 tw:py-3 sm:tw:py-4 tw:flex tw:items-center tw:justify-between tw:sticky tw:top-0 tw:z-30 tw:w-full">

    {{-- Mobile Hamburger Menu (Only visible on mobile) --}}
    <button @click="sidebarOpen = !sidebarOpen"
        class="tw:lg:hidden tw:text-slate-700 dark:tw:text-slate-300 tw:p-2 tw:rounded-lg hover:tw:bg-slate-100 dark:hover:tw:bg-slate-800 tw:transition-colors tw:duration-200 tw:flex-shrink-0"
        :aria-label="sidebarOpen ? 'Close menu' : 'Toggle menu'">
        <!-- Hamburger Icon -->
        <svg x-show="!sidebarOpen" class="tw:w-5 sm:tw:w-6 tw:h-5 sm:tw:h-6 tw:transition-all tw:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <!-- Close Icon -->
        <svg x-show="sidebarOpen" class="tw:w-5 sm:tw:w-6 tw:h-5 sm:tw:h-6 tw:transition-all tw:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div class="tw:flex tw:items-center tw:ml-auto tw:gap-2 sm:tw:gap-3 md:tw:gap-4">
        {{-- Theme Toggle --}}
        <button onclick="toggleTheme()" type="button"
            class="tw:text-slate-500 dark:tw:text-slate-400 tw:p-2 tw:rounded-lg hover:tw:bg-slate-100 dark:hover:tw:bg-slate-800 tw:transition-colors tw:duration-200 tw:flex-shrink-0"
            aria-label="Toggle theme">
            <span id="theme-toggle-icon" class="tw:text-lg sm:tw:text-xl">🌙</span>
        </button>

        {{-- Profile --}}
        <div class="tw:flex tw:items-center tw:gap-2 sm:tw:gap-3">
            <div class="tw:text-right tw:hidden xs:tw:hidden sm:tw:block tw:pr-2 sm:tw:pr-3">
                <p class="tw:text-xs sm:tw:text-sm tw:font-bold tw:text-slate-800 dark:tw:text-white tw:truncate">Sujana
                </p>
                <p class="tw:text-xs tw:text-slate-500 dark:tw:text-slate-400 tw:truncate">Sujana Consultancy</p>
            </div>
            <img src="https://ui-avatars.com/api/?name=Sujana+Consultancy"
                class="tw:w-8 sm:tw:w-9 md:tw:w-10 tw:h-8 sm:tw:h-9 md:tw:h-10 tw:rounded-full tw:border tw:border-slate-200 dark:tw:border-slate-700 tw:flex-shrink-0"
                alt="Profile">
        </div>
    </div>
</header>
