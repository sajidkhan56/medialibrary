<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class uploadImage extends Controller
{
    public function setImage(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $image = new image;
        $image->imagename = $imageName;
        $image->save();
        $request->image->storeAs('images', $imageName);
        return back()->with('success','You have successfully upload image.');
    }
}
