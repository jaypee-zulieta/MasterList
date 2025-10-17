<x-layout>
    <x-navbar></x-navbar>


    <div class="flex min-h-screen">
        <div class="mt-6 ml-6 flex-1">
            <x-school-years-menu></x-school-years-menu>
        </div>
        <div class="flex-4">
            <div class="pl-10 pr-10 pb-10 place-items-center">
                <div class="w-3/4">
                    <div>
                        <div class="breadcrumbs text-sm">
                            <ul>
                                <li>
                                    <a href="/">
                                        <x-home></x-home>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('school_years.index') }}">
                                        <x-calendar></x-calendar>
                                        School years
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <x-plus></x-plus>
                                        New School year
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-20">
                        <div class="min-h-96 bg-base-100 shadow-md rounded-box p-6 pl-10 pr-10">
                            <h1 class="text text-xl text-center mb-6">Create new school year</h1>
                            <form action="{{ route('school_years.store') }}" method="POST">
                                @csrf
                                <div class="flex gap-6">
                                    @error('year_start')
                                        <fieldset class="fieldset">
                                            <legend class="fieldset-legend font-bold">Year start*</legend>
                                            <input type="text" class="input input-error w-32 text-2xl text-center"
                                                placeholder="YYYY" name="year_start" value="{{ old('year_start') }}" />
                                            <p class="label opacity-45">Ex. 2024</p>
                                        </fieldset>
                                    @else
                                        <fieldset class="fieldset">
                                            <legend class="fieldset-legend font-bold">Year start*</legend>
                                            <input type="text" class="input w-32 text-2xl text-center" placeholder="YYYY"
                                                name="year_start" value="{{ old('year_start') }}" />
                                            <p class="label opacity-45">Ex. 2024</p>
                                        </fieldset>
                                    @enderror
                                    @error('year_end')
                                        <fieldset class="fieldset">
                                            <legend class="fieldset-legend font-bold">Year end*</legend>
                                            <input type="text" class="input input-error w-32 text-2xl text-center"
                                                placeholder="YYYY" name="year_end" value="{{ old('year_end') }}" />
                                            <p class="label opacity-45">Ex. 2025</p>
                                        </fieldset>
                                    @else
                                        <fieldset class="fieldset">
                                            <legend class="fieldset-legend font-bold">Year end*</legend>
                                            <input type="text" class="input w-32 text-2xl text-center" placeholder="YYYY"
                                                name="year_end" value="{{ old('year_end') }}" />
                                            <p class="label opacity-45">Ex. 2025</p>
                                        </fieldset>
                                    @enderror
                                </div>

                                <div class="">
                                    <fieldset class="fieldset">
                                        <legend class="fieldset-legend font-bold">Description</legend>
                                        <textarea name="description" class="textarea w-full" placeholder="Describe the school year.">{{ old('description') }}</textarea>
                                        <p class="label opacity-45">Optional</p>
                                    </fieldset>
                                </div>
                                <div class="flex flex-col gap-3 mt-6">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <x-alert-error>{{ $error }}</x-alert-error>
                                        @endforeach

                                    @endif
                                </div>

                                <div class="flex mt-6 mb-6">
                                    <div class="flex-1"></div>
                                    <div class="flex gap-3">
                                        <a href="{{ route('school_years.index') }}"
                                            class="btn btn-secondary btn-ghost">Cancel</a>
                                        <button class="btn btn-primary">Create New School Year</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>

</x-layout>
