<?php

namespace App\Filament\Widgets;

use App\Models\Peminjaman;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GetPeminjaman extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total peminjaman', Peminjaman::count()),
        ];
    }
}