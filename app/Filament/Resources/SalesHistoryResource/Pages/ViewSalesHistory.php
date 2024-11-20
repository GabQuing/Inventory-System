<?php

namespace App\Filament\Resources\SalesHistoryResource\Pages;

use App\Filament\Resources\SalesHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSalesHistory extends ViewRecord
{
    protected static string $resource = SalesHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
