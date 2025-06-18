<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class applyjobs extends Controller
{
    // Show the form
    public function applyIndex()
    {
        return view('apply.apply');
    }

    // Handle form submission
    public function insertApply(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // file input name = resume
            'formFields' => 'required|string|min:10', // textarea name = formFields
        ]);

        // Store the uploaded resume in 'storage/app/public/resumes'
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Prepare data for database
        $data = [
            'resumeurl' => $resumePath, // Column in your table
            'formfields' => $request->input('formFields'), // Column in your table
            'submittedate' => now(), // Current time
        ];

        // Insert the data into the database table 'applyform'
        DB::table('applyform')->insert($data);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
