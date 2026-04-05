<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function destroy(Media $media)
    {
        Storage::disk('public')->delete($media->path);
        $media->delete();
        return redirect()->back()->with('success', 'Image deleted successfully');
    }
}
