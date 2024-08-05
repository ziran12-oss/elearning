<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FriendController extends Controller
{
    public function index()
    {
        // Retrieve current friends and stories from the database (if any)
        $friends = ['Teman 1', 'Teman 2', 'Teman 3']; // Example static data
        $stories = []; // Fetch stories from the database if needed

        return view('friends.index', compact('friends', 'stories'));
    }

    
    public function uploadStory(Request $request)
{
    if ($request->hasFile('story')) {
        $file = $request->file('story');
        $path = $file->store('stories', 'public');
        
        // Simpan path ke database
        Story::create(['path' => $path]);

        return back()->with('success', 'Story uploaded successfully!');
    }
    return back()->with('error', 'Failed to upload story.');
}

}
