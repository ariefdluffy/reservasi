<?php

namespace App\Filament\Resources\ParticipantResource\Pages;

use App\Filament\Imports\ParticipantImporter;
use App\Filament\Resources\ParticipantResource;
use Filament\Actions;
use Filament\Actions\ImportAction;
use Filament\Actions\ImportField;
use Filament\Actions\Imports\ImportColumn;
use Filament\Resources\Pages\ListRecords;

class ListParticipants extends ListRecords
{
    protected static string $resource = ParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\ImportAction::make()
                ->importer(ParticipantImporter::class),
        ];
    }
}
