<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GPACalculatorController extends Controller
{
    public function showForm()
    {
        return view('gpa');
    }

    public function calculateGPA(Request $request)
    {
        // Grades mapping
        $grades = [
            "A+" => 4.0,
            "A" => 3.75,
            "A-" => 3.50,
            "B+" => 3.25,
            "B" => 3.0,
            "B-" => 2.75,
            "C+" => 2.50,
            "C" => 2.25,
            "D" => 2.0,
            "F" => 0.0,
        ];

        // Credits for each subject
        $credits = [3.0, 0.75, 3.0, 1.5, 3.0, 1.5, 3.0, 3.0, 0.75];
        $totalCG = 0;
        $totalCredits = 19.5;

        foreach ($request->grades as $key => $grade) {
            // Check if the grade exists in the mapping
            if (array_key_exists($grade, $grades)) {
                $totalCG += $credits[$key] * $grades[$grade];
            } else {
                return redirect()->back()->with('error', 'Please enter valid grades!')->withInput();
            }
        }

        // Calculate GPA
        $gpa = $totalCG / $totalCredits;

        return redirect()->back()->with('gpa', round($gpa, 2));
    }
}
