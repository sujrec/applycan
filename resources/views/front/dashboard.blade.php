@extends('front.layouts.default')

@section('title', 'Dashboard | ApplyCan')

@section('content')
<div class="tw:space-y-6">

    {{-- Top bar --}}
    <div class="tw:flex tw:items-center tw:justify-between tw:mb-6">
        <div>
            <p class="tw:text-[10px] tw:uppercase tw:tracking-widest tw:text-slate-400 tw:font-bold">
                OVERVIEW
            </p>
            <h2 class="tw:mt-1 tw:text-xl tw:font-bold tw:text-slate-900">
                Dashboard
            </h2>
        </div>

        <div class="tw:flex tw:items-center tw:gap-2">
            <button class="tw:inline-flex tw:items-center tw:justify-center tw:gap-1.5 tw:px-3 tw:py-1.5 tw:rounded tw:border tw:border-slate-200 tw:bg-white tw:text-xs tw:font-semibold tw:text-slate-700 hover:tw:bg-slate-50">
                <span class="tw:text-sm tw:font-normal">+</span>
                Add applicant
            </button>

            <button class="tw:inline-flex tw:items-center tw:justify-center tw:gap-1.5 tw:px-3 tw:py-1.5 tw:rounded tw:bg-[#0052cc] tw:text-white tw:text-xs tw:font-semibold hover:tw:bg-blue-700">
                <span class="tw:text-sm tw:font-normal">+</span>
                New application
            </button>
        </div>
    </div>

    {{-- Subscription alert --}}
    <div class="tw:rounded tw:border-l-4 tw:border-emerald-500 tw:bg-white tw:border tw:border-slate-100 tw:px-4 tw:py-3 tw:flex tw:items-center tw:justify-between">
        <div class="tw:flex tw:items-center tw:gap-3">
            <svg class="tw:w-5 tw:h-5 tw:text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <p class="tw:text-sm tw:text-emerald-600">
                <span class="tw:mr-2">●</span> Wow! Your Subscription is active with <span class="tw:font-medium">89 days remaining.</span>
            </p>
        </div>
        <button class="tw:text-slate-400 hover:tw:text-slate-600">
            <svg class="tw:w-5 tw:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    {{-- Hero card --}}
    <div class="tw:relative tw:overflow-hidden tw:rounded tw:border tw:border-slate-100 tw:bg-white tw:p-10">
        {{-- Blue background circle with watermark --}}
        <div class="tw:absolute tw:top-1/2 tw:translate-y-[-50%] tw:right-[-50px] tw:h-64 tw:w-64 tw:rounded-full tw:bg-[#dbeafe] tw:flex tw:items-center tw:justify-center">
             <img src="{{ asset('images/applycan.png') }}" alt="Watermark" class="tw:opacity-40 tw:w-40 tw:rotate-[-10deg]">
        </div>

        <div class="tw:relative tw:z-10 tw:max-w-2xl">
            <h1 class="tw:text-2xl tw:font-bold tw:text-slate-900">
                Welcome back, Sujana
            </h1>
            <p class="tw:mt-4 tw:text-slate-500 tw:text-sm tw:leading-relaxed">
                We’re excited to have you on board. Explore top programs from leading universities and colleges, manage student applications with ease, and track commissions in real time. Together, let’s simplify the study abroad journey and help students succeed!
            </p>
        </div>
    </div>

  {{-- Notices Section --}}
<div class="tw:mt-8" x-data="{ activeNotice: null }">
    <h3 class="tw:text-lg tw:font-bold tw:text-slate-900 tw:flex tw:items-center tw:gap-2">
        Notices
        <span class="tw:h-2 tw:w-2 tw:rounded-full tw:bg-[#00c2ff]"></span>
    </h3>

    <div class="tw:mt-4 tw:bg-white tw:border tw:border-slate-100 tw:rounded tw:divide-y tw:divide-slate-50">

        <div class="tw:group">
            {{-- Header: Click to toggle --}}
            <div @click="activeNotice = (activeNotice === 1 ? null : 1)"
                 class="tw:flex tw:items-center tw:justify-between tw:px-6 tw:py-4 hover:tw:bg-slate-50 tw:cursor-pointer tw:transition-colors">
                <p class="tw:text-sm tw:font-bold tw:text-slate-800">Sheridan Registration Path</p>
                <svg class="tw:w-5 tw:h-5 tw:text-slate-400 tw:transition-transform tw:duration-300"
                     :class="activeNotice === 1 ? 'tw:rotate-180' : ''"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>

            {{-- Content: Hidden by default --}}
            <div x-show="activeNotice === 1"
                 x-collapse
                 class="tw:px-6 tw:pb-6 tw:bg-white">
                <div class="tw:flex tw:items-center tw:gap-2 tw:text-xs tw:text-slate-500 tw:mb-3">
                    <svg class="tw:w-4 tw:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    25 Aug 2023
                </div>
                <div class="tw:text-sm tw:text-slate-600 tw:leading-relaxed tw:space-y-4">
                    <p>All students with granted visas from Sheridan College are required to complete their registration through the provided link. Ensure timely registration to secure your enrollment.</p>
                    <p class="tw:font-semibold">Link,</p>
                    <a href="https://intmobileapp.sheridancollege.ca/DocumentSubmission.aspx" target="_blank" class="tw:text-blue-600 tw:break-all hover:tw:underline">
                        https://intmobileapp.sheridancollege.ca/DocumentSubmission.aspx
                    </a>
                </div>
            </div>
        </div>

        <div class="tw:group">
            <div @click="activeNotice = (activeNotice === 2 ? null : 2)"
                 class="tw:flex tw:items-center tw:justify-between tw:px-6 tw:py-4 hover:tw:bg-slate-50 tw:cursor-pointer">
                <p class="tw:text-sm tw:font-bold tw:text-slate-800">Seneca College - POE And Visa Update</p>
                <svg class="tw:w-5 tw:h-5 tw:text-slate-400 tw:transition-transform tw:duration-300"
                     :class="activeNotice === 2 ? 'tw:rotate-180' : ''"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div x-show="activeNotice === 2" x-collapse class="tw:px-6 tw:pb-6">
                <p class="tw:text-sm tw:text-slate-600">Specific Seneca College visa update details here...</p>
            </div>
        </div>

        <div class="tw:group">
            <div @click="activeNotice = (activeNotice === 3 ? null : 3)"
                 class="tw:flex tw:items-center tw:justify-between tw:px-6 tw:py-4 hover:tw:bg-slate-50 tw:cursor-pointer">
                <p class="tw:text-sm tw:font-bold tw:text-slate-800">Bow Valley College Study Permit Guide</p>
                <svg class="tw:w-5 tw:h-5 tw:text-slate-400 tw:transition-transform tw:duration-300"
                     :class="activeNotice === 3 ? 'tw:rotate-180' : ''"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div x-show="activeNotice === 3" x-collapse class="tw:px-6 tw:pb-6">
                <p class="tw:text-sm tw:text-slate-600">Study permit guidelines for Bow Valley students...</p>
            </div>
        </div>

    </div>
</div>

{{-- Statistics Grid Section --}}
<div class="tw:mt-8 tw:grid tw:grid-cols-4 tw:gap-4 md:tw:grid-cols-">

    {{-- Total Students --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Total Students
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">29</h4>
    </div>

    {{-- Draft Application --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Draft Application
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">0</h4>
    </div>

    {{-- Submitted Application --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Submitted Application
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">0</h4>
    </div>

    {{-- Offered Application --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Offered Application
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">0</h4>
    </div>

    {{-- Visa Ready Applications --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Visa Ready Applications
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">0</h4>
    </div>

    {{-- Deferred Applications --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Deferred Applications
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">0</h4>
    </div>

    {{-- Refunded Applications --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Refunded Applications
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">2</h4>
    </div>

    {{-- Archived Applications --}}
    <div class="tw:bg-white tw:p-6 tw:rounded-sm tw:border tw:border-slate-100 tw:shadow-sm">
        <p class="tw:text-[10px] tw:font-bold tw:text-slate-400 tw:uppercase tw:tracking-widest tw:mb-2">
            Archived Applications
        </p>
        <h4 class="tw:text-3xl tw:font-bold tw:text-slate-800">19</h4>
    </div>

</div>
@endsection
