<?php

namespace App\Filament\Resources\Whatsups\Pages;

use App\Filament\Resources\Whatsups\WhatsupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWhatsups extends ListRecords
{
    protected static string $resource = WhatsupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
