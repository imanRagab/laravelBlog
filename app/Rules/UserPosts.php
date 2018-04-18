<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Post;

class UserPosts implements Rule
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
        $count = Post::where('user_id', $value)->get()->count();

        return $count < 3 ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "User posts can't exceed 3 posts!";
    }
}
