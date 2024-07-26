<?php
namespace App\Http\Controllers\Auth;

use App\Actions\AuthAdmins\AuthAdminsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\LoginAdminRequest;
use App\Http\Requests\Auth\Admin\RegisterAdminRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('auth.admin.login');
    }
    public function storeLogin(LoginAdminRequest $request)
    {
        return redirect()->intended(RouteServiceProvider::ADMIN)->with('success', "Account successfully login.");
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('/')->with('success', "Account successfully registered.");
    }
}
