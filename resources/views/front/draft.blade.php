@extends('front.layouts.default')

@section('title', 'Draft Applications | ApplyCan')

@section('content')
<div class="tw:max-w-7xl tw:mx-auto tw:px-6 tw:py-10">

    {{-- Page Header --}}
    <div class="tw:flex tw:items-center tw:justify-between tw:mb-8">
        <div>
            <h1 class="tw:text-2xl tw:font-extrabold tw:text-slate-900">Draft Applications</h1>
            <p class="tw:text-slate-500 tw:text-sm tw:mt-1">Manage and complete your pending student applications.</p>
        </div>
        <a href="#" class="tw:bg-blue-600 tw:text-white tw:px-5 tw:py-2.5 tw:rounded-xl tw:text-sm tw:font-bold tw:shadow-lg tw:shadow-blue-200 hover:tw:bg-blue-700 tw:transition-all">
            + New Application
        </a>
    </div>

    {{-- Filter Card --}}
    <div class="tw:bg-white tw:rounded-2xl tw:shadow-sm tw:border tw:border-slate-100 tw:p-6 tw:mb-8">
        <form action="#" method="GET" class="tw:grid tw:grid-cols-1 md:tw:grid-cols-4 tw:gap-4">
            <div class="tw:space-y-1">
                <label class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:ml-1">Reference ID</label>
                <input type="text" placeholder="Ref #" class="tw:w-full tw:bg-slate-50 tw:border tw:border-slate-200 tw:rounded-xl tw:px-4 tw:py-2.5 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
            </div>
            <div class="tw:space-y-1">
                <label class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:ml-1">Applicant Name</label>
                <input type="text" placeholder="Name or Email" class="tw:w-full tw:bg-slate-50 tw:border tw:border-slate-200 tw:rounded-xl tw:px-4 tw:py-2.5 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
            </div>
            <div class="tw:space-y-1">
                <label class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:ml-1">Country</label>
                <select class="tw:w-full tw:bg-slate-50 tw:border tw:border-slate-200 tw:rounded-xl tw:px-4 tw:py-2.5 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                    <option value="">All Countries</option>
                    <option>Canada</option>
                    <option>USA</option>
                </select>
            </div>
            <div class="tw:flex tw:items-end">
                <button type="submit" class="tw:w-full tw:bg-blue-600 tw:text-white tw:py-2.5 tw:rounded-xl tw:text-sm tw:font-bold hover:tw:bg-blue-700 tw:transition-colors">
                    Search
                </button>
            </div>
        </form>
    </div>

    {{-- Table / Data Section --}}
    <div class="tw:bg-white tw:rounded-2xl tw:shadow-sm tw:border tw:border-slate-100 tw:overflow-hidden">
        <div class="tw:overflow-x-auto">
            <table class="tw:w-full tw:text-left tw:border-collapse">
                <thead class="tw:bg-slate-50/50 tw:border-b tw:border-slate-100">
                    <tr>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-400 tw:uppercase">R. No</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-400 tw:uppercase">Applicant</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-400 tw:uppercase">Enrolment Info</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-400 tw:uppercase">Progress</th>
                        <th class="tw:px-6 tw:py-4 tw:text-[11px] tw:font-bold tw:text-slate-400 tw:uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class="tw:divide-y tw:divide-slate-50">
                    {{-- Loop through data here --}}
                    @forelse($drafts ?? [] as $draft)
                    <tr class="hover:tw:bg-slate-50/50 tw:transition-colors">
                        <td class="tw:px-6 tw:py-4 tw:text-sm tw:text-slate-600">#{{ $draft->id }}</td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:text-sm tw:font-bold tw:text-slate-900">{{ $draft->name }}</div>
                            <div class="tw:text-xs tw:text-slate-400">{{ $draft->email }}</div>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <div class="tw:text-sm tw:text-slate-700">{{ $draft->institution }}</div>
                            <div class="tw:text-xs tw:text-blue-500 tw:font-medium">{{ $draft->program }}</div>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <span class="tw:inline-flex tw:items-center tw:px-2.5 tw:py-0.5 tw:rounded-full tw:text-[10px] tw:font-bold tw:bg-amber-50 tw:text-amber-600 tw:uppercase">
                                Step {{ $draft->step }} of 3
                            </span>
                        </td>
                        <td class="tw:px-6 tw:py-4">
                            <a href="#" class="tw:text-blue-600 tw:text-sm tw:font-bold hover:tw:underline">Continue</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="tw:px-6 tw:py-20 tw:text-center">
                            <div class="tw:flex tw:flex-col tw:items-center tw:opacity-40">
                                <svg class="tw:w-16 tw:h-16 tw:text-slate-300 tw:mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <p class="tw:text-slate-500 tw:text-sm tw:font-medium">No Draft Applications Submitted Yet.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
