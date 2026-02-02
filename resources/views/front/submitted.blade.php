@extends('front.layouts.default')

@section('title', 'Submitted Applications | ApplyCan')

@section('content')
    <div class="tw:max-w-7xl tw:mx-auto tw:px-4 tw:py-8">

        {{-- Page Header --}}
        <div class="tw:mb-6">
            <h1 class="tw:text-xl tw:font-bold tw:text-slate-900">Submitted applications</h1>
        </div>

        {{-- Filter Card - Matches Image Layout --}}
        <div class="tw:bg-white tw:rounded-lg tw:border tw:border-slate-200 tw:p-5 tw:mb-6">
            <form action="#" method="GET" class="tw:space-y-4">

                {{-- Row 1: 4 Equal Columns --}}
                <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-4 tw:gap-4">
                    <input type="text" name="ref_id" placeholder="Reference id"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm placeholder:tw:text-slate-500 focus:tw:border-blue-500 focus:tw:outline-none">

                    <input type="text" name="applicant" placeholder="Name, email or mobile number"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm placeholder:tw:text-slate-500 focus:tw:border-blue-500 focus:tw:outline-none">

                    <div class="tw:relative">
                        <span class="tw:absolute tw:left-3 tw:top-1/2 tw:-translate-y-1/2 tw:text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="tw:h-5 tw:w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <input type="text" onfocus="(this.type='date')" name="applied_date" placeholder="Applied date"
                            class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:pl-10 tw:pr-3 tw:py-2.5 tw:text-sm placeholder:tw:text-slate-500 focus:tw:border-blue-500 focus:tw:outline-none">
                    </div>

                    <select name="country"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm tw:text-slate-600 focus:tw:border-blue-500 focus:tw:outline-none tw:appearance-none tw:bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%236B7280%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22/%3E%3C/svg%3E')] tw:bg-[length:20px_20px] tw:bg-[right_10px_center] tw:bg-no-repeat">
                        <option value="">Country</option>
                    </select>
                </div>

                {{-- Row 2: 4 Columns (Last one contains Program + Search Button) --}}
                <div class="tw:grid tw:grid-cols-1 md:tw:grid-cols-4 tw:gap-4">
                    <select name="institution"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm tw:text-slate-600 focus:tw:border-blue-500 focus:tw:outline-none tw:appearance-none tw:bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%236B7280%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22/%3E%3C/svg%3E')] tw:bg-[length:20px_20px] tw:bg-[right_10px_center] tw:bg-no-repeat">
                        <option value="">Institution</option>
                    </select>

                    <select name="education_level"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm tw:text-slate-600 focus:tw:border-blue-500 focus:tw:outline-none tw:appearance-none tw:bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%236B7280%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22/%3E%3C/svg%3E')] tw:bg-[length:20px_20px] tw:bg-[right_10px_center] tw:bg-no-repeat">
                        <option value="">Education level</option>
                    </select>

                    <select name="academic_session"
                        class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm tw:text-slate-600 focus:tw:border-blue-500 focus:tw:outline-none tw:appearance-none tw:bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%236B7280%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22/%3E%3C/svg%3E')] tw:bg-[length:20px_20px] tw:bg-[right_10px_center] tw:bg-no-repeat">
                        <option value="">Academic session</option>
                    </select>

                    {{-- Last column shared by Program and Search button --}}
                    <div class="tw:flex tw:gap-3">
                        <div class="tw:flex-1">
                            <select name="program"
                                class="tw:w-full tw:bg-white tw:border tw:border-slate-300 tw:rounded-md tw:px-3 tw:py-2.5 tw:text-sm tw:text-slate-600 focus:tw:border-blue-500 focus:tw:outline-none tw:appearance-none tw:bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%236B7280%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22/%3E%3C/svg%3E')] tw:bg-[length:20px_20px] tw:bg-[right_10px_center] tw:bg-no-repeat">
                                <option value="">Program</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="tw:bg-[#0056b3] tw:text-white tw:px-5 tw:py-2 tw:rounded-md tw:text-sm tw:font-bold hover:tw:bg-blue-800 tw:transition-colors">
                            Search
                        </button>
                    </div>
                </div>
            </form>

            {{-- Table Section Header --}}
            <div class="tw:mt-8 tw:overflow-x-auto">
                <table class="tw:w-full tw:text-left">
                    <thead class="tw:border-t tw:border-slate-100">
                        <tr class="tw:text-[10px] tw:font-bold tw:text-slate-500 tw:uppercase">
                            <th class="tw:px-2 tw:py-4">R. No:</th>
                            <th class="tw:px-2 tw:py-4">Application</th>
                            <th class="tw:px-2 tw:py-4">Enrolment Info</th>
                            <th class="tw:px-2 tw:py-4">Additional Info</th>
                            <th class="tw:px-2 tw:py-4">Progress Info</th>
                            <th class="tw:px-2 tw:py-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6" class="tw:py-20">
                                <div class="tw:flex tw:flex-col tw:items-center">
                                    <div class="tw:mb-4">
                                        {{-- Box Icon matches the image empty state --}}
                                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.2" class="tw:text-slate-900">
                                            <rect x="5" y="7" width="14" height="12" rx="1" />
                                            <path d="M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2" />
                                            <path d="M10 12h4" stroke-dasharray="1 1" />
                                        </svg>
                                    </div>
                                    <p class="tw:text-slate-600 tw:text-sm tw:font-medium">
                                        No Submitted Application Submitted. You can add applicant and submit application on
                                        their behalf.
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
