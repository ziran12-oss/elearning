<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('upload.blade', compact('uploads'));
    }

    public function showUploadForm()
    {
        return view('upload.form');

    }
}
