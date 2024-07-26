<?php
namespace App\Http\Controllers\Auth;

use App\Actions\AuthAdmins\AuthAdminsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\LoginAdminRequest;
use App\Http\Requests\Auth\Admin\RegisterAdminRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{
    public function login()
    {
        return view('auth.student.login');
    }
    public function storeLogin(LoginAdminRequest $request)
    {
        return redirect()->intended(RouteServiceProvider::ADMIN)->with('success', "Account successfully login.");
    }
    public function register()
    {
        return view('auth.student.register');
    }
    public function storeRegister(RegisterAdminRequest $request)
    {
        app(AuthAdminsAction::class)->handle($request->validated());
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect()->intended(RouteServiceProvider::ADMIN)->with('success', "Account successfully registered.");
    }
}
