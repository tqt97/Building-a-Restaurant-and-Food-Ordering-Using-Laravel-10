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

    public function updatePassword(PasswordRequest $request)
    {
        if (!auth()->check()) {
            return abort(403);
        }

        $user = auth()->user();

        // if (!Hash::check($request->current_password, $user->password)) {
        //     return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password']);
        // }

        $user->password = Hash::make($request->password);
        $user->save();

        auth()->logout();
        return redirect()->route('admin.login')->with('success', 'Password updated successfully');
    }

    public function updateAvatar(Request $request)
    {
        if (!auth()->check()) {
            return abort(403);
        }

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $version = Str::random(10);
            $imageName = 'avatar-' . $version . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/images/avatar'), $imageName);
            $user->avatar = $imageName;
            $user->save();
        }else{
            return redirect()->back()->withErrors(['avatar' => 'The provided file is not an image']);
        }

        return redirect()->back()->with('success', 'Avatar updated successfully');
    }

}
