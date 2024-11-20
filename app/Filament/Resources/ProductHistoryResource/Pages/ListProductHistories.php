<?php

namespace App\Filament\Resources\ProductHistoryResource\Pages;

use App\Filament\Resources\ProductHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductHistories extends ListRecords
{
    protected static string $resource = ProductHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
