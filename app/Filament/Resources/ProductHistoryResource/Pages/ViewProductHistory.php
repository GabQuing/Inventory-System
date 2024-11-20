<?php

namespace App\Filament\Resources\ProductHistoryResource\Pages;

use App\Filament\Resources\ProductHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProductHistory extends ViewRecord
{
    protected static string $resource = ProductHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
