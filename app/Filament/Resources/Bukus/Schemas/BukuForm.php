<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('penulis')
                    ->required(),
                TextInput::make('penerbit')
                    ->required(),
                TextInput::make('tahun_terbit')
                    ->required(),
                Select::make('status')
                    ->options(['tersedia' => 'Tersedia', 'dipinjam' => 'Dipinjam'])
                    ->default('tersedia')
                    ->required(),
            ]);
    }
}
