<?php

namespace App\Filament\Siswa\Resources\Peminjamen\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PeminjamanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(auth()->id())
                    ->required(),
                Select::make('buku_id')
                    ->relationship('buku', 'judul')
                    ->required(),
                DateTimePicker::make('kapan_dipinjam')
                    ->required(),
                DateTimePicker::make('kapan_dikembalikan')
                    ->required(),
                Hidden::make('status')
                    ->default('dipinjam')
                    ->required(),
            ]);
    }
}