<?php

namespace App\Filament\Resources\Whatsups\Pages;

use App\Filament\Resources\Whatsups\WhatsupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWhatsup extends ViewRecord
{
    protected static string $resource = WhatsupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
