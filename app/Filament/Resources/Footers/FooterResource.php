<?php

namespace App\Filament\Resources\Footers;

use App\Filament\Resources\Footers\Pages\CreateFooter;
use App\Filament\Resources\Footers\Pages\EditFooter;
use App\Filament\Resources\Footers\Pages\ListFooters;
use App\Filament\Resources\Footers\Schemas\FooterForm;
use App\Filament\Resources\Footers\Tables\FootersTable;
use App\Models\Footer;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FooterResource extends Resource
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';
protected static ?string $navigationLabel = 'Pengaturan Footer';
protected static ?string $modelLabel = 'Footer';
protected static ?string $pluralModelLabel = 'Pengaturan Footer';
protected static string|UnitEnum|null $navigationGroup = 'Pengaturan';
protected static ?int $navigationSort = 1;
    public static function form(Schema $schema): Schema
    {
        return FooterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FootersTable::configure($table);
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
            'index' => ListFooters::route('/'),
            'create' => CreateFooter::route('/create'),
            'edit' => EditFooter::route('/{record}/edit'),
        ];
    }
}
