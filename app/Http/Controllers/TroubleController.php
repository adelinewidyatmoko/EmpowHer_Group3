<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Report;

class TroubleController extends Controller
{
    public function index()
    {
        return view('trouble');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string',
            'reason' => 'required|string',
            'proof' => 'nullable|file|mimes:zip,rar,jpg,jpeg,png,pdf|max:5120'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $report = new Report();
        $report->type = $request->type;
        $report->reason = $request->reason;

        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $report->proof = 'uploads/' . $filename;
        }

        $report->save();

        return back()->with('success', 'Laporan anda telah berhasil dikirim!');
    }


}
