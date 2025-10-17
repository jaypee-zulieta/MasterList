<?php

namespace App\Rules;

use App\Models\SchoolYear;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueSchoolYearRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        $yearStart = request('year_start');
        $yearEnd = request('year_end');

        $alreadyExists = SchoolYear::where('year_start', $yearStart)
                            ->where('year_end', $yearEnd)->count() > 0;
        if($alreadyExists)
            $fail("School year " . $yearStart . "-" . $yearEnd . " already exists.");

    }
}
