<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationInformation;
use App\Models\Program;

class ApplicationController extends Controller
{
    // Show the Personal Information Form
    public function showProfileForm()
    {
        $user = auth()->user();
        return view('application.profile', compact('user'));
    }

    // Handle the personal information form submission
    public function updatePersonalInfo(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'disability' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'permanent_address' => 'required|string',
            'kin_full_name' => 'required|string',
            'kin_relationship' => 'required|string',
            'kin_mobile' => 'required|string',
            'kin_email' => 'required|email',
        ]);

        $user = auth()->user();
        $user->update($request->all()); // Update user with the new data

        return redirect()->route('education')->with('success', 'Profile updated successfully.');
    }

    // Show the Education Background Form
    public function showEducationForm()
    {
        $user = auth()->user();
        $education = EducationInformation::where('user_id', $user->id)->first();
        return view('application.education', compact('education'));
    }

    // Handle the education form submission
    public function educationInfo(Request $request)
    {
        $fields = $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'graduation_year' => 'required|integer|digits:4',
            'gpa' => 'required|numeric|min:0|max:4.00',
        ]);

        $user = auth()->user();
        $fields['user_id'] = $user->id;

        EducationInformation::updateOrCreate(
            ['user_id' => $user->id],
            $fields
        );

        return redirect()->route('program')->with('success', 'Education information updated successfully.');
    }

    // Show the Program Selection Form
public function showProgramForm()
{
    // Ensure the user is authenticated
    $user = auth()->user();

    // Fetch the programs for the authenticated user
    // Adjust this query based on your database schema and relationships
    $programs = Program::where('user_id', $user->id)->first();

    // Pass the programs variable to the view
    return view('application.program', compact('programs'));
}

    // Handle the program selection form submission
    public function programInfo(Request $request)
    {
        $fields = $request->validate([
            'program_a_choice' => 'required|string',
            'program_b_choice' => 'required|string',
            'program_c_choice' => 'required|string',
            'program_d_choice'=>'string',
            'program_e_choice'=>'string'
        ]);

        $user = auth()->user();
        $fields['user_id'] = $user->id;

        Program::updateOrCreate(
            ['user_id' => $user->id],
            $fields
        );

        return redirect()->route('confirmation')->with('success', 'Program choices updated successfully.');
    }

    // Show the Confirmation Page
    public function showConfirmation()
    {
        $user = auth()->user();
        $education = EducationInformation::where('user_id', $user->id)->first();
        $programs = Program::where('user_id', $user->id)->first();

        return view('application.submission', compact('user', 'education', 'programs'));
    }

    // Handle the confirmation
    public function confirmSubmission()
    {
        // Perform any necessary actions here (e.g., finalizing the application)

        return redirect()->route('home')->with('success', 'Application confirmed and submitted successfully.');
    }
}
