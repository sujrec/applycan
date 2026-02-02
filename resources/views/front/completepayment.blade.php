@extends('front.layouts.default')

@section('title', 'Payment & Transactions | ApplyCan')

@section('content')
<div class="tw:max-w-7xl tw:mx-auto tw:px-4 tw:py-8">

    {{-- Page Header --}}
    <div class="tw:mb-6">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-500 tw:uppercase tw:tracking-wider tw:mb-1">Finance</p>
        <h1 class="tw:text-xl tw:font-bold tw:text-slate-900">Payment & Transactions</h1>
    </div>

    {{-- Transaction Card --}}
    <div class="tw:bg-white tw:rounded-lg tw:border tw:border-slate-200 tw:mb-6">

        {{-- Card Header --}}
        <div class="tw:p-5 tw:border-b tw:border-slate-100">
            <h2 class="tw:text-sm tw:font-semibold tw:text-slate-800">Transactions details</h2>
        </div>

        {{-- Table Section --}}
        <div class="tw:overflow-x-auto">
            <table class="tw:w-full tw:text-left">
                <thead>
                    <tr class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:border-b tw:border-slate-100">
                        <th class="tw:px-6 tw:py-4">Title</th>
                        <th class="tw:px-6 tw:py-4">Service</th>
                        <th class="tw:px-6 tw:py-4">Amount</th>
                        <th class="tw:px-6 tw:py-4">Payment Date</th>
                        <th class="tw:px-6 tw:py-4">Remarks</th>
                        <th class="tw:px-6 tw:py-4">Status</th>
                        <th class="tw:px-6 tw:py-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Empty State --}}
                    <tr>
                        <td colspan="7" class="tw:py-20">
                            <div class="tw:flex tw:flex-col tw:items-center">
                                <div class="tw:mb-4">
                                    {{-- Drawer/Box Icon matching image_032b9e.png --}}
                                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" class="tw:text-slate-900">
                                        <rect x="3" y="8" width="18" height="12" rx="1" />
                                        <path d="M8 8V6a2 2 0 012-2h4a2 2 0 012 2v2" />
                                        <path d="M10 13h4" stroke-linecap="round" />
                                        <path d="M3 13h2" />
                                        <path d="M19 13h2" />
                                    </svg>
                                </div>
                                <p class="tw:text-slate-500 tw:text-sm tw:font-medium">
                                    No pending payment or past transactions. Please check back later.
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
