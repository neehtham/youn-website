<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($request->all(), [
            $requestKey => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }
        return $file->store(
            path: 'tmp/' . now()->timestamp . '-' . Str::random(8),
            options: ['disk' => 'public']
        );
    }
    public function deleteTemp(Request $request)
    {
        $path = $request->get('path');
        Storage::disk('public')->delete($path);
        return response()->json(['message' => 'File deleted']);
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
            $permanentPath = str_replace('tmp/', 'photos/', $tempfile);
            Storage::disk('public')->move($tempfile, $permanentPath);
            $event->$filetype = $permanentPath;
        };
        $event->save();
        return redirect()
            ->route('dashboard')
            ->with('success', 'new event has created');
    }
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string',
            'paragraph1' => 'required|string',
            'paragraph2' => 'required|string',
            'coverPhoto' => "nullable",
            'Photo1' => "nullable",
            'Photo2' => "nullable"
        ]);
        $tempfiles = [
            'coverPhoto' => $request->coverPhoto,
            'Photo1' => $request->Photo1,
            'Photo2' => $request->Photo2
        ];
        $new = [
            'title' => $request->title,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2
        ];
        foreach ($tempfiles as $filetype => $tempfile) {
            if ($tempfile !== null) {
                $permanentPath = str_replace('tmp/', 'photos/', $tempfile);
                Storage::disk('public')->move($tempfile, $permanentPath);
                $new[$filetype] = $permanentPath;
            }
        };

        $event->update($new);
        return redirect()
            ->route('dashboard')
            ->with('success', 'new event has updated');
    }
}
