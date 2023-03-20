<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('files.index')->with('files', $files);
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/uploads', $fileName);
            $url = asset('storage/uploads/'. $fileName);

            $fileModel = new File();
            $fileModel->name = $fileName;
            $fileModel->path = $path;
            $fileModel->url = $url;
            $fileModel->save();

            return redirect('/files')->with('success', 'File has been uploaded successfully.');
        }

        return redirect('/files')->with('error', 'No file to upload.');
    }
}
