<?php

namespace App\Filament\Resources\Whatsups;

use App\Filament\Resources\Whatsups\Pages\CreateWhatsup;
use App\Filament\Resources\Whatsups\Pages\EditWhatsup;
use App\Filament\Resources\Whatsups\Pages\ListWhatsups;
use App\Filament\Resources\Whatsups\Pages\ViewWhatsup;
use App\Filament\Resources\Whatsups\Schemas\WhatsupForm;
use App\Filament\Resources\Whatsups\Schemas\WhatsupInfolist;
use App\Filament\Resources\Whatsups\Tables\WhatsupsTable;
use App\Models\Whatsup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhatsupResource extends Resource
{
    protected static ?string $model = Whatsup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'varchar';

    public static function form(Schema $schema): Schema
    {
        return WhatsupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WhatsupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WhatsupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWhatsups::route('/'),
            'create' => CreateWhatsup::route('/create'),
            'view' => ViewWhatsup::route('/{record}'),
            'edit' => EditWhatsup::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
