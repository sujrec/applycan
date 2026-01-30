@extends('front.layouts.default')

@section('title', 'New Application | ApplyCan')

@section('content')
<div class="tw:max-w-5xl tw:mx-auto tw:px-6 tw:py-12">

    {{-- Header Section --}}
    <div class="tw:flex tw:items-center tw:justify-between tw:mb-10">
        <div>
            <h1 class="tw:text-3xl tw:font-extrabold tw:text-slate-900 tw:tracking-tight">Create New Application</h1>
            <p class="tw:text-slate-500 tw:mt-1">Fill in the details below to start the enrollment process.</p>
        </div>
        <div class="tw:hidden md:tw:block">
            <span class="tw:bg-blue-50 tw:text-blue-700 tw:text-xs tw:font-bold tw:px-3 tw:py-1 tw:rounded-full tw:uppercase tw:tracking-wider">Step 1 of 3</span>
        </div>
    </div>

    {{-- Modern Progress Tracker --}}
    <div class="tw:mb-10">
        <div class="tw:flex tw:items-center">
            <div class="tw:flex tw:items-center tw:text-blue-600 tw:relative">
                <div class="tw:rounded-full tw:h-10 tw:w-10 tw:border-2 tw:border-blue-600 tw:flex tw:items-center tw:justify-center tw:bg-blue-600 tw:text-white tw:font-bold">1</div>
                <div class="tw:absolute tw:top-0 tw:-ml-10 tw:text-center tw:mt-12 tw:w-32 tw:text-xs tw:font-bold tw:uppercase tw:text-blue-600">Application</div>
            </div>
            <div class="tw:flex-auto tw:border-t-2 tw:border-slate-200"></div>
            <div class="tw:flex tw:items-center tw:text-slate-400 tw:relative">
                <div class="tw:rounded-full tw:h-10 tw:w-10 tw:border-2 tw:border-slate-200 tw:flex tw:items-center tw:justify-center tw:font-bold">2</div>
                <div class="tw:absolute tw:top-0 tw:-ml-10 tw:text-center tw:mt-12 tw:w-32 tw:text-xs tw:font-bold tw:uppercase tw:text-slate-400">Documents</div>
            </div>
            <div class="tw:flex-auto tw:border-t-2 tw:border-slate-200"></div>
            <div class="tw:flex tw:items-center tw:text-slate-400 tw:relative">
                <div class="tw:rounded-full tw:h-10 tw:w-10 tw:border-2 tw:border-slate-200 tw:flex tw:items-center tw:justify-center tw:font-bold">3</div>
                <div class="tw:absolute tw:top-0 tw:-ml-10 tw:text-center tw:mt-12 tw:w-32 tw:text-xs tw:font-bold tw:uppercase tw:text-slate-400">Review</div>
            </div>
        </div>
    </div>

    <div class="tw:bg-white tw:rounded-3xl tw:shadow-xl tw:shadow-slate-200/60 tw:border tw:border-slate-100 tw:overflow-hidden">

        {{-- Important Notice --}}
        <div class="tw:bg-gradient-to-r tw:from-blue-600 tw:to-indigo-700 tw:p-6">
            <div class="tw:flex tw:gap-4 tw:items-start">
                <div class="tw:bg-white/20 tw:p-2 tw:rounded-lg">
                    <svg class="tw:w-5 tw:h-5 tw:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <p class="tw:text-blue-50 tw:text-sm tw:font-medium tw:leading-relaxed">
                    Submit applications only to institutions listed as <span class="tw:underline tw:decoration-blue-300 tw:font-bold">Open</span>. Please note that location changes are not possible after submission.
                </p>
            </div>
        </div>

        <div class="tw:p-10">
            <form action="#" class="tw:space-y-8">

                {{-- Form Section: Identity --}}
                <div class="tw:space-y-6">
                    <div class="tw:flex tw:items-center tw:gap-2 tw:mb-2">
                        <div class="tw:w-1 tw:h-4 tw:bg-blue-600 tw:rounded-full"></div>
                        <h3 class="tw:text-sm tw:font-bold tw:text-slate-800 tw:uppercase tw:tracking-wider">Applicant Selection</h3>
                    </div>

                    <div class="tw:group tw:relative">
                        <label class="tw:block tw:text-xs tw:font-bold tw:text-slate-500 tw:mb-2 tw:ml-1">Search Applicant</label>
                        <div class="tw:relative">
                            <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-700 tw:text-sm tw:transition-all focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none focus:tw:ring-4 focus:tw:ring-blue-500/10">
                                <option>Enter name or email...</option>
                                <option>Puran Chaulagain (puranchaulagain@gmail.com)</option>
                            </select>
                            <div class="tw:absolute tw:inset-y-0 tw:right-5 tw:flex tw:items-center tw:pointer-events-none">
                                <svg class="tw:w-5 tw:h-5 tw:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 9l4 4 4-4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form Section: Target --}}
                <div class="tw:space-y-6">
                    <div class="tw:flex tw:items-center tw:gap-2 tw:mb-2">
                        <div class="tw:w-1 tw:h-4 tw:bg-blue-600 tw:rounded-full"></div>
                        <h3 class="tw:text-sm tw:font-bold tw:text-slate-800 tw:uppercase tw:tracking-wider">Program Details</h3>
                    </div>

                    <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-2 tw:gap-6">
                        {{-- Country --}}
                        <div class="tw:space-y-2">
                            <label class="tw:text-xs tw:font-bold tw:text-slate-500 tw:ml-1">Target Country</label>
                            <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-800 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                                <option>Canada</option>
                                <option>USA</option>
                                <option>UK</option>
                            </select>
                        </div>

                        {{-- Session --}}
                        <div class="tw:space-y-2">
                            <label class="tw:text-xs tw:font-bold tw:text-slate-500 tw:ml-1">Intake Session</label>
                            <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-800 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                                <option value="">Select session</option>
                                <option>Winter/Jan 2026</option>
                                <option>Fall/Sept 2026</option>
                                <option>May 2026</option>
                            </select>
                        </div>
                    </div>

                    {{-- Institution --}}
                    <div class="tw:space-y-2">
                        <label class="tw:text-xs tw:font-bold tw:text-slate-500 tw:ml-1">Educational Institution</label>
                        <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-800 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                            <option value="">Choose an institution</option>
                        </select>
                    </div>

                    <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-2 tw:gap-6">
                         {{-- Program --}}
                         <div class="tw:space-y-2">
                            <label class="tw:text-xs tw:font-bold tw:text-slate-500 tw:ml-1">Preferred Program</label>
                            <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-800 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                                <option value="">Select program</option>
                            </select>
                        </div>
                        {{-- Level --}}
                        <div class="tw:space-y-2">
                            <label class="tw:text-xs tw:font-bold tw:text-slate-500 tw:ml-1">Education Level</label>
                            <select class="tw:w-full tw:appearance-none tw:bg-slate-50 tw:border-2 tw:border-slate-100 tw:rounded-2xl tw:px-5 tw:py-4 tw:text-slate-800 tw:text-sm focus:tw:bg-white focus:tw:border-blue-500 focus:tw:outline-none">
                                <option value="">Select level</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Footer Controls --}}
                <div class="tw:pt-8 tw:border-t tw:border-slate-100 tw:flex tw:justify-end">
                    <button type="button" class="tw:group tw:flex tw:items-center tw:gap-3 tw:bg-blue-600 tw:text-white tw:px-8 tw:py-3.5 tw:rounded-xl tw:font-bold tw:text-sm tw:shadow-lg tw:shadow-blue-200 hover:tw:bg-blue-700 hover:tw:-translate-y-0.5 tw:transition-all">
                        Next
                        <svg class="tw:w-4 tw:h-4 tw:transition-transform group-hover:tw:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
