<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function ImageUploadForm()
    {
        return view('ImageUpload');
    }

    public function ImageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        return back()->with('success', 'You have successfully uploaded the image!')->with('image', 'images/'.$imageName);
    }
}
