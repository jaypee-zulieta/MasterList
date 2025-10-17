<x-layout>
    <x-navbar></x-navbar>


    <div class="flex min-h-screen">
        <div class="mt-6 ml-6 flex-1">
            <x-school-years-menu></x-school-years-menu>
        </div>
        <div class="flex-4">
            <div class="pl-10 pr-10 pb-10 place-items-center">
                <div class="w-3/4">
                    <div class="breadcrumbs text-sm">
                        <ul>
                            <li>
                                <a>
                                    <x-home></x-home>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a>
                                    <x-calendar></x-calendar>
                                    School years
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex">
                        <div class="flex-1"></div>
                        <a class="btn btn-success btn-sm" href="{{ route('school_years.create') }}">
                            <x-plus></x-plus>
                            New
                        </a>
                    </div>
                    <div class="mb-6">
                        <div class="text text-xs opacity-50">
                            Showing {{ $schoolYears->firstItem() }} to {{ $schoolYears->lastItem() }} of
                            {{ $schoolYears->total() }}
                            items.
                        </div>
                    </div>


                    <ul class="list bg-base-100 rounded-box shadow-md">

                        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Recent school years</li>
                        @foreach ($schoolYears as $schoolYear)
                            <li class="list-row">
                                <div>
                                    <a href="#" class="text text-2xl font-bold text-primary link">
                                        {{ $schoolYear->year_start }}-{{ $schoolYear->year_end }}</a>
                                    @if (session('new school year') == $schoolYear->id)
                                        <div class="text-xs uppercase font-semibold opacity-60 text-info mt-2">New</div>
                                    @endif

                                </div>
                                <p class="list-col-wrap text-xs text-pretty opacity-50">
                                    {{ $schoolYear->description }}
                                </p>

                            </li>
                        @endforeach
                    </ul>
                    <div class="flex">
                        <div class="flex-1"></div>
                        <div class="flex-none">
                            <div class="mt-6">
                                {{ $schoolYears->links() }}
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

</x-layout>
