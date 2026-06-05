<?php

namespace App\Filament\Resources\Rektors;

use App\Filament\Resources\Rektors\Pages\CreateRektor;
use App\Filament\Resources\Rektors\Pages\EditRektor;
use App\Filament\Resources\Rektors\Pages\ListRektors;
use App\Filament\Resources\Rektors\Schemas\RektorForm;
use App\Filament\Resources\Rektors\Tables\RektorsTable;
use App\Models\Rektor;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RektorResource extends Resource
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-star';
protected static ?string $navigationLabel = 'Pimpinan';
protected static ?string $modelLabel = 'Pimpinan';
protected static ?string $pluralModelLabel = 'Pimpinan';
protected static string|UnitEnum|null $navigationGroup = 'Manajemen SDM';
protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return RektorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RektorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRektors::route('/'),
            'create' => CreateRektor::route('/create'),
            'edit' => EditRektor::route('/{record}/edit'),
        ];
    }
}
