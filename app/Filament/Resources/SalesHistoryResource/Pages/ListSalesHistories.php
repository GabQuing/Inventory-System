<?php

namespace App\Filament\Resources\SalesHistoryResource\Pages;

use App\Filament\Resources\SalesHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSalesHistories extends ListRecords
{
    protected static string $resource = SalesHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
