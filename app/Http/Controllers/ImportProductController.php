<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\ProductImportService;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

final class ImportProductController extends Controller
{
    public function __invoke(
        Request $request,

    ): RedirectResponse {
        $validated = $request->validate([
            'csv' => 'required|string',
        ]);

        // Copy the file from a temporary location to a permanent location.
        $fileLocation = Storage::putFile(
            path: 'imports',
            file: new File(Storage::path($validated['csv']))
        );

        return redirect()
            ->route('dashboard')
            ->with('success', 'new event has created');
    }
}
