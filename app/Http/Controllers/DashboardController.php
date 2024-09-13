<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationInformation;
use App\Models\ProgramChoice;
use App\Models\Program; // Assuming you have a Program model

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Fetch the user's education information
        $education = EducationInformation::where('user_id', $user->id)->first();

        // Fetch the user's program information (if applicable)
        $program = Program::where('user_id', $user->id)->first();

        // Fetch the program choices related to the user's program
        $programChoices = $program ? ProgramChoice::where('program_id', $program->id)->get() : [];

        // Example data for the application level and status
        $applicationLevel = $education->level ?? 'N/A'; // Fetch this from education or set default
        $applicationRound = $education->round ?? 'N/A'; // Fetch this from education or set default
        $status = $education->status ?? 'NOT SUBMITTED'; // Fetch this from education or set default

        return view('home', compact('user', 'education', 'program', 'programChoices', 'applicationLevel', 'applicationRound', 'status'));
    }
}
