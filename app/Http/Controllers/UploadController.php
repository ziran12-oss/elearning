<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Show the file upload form.
     *
     * @return \Illuminate\View\View
     */
    public function showUploadForm()
    {
        return view('upload');
    }

    /**
     * Handle the file upload request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request)
    {
        // Validate the file input
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Generate a unique filename for the uploaded file
        $filename = time() . '_' . $file->getClientOriginalName();

        // Save the file to the appropriate location (e.g., public/uploads)
        $file->storeAs('uploads', $filename, 'public');

        // Return a success response with a redirect
        return redirect()->route('upload.form')->with([
            'success' => 'File uploaded successfully.',
            'file' => 'uploads/' . $filename
        ]);
    }
}
