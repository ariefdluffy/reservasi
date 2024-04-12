<?php

namespace App\Filament\Imports;

use App\Models\Participant;
use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Filament\Tables\Columns\TextInputColumn;

class ParticipantImporter extends Importer
{
    protected static ?string $model = Participant::class;

    public static function getColumns(): array
    {
        return [
            // ImportColumn::make('user_id'),
            // ImportColumn::make('user_id'),
            //     ->requiredMapping()
            // ->numeric()
            // ->rules(['required', 'integer']),
            ImportColumn::make('participant_id')
                //     ->requiredMapping()
                // ->relationship()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('nip_nik')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('nama_peserta')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('email')
                ->requiredMapping()
                ->rules(['required', 'email', 'max:255']),
        ];
    }

    public function resolveRecord(): ?Participant
    {
        // return Participant::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Participant();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your participant import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
