<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all applications with user data
        $applications = User::with('user')->get();
        return view('admin.index', compact('applications'));
    }

    public function approveApplication($id)
    {
        $application = User::findOrFail($id);

        // Ensure the status is updated correctly
        $application->status = 'approved';
        $application->save();

        return redirect()->route('admin.index')->with('success', 'Application approved successfully.');
    }

    public function rejectApplication($id)
    {
        $application = User::findOrFail($id);

        // Ensure the status is updated correctly
        $application->status = 'rejected';
        $application->save();

        return redirect()->route('admin.index')->with('error', 'Application rejected.');
    }
}
