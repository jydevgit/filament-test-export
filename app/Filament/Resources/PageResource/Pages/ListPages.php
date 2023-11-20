<?php

namespace App\Filament\Resources\PageResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\PageResource;
use Filament\Resources\Pages\ListRecords;

class ListPages extends ListRecords
{
    protected static string $resource = PageResource::class;

    public static function getResource(): string
    {
        return config('filament-fabricator.page-resource') ?? static::$resource;
    }

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
