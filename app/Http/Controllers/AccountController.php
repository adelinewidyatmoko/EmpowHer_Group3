<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function account(){
        return view('account');
    }

    public function change(){
        return view('accounteditor');
    }

    public function deleteAccount(Request $request){
        $user = Auth::user();
        if ($user) {
            $user->delete();
            return redirect('/')->with('status', 'Account deleted successfully.');
        }

        return redirect('/');
    }


    public function edit(Request $request){
        $user = Auth::user();

        if ($user) {
            $user->name = $request->name;
            $user->personalinfo = $request->personalinfo;
            $user->save();
            return redirect('/account')->with('status', 'Account updated successfully.');
        }
    }
}
