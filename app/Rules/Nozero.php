<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Nozero implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $chars = str_split($value);

        if (!in_array("0", $chars))
        {
            return true;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Číslo eReceptu nesmí obsahovat číslo nula.';
    }
}
