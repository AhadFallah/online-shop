<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function cover(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|image'
        ]);
        $file = $validated['file'];
        $fileName = now() . '.' . $file->extension();
        $path = Storage::putFileAs('image', $file, $fileName);
        $myFile= File::create([
            'name' => $fileName,
            'use' => 'product',
            'path' => $path,
            'type' => 'cover',
            'user_id' => auth()->user()->id,

        ]);
        return response()->json([
            'message' => $myFile->id,
        ]);
    }

    public function pic(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|image'
        ]);
        $file = $validated['file'];
        $fileName = now() . '.' . $file->extension();
        $path = Storage::putFileAs('image', $file, $fileName);
        $myFile= File::create([
            'name' => $fileName,
            'use' => 'product',
            'path' => $path,
            'type' => 'pic',
            'user_id' => auth()->user()->id,

        ]);
        return response()->json([
            'message' => $myFile->id,
        ]);
    }
}
