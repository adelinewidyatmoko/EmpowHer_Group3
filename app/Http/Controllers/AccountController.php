<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function account(){
        return view('account');
    }

    public function deleteAccount(Request $request){
        $user = Auth::user();
        if ($user) {
            $user->delete();
            return redirect('/')->with('status', 'Account deleted successfully.');
        }

        return redirect('/');
    }
}
