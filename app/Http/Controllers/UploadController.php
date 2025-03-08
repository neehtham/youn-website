<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

final class UploadController extends Controller
{
    public function process(Request $request): string
    {

        /** @var UploadedFile[] $files */
        $files = $request->allFiles();

        if (empty($files)) {
            abort(422, 'No files were uploaded.');
        }

        if (count($files) > 1) {
            abort(422, 'Only 1 file can be uploaded at a time.');
        }

        $requestKey = array_key_first($files);

        $file = is_array($request->input($requestKey))
            ? $request->file($requestKey)[0]
            : $request->file($requestKey);

        return $file->store(
            path: '/tmp/' . now()->timestamp . '-' . Str::random(8)
        );
    }
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'paragraph1' => 'required|string',
            'paragraph2' => 'required|string',
            'coverPhoto' => "required",
            'Photo1' => "required",
            'Photo2' => "required"
        ]);
        //Todo: display dose in index and show
        // Copy the file from a temporary location to a permanent location.
        $tempfiles = [
            'coverPhoto' => $request->coverPhoto,
            'Photo1' => $request->Photo1,
            'Photo2' => $request->Photo2
        ];
        $event = new Event();
        $event->title = $request->title;
        $event->paragraph1 = $request->paragraph1;
        $event->paragraph2 = $request->paragraph2;

        foreach ($tempfiles as $filetype => $tempfile) {
            $permanentPath = str_replace('tmp/', '/storage/public/photos', $tempfile);
            Storage::move($tempfile, $permanentPath);
            $event->$filetype = $permanentPath;
        };
        $event->save();
        return redirect()
            ->route('dashboard')
            ->with('success', 'new event has created');
    }
}
