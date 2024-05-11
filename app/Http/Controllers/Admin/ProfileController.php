<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Admin\ProfileRequest;
use App\Http\Requests\Admin\PasswordRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.admin.index');
    }

    public function update(ProfileRequest $request)
    {
        if (!auth()->check()) {
            return abort(403);
        }
        $user = auth()->user()?->update($request->only('name', 'email'));

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword1(PasswordRequest $request)
    {
        if (!auth()->check()) {
            return abort(403);
        }

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password']);
        }
        // dd($request->all());
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();
                event(new PasswordReset($user));
            }
        );


        // $status = Password::reset(
        //     $request->only('email', 'password', 'password_confirmation', 'token'),
        //     function ($user) use ($request) {
        //         $user->forceFill([
        //             'password' => Hash::make($request->password),
        //             'remember_token' => Str::random(60),
        //         ])->save();

        //         event(new PasswordReset($user));
        //     }
        // );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function updatePassword(PasswordRequest $request)
    {
        if (!auth()->check()) {
            return abort(403);
        }

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        auth()->logout();
        return redirect()->route('admin.login')->with('success', 'Password updated successfully');

        // return redirect()->back()->with('success', 'Password updated successfully');
    }

}
