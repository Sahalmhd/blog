<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected function getStats(): array
    {
        return [
            Stat::make('Total authors', Author::count(),)
                ->color('success'),
            Stat::make('Total Posts', Post::count())
                ->color('info'),


        ];
    }
}
