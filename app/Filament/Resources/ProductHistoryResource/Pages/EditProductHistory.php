<?php

namespace App\Filament\Resources\ProductHistoryResource\Pages;

use App\Filament\Resources\ProductHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductHistory extends EditRecord
{
    protected static string $resource = ProductHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
