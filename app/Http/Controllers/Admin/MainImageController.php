<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MainImageController extends Controller
{
    public function index()
    {
        return view('admin.mainImage.index');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');

        $imageLocation = $image->store('mainImage');

        if($imageLocation)
        {
            $oldImage = MainImage::first();

            Storage::delete($oldImage->file_name);

            $oldImage->delete();


            MainImage::create([
                'file_name' => $imageLocation,
                'name' => "simple"
            ]);

            return redirect()->route('admin.mainImage.index')->withSuccess('Image setted');
        }

        return redirect()->route('admin.mainImage.index')->withErrors('Image failed to upload');
    }
}
