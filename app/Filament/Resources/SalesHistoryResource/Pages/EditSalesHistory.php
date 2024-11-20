<?php

namespace App\Filament\Resources\SalesHistoryResource\Pages;

use App\Filament\Resources\SalesHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalesHistory extends EditRecord
{
    protected static string $resource = SalesHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
