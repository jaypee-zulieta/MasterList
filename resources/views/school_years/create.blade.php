<x-layout>
    <x-navbar></x-navbar>
    <div class="h-screen bg-base-200 grid place-items-center overflow">
        <div class="w-1/2 p-10">
            <form action="{{ route('school_years.store')}}" method="POST">
                @csrf
                <h1 class="text text-xl text-center">Create new school year</h1>
                <div class="mt-6">
                    @error('year_start')
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">What year does the School year start?</legend>
                            <input type="text" class="input input-error w-full rounded-none" placeholder="Type here" name="year_start" value="{{ old('year_start')}}"" />
                            <p class="label text-error">{{ $message }}</p>
                        </fieldset>
                    @else
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">What year does the School year start?</legend>
                            <input type="text" class="input w-full rounded-none" placeholder="Type here" name="year_start" value="{{ old('year_start') }}" />
                        </fieldset>
                    @enderror
                  
                    @error('year_end')
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">What year does the School year end?</legend>
                            <input type="text" class="input input-error w-full rounded-none" placeholder="Type here" name="year_end" value="{{ old('year_end')}}" />
                            <p class="label text-error">{{ $message }}</p>
                        </fieldset>
                    @else
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">What year does the School year end?</legend>
                            <input type="text" class="input w-full rounded-none" placeholder="Type here" name="year_end" value="{{ old('year_end')}}"  />
                        </fieldset>
                    @enderror

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Description</legend>
                        <textarea class="textarea w-full rounded-none" placeholder="Describe the school year." name="description" >{{ old('description') }}</textarea>
                    </fieldset>
                </div>
                <div class="mt-10 text-center">
                    <button class="btn btn-success btn-wide rounded-none">Create</button>
                </div>
            </form>
        </div>

    </div>
</x-layout>