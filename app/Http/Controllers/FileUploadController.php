<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    /**
     * Display the file upload form and list all uploaded files.
     *
     * @return \Illuminate\View\View
     */
    public function showUploadForm()
    {
        // Fetch all uploaded files from the database
        $files = FileUpload::latest()->get();

        // Pass files to the view
        return view('upload_form', compact('files'));
    }

    /**
     * Handle the file upload request and store file details.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request)
    {
        // Validate the incoming file
        $request->validate([
            'file' => 'required|file|max:10240', // Max file size: 10 MB
        ]);

        // Store the file and get its original name
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = $file->store('uploads', 'public');

        // Save file details to the database
        FileUpload::create([
            'filename' => $filename,
            'path' => $path,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'File uploaded successfully!');
    }

    public function download($id)
    {
        $file = FileUpload::findOrFail($id);

        $filePath = storage_path('app/' . $file->path); // use the stored path
        $fileName = $file->filename; // original name for download

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath, $fileName);
    }
}