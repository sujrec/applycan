@extends('front.layouts.default')

@section('title', 'Manage Applicants | ApplyCan')

@section('content')
<div class="tw:max-w-7xl tw:mx-auto tw:px-4 tw:py-8" x-data="{ search: '', mobile: '' }">

    {{-- Top Heading & Action --}}
    <div class="tw:flex tw:flex-col md:tw:flex-row tw:justify-between tw:items-start md:tw:items-center tw:gap-4 tw:mb-8">
        <div>
            <h1 class="tw:text-2xl tw:font-bold tw:text-slate-900 dark:tw:text-white">Manage Applicants</h1>
            <p class="tw:text-slate-500 tw:text-sm tw:mt-1">View and manage all student applications and their statuses.</p>
        </div>
        <a href="#" class="tw:flex tw:items-center tw:gap-2 tw:bg-blue-600 tw:text-white tw:px-5 tw:py-2.5 tw:rounded-xl tw:font-semibold tw:shadow-sm hover:tw:bg-blue-700 tw:transition-all">
            <svg class="tw:w-5 tw:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            New Applicant
        </a>
    </div>

    {{-- Filter Card --}}
    <div class="tw:bg-white dark:tw:bg-slate-900 tw:rounded-2xl tw:border tw:border-slate-200 dark:tw:border-slate-800 tw:p-5 tw:mb-6 tw:shadow-sm">
        <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-3 tw:gap-4">
            <div class="tw:relative">
                <span class="tw:absolute tw:inset-y-0 tw:left-0 tw:pl-3 tw:flex tw:items-center tw:text-slate-400">
                    <svg class="tw:w-4 tw:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2"/></svg>
                </span>
                <input type="text" placeholder="Name, Email, or Unique ID"
                       class="tw:w-full tw:pl-10 tw:pr-4 tw:py-2.5 tw:bg-slate-50 dark:tw:bg-slate-800 tw:border-0 tw:rounded-xl tw:text-sm focus:tw:ring-2 focus:tw:ring-blue-500">
            </div>
            <div class="tw:relative">
                <span class="tw:absolute tw:inset-y-0 tw:left-0 tw:pl-3 tw:flex tw:items-center tw:text-slate-400">
                    <svg class="tw:w-4 tw:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-width="2"/></svg>
                </span>
                <input type="text" placeholder="Mobile Number"
                       class="tw:w-full tw:pl-10 tw:pr-4 tw:py-2.5 tw:bg-slate-50 dark:tw:bg-slate-800 tw:border-0 tw:rounded-xl tw:text-sm focus:tw:ring-2 focus:tw:ring-blue-500">
            </div>
            <button class="tw:bg-slate-900 dark:tw:bg-blue-600 tw:text-white tw:font-bold tw:rounded-xl tw:py-2.5 hover:tw:opacity-90 tw:transition-all">
                Search
            </button>
        </div>
    </div>

    {{-- Data Table --}}
    <div class="tw:bg-white dark:tw:bg-slate-900 tw:border tw:border-slate-200 dark:tw:border-slate-800 tw:rounded-2xl tw:shadow-sm tw:overflow-hidden">
        <div class="tw:overflow-x-auto">
            <table class="tw:w-full tw:text-left tw:border-collapse">
                <thead>
                    <tr class="tw:bg-slate-50 dark:tw:bg-slate-800/50">
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider">Unique Number</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider">Applicant Details</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider">Country</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider">Contact Info</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider">Added On</th>
                        <th class="tw:px-6 tw:py-4 tw:text-right"></th>
                    </tr>
                </thead>
                <tbody class="tw:divide-y tw:divide-slate-100 dark:tw:divide-slate-800">
                    {{-- Row 1 --}}
                    <tr class="hover:tw:bg-slate-50/50 dark:hover:tw:bg-slate-800/30 tw:transition-colors">
                        <td class="tw:px-6 tw:py-4">
                            <span class="tw:text-xs tw:font-mono tw:bg-slate-100 dark:tw:bg-slate-800 tw:px-2 tw:py-1 tw:rounded-md tw:text-slate-600 dark:tw:text-slate-400">HGBAY0</span>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:flex tw:items-center tw:gap-3">
                                <div class="tw:w-10 tw:h-10 tw:rounded-full tw:bg-blue-100 tw:text-blue-600 tw:flex tw:items-center tw:justify-center tw:font-bold tw:text-sm">PC</div>
                                <div>
                                    <div class="tw:text-sm tw:font-bold tw:text-slate-900 dark:tw:text-white">Puran Chaulagain</div>
                                    <div class="tw:text-[11px] tw:text-slate-500">25 Jun 1992 • Male</div>
                                </div>
                            </div>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:flex tw:items-center tw:gap-2 tw:text-sm tw:text-slate-700 dark:tw:text-slate-300">
                                <span>🇳🇵</span> Nepal
                            </div>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:text-sm tw:text-slate-900 dark:tw:text-white">puranchaulagain@gmail.com</div>
                            <div class="tw:text-xs tw:text-slate-500">984-1054940</div>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:text-sm tw:text-slate-600 dark:tw:text-slate-400">23 Dec 2023</div>
                        </td>
                        <td class="tw:px-6 tw:py-4 tw:text-right">
                            <button class="tw:p-2 tw:text-slate-400 hover:tw:text-blue-600">
                                <svg class="tw:w-5 tw:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
                            </button>
                        </td>
                    </tr>

                    {{-- Row 2 --}}
                    <tr class="hover:tw:bg-slate-50/50 dark:hover:tw:bg-slate-800/30 tw:transition-colors">
                        <td class="tw:px-6 tw:py-4"><span class="tw:text-xs tw:font-mono tw:bg-slate-100 dark:tw:bg-slate-800 tw:px-2 tw:py-1 tw:rounded-md tw:text-slate-600 dark:tw:text-slate-400">W952C7</span></td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:flex tw:items-center tw:gap-3">
                                <div class="tw:w-10 tw:h-10 tw:rounded-full tw:bg-emerald-100 tw:text-emerald-600 tw:flex tw:items-center tw:justify-center tw:font-bold tw:text-sm">DC</div>
                                <div>
                                    <div class="tw:text-sm tw:font-bold tw:text-slate-900 dark:tw:text-white">DAUT CHAULAGAIN</div>
                                    <div class="tw:text-[11px] tw:text-slate-500">30 Sep 2003 • Male</div>
                                </div>
                            </div>
                        </td>
                        <td class="tw:px-6 tw:py-4"><div class="tw:text-sm tw:text-slate-700 dark:tw:text-slate-300">🇳🇵 Nepal</div></td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:text-sm tw:text-slate-900 dark:tw:text-white">daudchaulagai@gmail.com</div>
                            <div class="tw:text-xs tw:text-slate-500">984-4650322</div>
                        </td>
                        <td class="tw:px-6 tw:py-4"><div class="tw:text-sm tw:text-slate-600 dark:tw:text-slate-400">10 Dec 2023</div></td>
                        <td class="tw:px-6 tw:py-4 tw:text-right">
                            <button class="tw:p-2 tw:text-slate-400 hover:tw:text-blue-600">
                                <svg class="tw:w-5 tw:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round"/></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Pagination Placeholder --}}
        <div class="tw:px-6 tw:py-4 tw:bg-slate-50/50 dark:tw:bg-slate-800/50 tw:border-t tw:border-slate-100 dark:tw:border-slate-800 tw:flex tw:justify-between tw:items-center">
            <span class="tw:text-xs tw:text-slate-500">Showing 1 to 4 of 28 applicants</span>
            <div class="tw:flex tw:gap-2">
                <button class="tw:px-3 tw:py-1 tw:border tw:rounded-md tw:text-xs tw:bg-white dark:tw:bg-slate-900 hover:tw:bg-slate-50">Prev</button>
                <button class="tw:px-3 tw:py-1 tw:border tw:rounded-md tw:text-xs tw:bg-white dark:tw:bg-slate-900 hover:tw:bg-slate-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
