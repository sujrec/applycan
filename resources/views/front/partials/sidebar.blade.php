{{-- Sidebar (Your Provided Code) --}}
<aside :class="sidebarOpen ? 'tw:translate-x-0' : 'tw:-translate-x-full lg:tw:translate-x-0'"
    class="tw:fixed tw:inset-y-0 tw:left-0 tw:z-50 tw:w-64 tw:bg-[#111827] tw:transition-transform tw:duration-300 tw:ease-in-out lg:tw:relative lg:tw:translate-x-0 lg:tw:flex-shrink-0 tw:flex tw:flex-col tw:text-slate-300 tw:font-sans">
    <div class="tw:p-6 tw:pb-4 tw:flex tw:flex-col tw:items-center tw:relative">
        <button @click="sidebarOpen = false"
            class="tw:absolute tw:top-4 tw:right-4 tw:text-slate-400 hover:tw:text-white lg:tw:hidden">
            <svg class="tw:w-6 tw:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img src="{{ asset('images/applycan.png') }}" alt="ApplyCan" class="tw:h-12 tw:mb-4">
        <h1 class="tw:text-white tw:text-xl tw:font-bold tw:tracking-tight">ApplyCan</h1>
    </div>

    <nav class="tw:flex-1 tw:px-3 tw:pb-10 tw:space-y-1">
        <a href="{{ route('dashboard') }}"
            class="tw:flex tw:items-center tw:px-3 tw:py-2 tw:text-sm tw:font-medium tw:text-white tw:bg-slate-800/50 tw:rounded-md">
            <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            Home
        </a>
        <a href="{{ route('search') }}"
            class="tw:flex tw:items-center tw:px-3 tw:py-2 tw:text-sm tw:font-medium hover:tw:bg-slate-800 tw:rounded-md">
            <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            Search programs
        </a>
        <a href="{{ route('application') }}"
            class="tw:flex tw:items-center tw:px-3 tw:py-2 tw:text-sm tw:font-medium hover:tw:bg-slate-800 tw:rounded-md">
            <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            New application
        </a>
        <a href="{{ route('applicant') }}"
            class="tw:flex tw:items-center tw:px-3 tw:py-2 tw:text-sm tw:font-medium hover:tw:bg-slate-800 tw:rounded-md">
            <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-500" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
            Applicants
        </a>


        <div x-data="{ open: true }">
            <button @click="open = !open"
                class="tw:w-full tw:flex tw:items-center tw:justify-between tw:px-3 tw:py-2 tw:text-sm tw:font-medium hover:tw:bg-slate-800 tw:rounded-md">
                <div class="tw:flex tw:items-center">
                    <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                        </path>
                    </svg>
                    Applications
                </div>
                <svg :class="open ? 'tw:rotate-180' : ''"
                    class="tw:w-4 tw:h-4 tw:text-slate-500 tw:transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
           <div x-show="open" class="tw:mt-1 tw:space-y-1 tw:pl-10 tw:pr-3">
                <a href="{{ route('draft') }}" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Draft</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
                {{-- Submitted --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Submitted</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
                {{-- Offers --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Offers</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
                {{-- Deferral --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Deferral</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
               {{-- Applied & awaiting --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Applied & awaiting</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
                 {{-- Refund --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Refund</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">2</span>
                </a>
                    {{-- Visa granted --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Visa granted</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">9</span>
                </a>

                    {{-- Archived --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Archived</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">19</span>
                </a>
            </div>
        </div>

        {{-- Finance Dropdown (Newly Added) --}}
        <div x-data="{ open: true }" class="tw:mt-4">
            <button @click="open = !open"
                class="tw:w-full tw:flex tw:items-center tw:justify-between tw:px-3 tw:py-2 tw:text-sm tw:font-medium hover:tw:bg-slate-800 tw:rounded-md">
                <div class="tw:flex tw:items-center">
                    {{-- Finance Icon --}}
                    <svg class="tw:w-5 tw:h-5 tw:mr-3 tw:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Finance
                </div>
                <svg :class="open ? 'tw:rotate-180' : ''" class="tw:w-4 tw:h-4 tw:text-slate-500 tw:transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="open" class="tw:mt-1 tw:space-y-1 tw:pl-10 tw:pr-3">
                {{-- Pending Payment --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Pending payment</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">0</span>
                </a>
                {{-- Complete Payment --}}
                <a href="#" class="tw:flex tw:justify-between tw:items-center tw:py-1.5 tw:px-2 tw:text-sm tw:text-slate-400 hover:tw:text-white hover:tw:bg-slate-800 tw:rounded">
                    <span>Complete payment</span>
                    <span class="tw:bg-[#132021] tw:text-[#00a34c] tw:px-2 tw:rounded tw:text-[11px] tw:font-bold">14</span>
                </a>
            </div>
        </div>
    </nav>
</aside>
</div>
