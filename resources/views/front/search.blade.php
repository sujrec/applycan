@extends('front.layouts.default')

@section('title', 'Search Programs | ApplyCan')

@section('content')
<div class="tw:max-w-7xl tw:mx-auto tw:px-4"
     x-data="{
        openDropdown: null,
        filters: {
            country: 'Canada',
            categories: [],
            institution: '',
            location: '',
            education: '',
            session: '',
            status: 'Open'
        },
        removeItem(array, item) {
            this.filters[array] = this.filters[array].filter(i => i !== item);
        },
        clearValue(key) {
            this.filters[key] = '';
        }
     }">

    {{-- Page Header --}}
    <div class="tw:mb-6">
        <p class="tw:text-[10px] tw:uppercase tw:tracking-widest tw:text-slate-400 tw:font-bold">SEARCH</p>
        <h2 class="tw:mt-1 tw:text-xl tw:font-bold tw:text-slate-900 dark:tw:text-white">Search for programs</h2>
        <p class="tw:mt-4 tw:text-[13px] tw:text-slate-500 dark:tw:text-slate-400 tw:leading-relaxed">
            Note: Program availability may change at any time. For questions related to programs and available intakes please contact ApplyCan team.
        </p>
    </div>

    <div class="tw:flex tw:flex-col lg:tw:flex-row tw:gap-6">

        {{-- Left Column: Filter Sidebar --}}
        <div class="tw:w-full lg:tw:w-[280px] tw:flex-shrink-0">
            <div class="tw:bg-white dark:tw:bg-slate-900 tw:border tw:border-slate-200 dark:tw:border-slate-800 tw:rounded-lg tw:p-5 tw:shadow-sm">

                <h3 class="tw:text-lg tw:font-bold tw:text-slate-800 dark:tw:text-white tw:mb-5">Filter your search</h3>

                <form action="#" method="GET" class="tw:space-y-4">

                    {{-- 1. Country --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Country <span class="tw:text-red-500">*</span></label>
                        <div @click="openDropdown = openDropdown === 'country' ? null : 'country'"
                             class="tw:w-full tw:flex tw:items-center tw:justify-between tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <span x-show="!filters.country" class="tw:text-sm tw:text-slate-400">Select Country</span>
                            <div x-show="filters.country" class="tw:flex tw:items-center tw:gap-1 tw:bg-slate-100 tw:text-slate-700 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                <span x-text="filters.country"></span>
                                <button type="button" @click.stop="clearValue('country')" class="hover:tw:text-red-500">
                                    <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                            <svg class="tw:w-4 tw:h-4 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2"/></svg>
                        </div>
                        <div x-show="openDropdown === 'country'" @click.away="openDropdown = null" class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-1">
                            <div @click="filters.country = 'Canada'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">Canada</div>
                            <div @click="filters.country = 'USA'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">USA</div>
                        </div>
                    </div>

                    {{-- 2. Program Category (Multi-Select Tags) --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Program category</label>
                        <div @click="openDropdown = openDropdown === 'category' ? null : 'category'"
                             class="tw:w-full tw:flex tw:flex-wrap tw:gap-1 tw:items-center tw:border tw:border-slate-300 tw:rounded tw:px-2 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <template x-if="filters.categories.length === 0">
                                <span class="tw:text-sm tw:text-slate-400 tw:ml-1">Select category</span>
                            </template>
                            <template x-for="cat in filters.categories" :key="cat">
                                <span class="tw:flex tw:items-center tw:gap-1 tw:bg-blue-50 tw:text-blue-700 tw:border tw:border-blue-200 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                    <span x-text="cat"></span>
                                    <button type="button" @click.stop="removeItem('categories', cat)" class="hover:tw:text-red-500">
                                        <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                </span>
                            </template>
                        </div>
                        <div x-show="openDropdown === 'category'" @click.away="openDropdown = null"
                             class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-2 tw:max-h-60 tw:overflow-y-auto">
                            @foreach(['Agriculture', 'Bachelor Degree', 'Computer Science', 'Engineering', 'Healthcare'] as $cat)
                            <label class="tw:flex tw:items-center tw:gap-3 tw:px-2 tw:py-1.5 hover:tw:bg-slate-50 tw:rounded tw:cursor-pointer">
                                <input type="checkbox" value="{{ $cat }}" x-model="filters.categories" class="tw:rounded tw:border-slate-300 tw:text-blue-600">
                                <span class="tw:text-[13px] tw:text-slate-700">{{ $cat }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- 3. Institution --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Institution name <span class="tw:text-red-500">*</span></label>
                        <div @click="openDropdown = openDropdown === 'inst' ? null : 'inst'"
                             class="tw:w-full tw:flex tw:items-center tw:justify-between tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <span x-show="!filters.institution" class="tw:text-sm tw:text-slate-400">Select institution</span>
                            <div x-show="filters.institution" class="tw:flex tw:items-center tw:gap-1 tw:bg-slate-100 tw:text-slate-700 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                <span x-text="filters.institution"></span>
                                <button type="button" @click.stop="clearValue('institution')" class="hover:tw:text-red-500">
                                    <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                            <svg class="tw:w-4 tw:h-4 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2"/></svg>
                        </div>
                        <div x-show="openDropdown === 'inst'" @click.away="openDropdown = null" class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-1">
                            <div @click="filters.institution = 'University of Toronto'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">University of Toronto</div>
                            <div @click="filters.institution = 'McGill University'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">McGill University</div>
                        </div>
                    </div>

                    {{-- 4. Location --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Location</label>
                        <div @click="openDropdown = openDropdown === 'loc' ? null : 'loc'"
                             class="tw:w-full tw:flex tw:items-center tw:justify-between tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <span x-show="!filters.location" class="tw:text-sm tw:text-slate-400">Location</span>
                            <div x-show="filters.location" class="tw:flex tw:items-center tw:gap-1 tw:bg-slate-100 tw:text-slate-700 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                <span x-text="filters.location"></span>
                                <button type="button" @click.stop="clearValue('location')" class="hover:tw:text-red-500">
                                    <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                            <svg class="tw:w-4 tw:h-4 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2"/></svg>
                        </div>
                        <div x-show="openDropdown === 'loc'" @click.away="openDropdown = null" class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-1">
                            <div @click="filters.location = 'Ontario'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">Ontario</div>
                            <div @click="filters.location = 'Quebec'; openDropdown = null" class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm">Quebec</div>
                        </div>
                    </div>

                    {{-- 5. Education Level --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Education level <span class="tw:text-red-500">*</span></label>
                        <div @click="openDropdown = openDropdown === 'edu' ? null : 'edu'"
                             class="tw:w-full tw:flex tw:items-center tw:justify-between tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <span x-show="!filters.education" class="tw:text-sm tw:text-slate-400">Select level</span>
                            <div x-show="filters.education" class="tw:flex tw:items-center tw:gap-1 tw:bg-emerald-50 tw:text-emerald-700 tw:border tw:border-emerald-200 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                <span x-text="filters.education"></span>
                                <button type="button" @click.stop="clearValue('education')" class="hover:tw:text-red-500">
                                    <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                            <svg class="tw:w-4 tw:h-4 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2"/></svg>
                        </div>
                        <div x-show="openDropdown === 'edu'" @click.away="openDropdown = null" class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-1 tw:max-h-60 tw:overflow-y-auto">
                            @foreach(['Diploma', 'Bachelor Degree', 'Graduate Certificate', 'Masters'] as $item)
                            <div @click="filters.education = '{{ $item }}'; openDropdown = null"
                                 class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm tw:text-slate-700">{{ $item }}</div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 6. Session --}}
                    <div class="tw:relative">
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Academic session <span class="tw:text-red-500">*</span></label>
                        <div @click="openDropdown = openDropdown === 'session' ? null : 'session'"
                             class="tw:w-full tw:flex tw:items-center tw:justify-between tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:min-h-[40px] tw:bg-white tw:cursor-pointer">
                            <span x-show="!filters.session" class="tw:text-sm tw:text-slate-400">Select session</span>
                            <div x-show="filters.session" class="tw:flex tw:items-center tw:gap-1 tw:bg-purple-50 tw:text-purple-700 tw:border tw:border-purple-200 tw:px-2 tw:py-0.5 tw:rounded tw:text-[11px] tw:font-bold">
                                <span x-text="filters.session"></span>
                                <button type="button" @click.stop="clearValue('session')" class="hover:tw:text-red-500">
                                    <svg class="tw:w-3 tw:h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </div>
                            <svg class="tw:w-4 tw:h-4 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2"/></svg>
                        </div>
                        <div x-show="openDropdown === 'session'" @click.away="openDropdown = null" class="tw:absolute tw:z-50 tw:w-full tw:mt-1 tw:bg-white tw:border tw:rounded tw:shadow-lg tw:p-1 tw:max-h-60 tw:overflow-y-auto">
                            @foreach(['Jan 2026', 'May 2026', 'Sept 2026'] as $item)
                            <div @click="filters.session = '{{ $item }}'; openDropdown = null"
                                 class="tw:px-3 tw:py-2 tw:hover:bg-blue-50 tw:rounded tw:cursor-pointer tw:text-sm tw:text-slate-700">{{ $item }}</div>
                            @endforeach
                        </div>
                    </div>

                    {{-- 7. Status --}}
                    <div>
                        <label class="tw:block tw:text-xs tw:font-medium tw:text-slate-600 tw:mb-1">Status <span class="tw:text-red-500">*</span></label>
                        <select x-model="filters.status" class="tw:w-full tw:border tw:border-slate-300 tw:rounded tw:px-3 tw:py-2 tw:text-sm tw:bg-white tw:outline-none">
                            <option value="Open">Open</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </div>

                    <button type="submit" class="tw:w-full tw:bg-[#0052cc] tw:text-white tw:py-2.5 tw:rounded tw:text-sm tw:font-bold hover:tw:bg-blue-800 tw:transition-colors tw:mt-4">
                        Apply filter
                    </button>
                </form>
            </div>
        </div>

        {{-- Right Column: Results Area --}}
        <div class="tw:flex-1">
            <div class="tw:bg-white dark:tw:bg-slate-900 tw:border tw:border-slate-200 dark:tw:border-slate-800 tw:rounded-lg tw:p-10 tw:shadow-sm">
                <div class="tw:bg-slate-50 dark:tw:bg-slate-800/50 tw:border tw:border-slate-100 dark:tw:border-slate-800 tw:rounded-lg tw:p-8 tw:text-center">
                    <p class="tw:text-sm tw:font-bold tw:text-slate-800 dark:tw:text-white tw:max-w-md tw:mx-auto">
                        No programs were found. Please refine your search.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
