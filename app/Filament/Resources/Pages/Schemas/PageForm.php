<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Builder::make('content')
                    ->blocks([
                        Block::make('text')
                            ->schema([
                                RichEditor::make('body')->required(),
                            ]),
                        Block::make('image')
                            ->schema([
                                FileUpload::make('url')->image()->required(),
                                TextInput::make('alt')->required(),
                            ]),
                    ])
                    ->required(),
                DateTimePicker::make('published_verified_at'),
            ]);
    }
}
