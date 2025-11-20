<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => ListRecords\Tab::make('All')
                ->query(fn (Builder $query) => $query),

            'new' => ListRecords\Tab::make('New')
                ->query(fn (Builder $query) => $query->where('status', 'new')),

            'processing' => ListRecords\Tab::make('Processing')
                ->query(fn (Builder $query) => $query->where('status', 'processing')),

            'shipped' => ListRecords\Tab::make('Shipped')
                ->query(fn (Builder $query) => $query->where('status', 'shipped')),

            'delivered' => ListRecords\Tab::make('Delivered')
                ->query(fn (Builder $query) => $query->where('status', 'delivered')),

            'cancelled' => ListRecords\Tab::make('Cancelled')
                ->query(fn (Builder $query) => $query->where('status', 'cancelled')),
        ];
    }
}
