<?php

namespace App\Filament\Resources\Whatsups\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

use Filament\Schemas\Schema;

class WhatsupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('url')->url(true)->required(),
                RichEditor::make('content')->required(),
                TextInput::make('is_release'),
                
            ]);
    }
}
