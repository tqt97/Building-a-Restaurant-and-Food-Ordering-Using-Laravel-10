<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    function index() : View {
        return view('auth.admin.login');
    }

    function forgetPassword() : View {
        return view('auth.admin.forget-password');
    }
}
