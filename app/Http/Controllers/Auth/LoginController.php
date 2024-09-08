<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/products';

    /**
     * Handle post-authentication redirection based on user role.
     */
    protected function authenticated(Request $request, $user)
    {
        // If the authenticated user is not an admin, log them out
        if (!$user->is_admin) {
            auth()->logout();
            return redirect('/')->with('error', 'Access denied.');
        }

        // Redirect to the admin dashboard if authenticated
        return redirect()->route('admin.products.index');
    }
}
