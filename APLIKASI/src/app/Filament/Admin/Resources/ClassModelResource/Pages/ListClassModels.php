<?php

namespace App\Filament\Admin\Resources\ClassModelResource\Pages;

use App\Filament\Admin\Resources\ClassModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassModels extends ListRecords
{
    protected static string $resource = ClassModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
