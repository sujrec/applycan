@extends('front.layouts.default')

@section('title', 'Dashboard | ApplyCan')

@section('content')
    <div class="tw-flex tw-justify-between tw-items-end tw-mb-8">
        <div>
            <p class="tw-text-[10px] tw-uppercase tw-tracking-widest tw-text-slate-400 tw-font-bold">Overview</p>
            <h2 class="tw-text-2xl tw-font-bold tw-text-slate-800">Dashboard</h2>
        </div>
        <div class="tw-flex tw-space-x-4">
            <button
                class="tw-px-4 tw-py-2 tw-border tw-border-slate-300 tw-rounded-md tw-text-sm tw-font-medium tw-text-slate-700 hover:tw-bg-slate-50">+
                Add applicant</button>
            <button
                class="tw-px-4 tw-py-2 tw-bg-brand-blue tw-text-white tw-rounded-md tw-text-sm tw-font-medium hover:tw-bg-blue-700">+
                New application</button>
        </div>
    </div>

    <div
        class="tw-bg-white tw-border-l-4 tw-border-green-500 tw-p-4 tw-rounded-lg tw-shadow-sm tw-flex tw-justify-between tw-items-center tw-mb-8">
        <div class="tw-flex tw-items-center tw-text-green-700 tw-text-sm">
            <span class="tw-mr-3">✅</span> Wow! Your Subscription is active with 90 days remaining.
        </div>
        <button class="tw-text-slate-400">✕</button>
    </div>

    <div
        class="tw-bg-white tw-rounded-2xl tw-p-10 tw-shadow-sm tw-border tw-border-slate-100 tw-relative tw-overflow-hidden tw-mb-10">
        <div class="tw-relative tw-z-10 tw-max-w-2xl">
            <h1 class="tw-text-3xl tw-font-bold tw-text-slate-800 tw-mb-4 tw-text-center">Welcome back, Binod</h1>
            <p class="tw-text-slate-500 tw-leading-relaxed">Explore top programs and manage applications with ease.</p>
        </div>
    </div>

    <h3 class="tw-text-xl tw-font-bold tw-text-slate-800 tw-mb-4">Notices <span class="tw-text-blue-400">●</span></h3>
    <div class="tw-space-y-2">
        @foreach (['Sheridan Registration Path', 'Seneca College Update', 'Bow Valley Guide'] as $notice)
            <div
                class="tw-bg-white tw-border tw-border-slate-200 tw-rounded-lg tw-p-4 tw-flex tw-justify-between tw-items-center hover:tw-shadow-md tw-transition-shadow">
                <span class="tw-text-slate-700 tw-text-sm tw-font-medium">{{ $notice }}</span>
                <span class="tw-text-slate-400">⌵</span>
            </div>
        @endforeach
    </div>
@endsection
