<?php
//htdocs\EmpowHer_Group3\app\Http\Controllers\PasswordController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request)
    {

        $user = User::where('name', $request->name)->first();

        if ($user) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return view('auth.login')->with('status', 'Password updated successfully!');
        }

        return back()->with('status', 'User not found.');
    }
}
