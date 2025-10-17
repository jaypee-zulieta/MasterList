<div>
    <ul class="menu bg-base-100 rounded-box w-full shadow-md">
        <li class="menu-title">Menu</li>
        <li class="menu-active">
            <a href="{{ route('school_years.index') }}">
                <x-calendar></x-calendar>
                School years
            </a>
        </li>
        <li>
            <a href="{{ route('school_years.index') }}">
                <x-academic-cap></x-academic-cap>
                Courses
            </a>
        </li>
    </ul>
</div>
