<?php

namespace App\Rules;

use App\Models\Models\Product;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidProduct implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $product = Product::where('id', $value)->first();
        if($product) {
            return;
        } else {
            $fail('Il prodotto non esiste');
        }
    }
}
