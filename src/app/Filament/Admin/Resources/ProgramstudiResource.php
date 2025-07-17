<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramStudiResource\Pages;
use App\Models\ProgramStudi;
use App\Models\Fakultas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class ProgramStudiResource extends Resource
{
    protected static ?string $model = ProgramStudi::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Program Studi';
    protected static ?string $pluralLabel = 'Program Studi';
    protected static ?string $slug = 'program-studi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->maxLength(10),

                Forms\Components\Select::make('fakultas_id')
                    ->label('Fakultas')
                    ->relationship('fakultas', 'nama')
                    ->required(),

                Forms\Components\TextInput::make('kaprodi')
                    ->label('Kaprodi')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('fakultas.nama')->label('Fakultas')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kaprodi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramStudis::route('/'),
            'create' => Pages\CreateProgramStudi::route('/create'),
            'edit' => Pages\EditProgramStudi::route('/{record}/edit'),
        ];
    }
}
