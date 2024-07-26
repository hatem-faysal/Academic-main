<?php
namespace App\Rules\Auth\Admin;


use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckAdmin implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        $request = Request();
        if(!auth()->attempt($request->only('email','password'))){
            return false;
        }else{
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
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
        return 'Invalid login details';
    }
}
