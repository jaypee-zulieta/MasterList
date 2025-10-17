<x-layout>
    <x-navbar></x-navbar>
    <div class="place-items-center p-10">

        <div class="w-1/2">
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
                            <a href="#" class="text text-2xl font-bold text-success hover:link">
                                {{ $schoolYear->year_start }}-{{ $schoolYear->year_end }}</a>
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
</x-layout>
