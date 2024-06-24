<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Resume;

class UserController extends Controller
{
    public function search(Request $request)
    {
        // Retrieve search term from request input
        $searchTerm = $request->input('search');

        // Perform search query
        $resumes = Resume::where('full_name', 'like', "%$searchTerm%")
                        ->orWhere('email', 'like', "%$searchTerm%")
                        ->get();

        // Return view with search results
        return view('resume.show', ['resumes' => $resumes]);
    }

    public function logout()
    {
        Auth::logout();
    
        return redirect('/')->with('success', 'You have been logged out.');
    }

}


