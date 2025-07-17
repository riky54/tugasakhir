<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Dosen';
    protected static ?string $pluralLabel = 'Dosen';
    protected static ?string $slug = 'dosen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nip')
                    ->required()
                    ->maxLength(20),

                Forms\Components\Select::make('fakultas_id')
                    ->label('Fakultas')
                    ->relationship('fakultas', 'nama')
                    ->required(),

                Forms\Components\Select::make('program_studi_id')
                    ->label('Program Studi')
                    ->relationship('programStudi', 'nama')
                    ->required(),

                Forms\Components\TextInput::make('jabatan')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nip')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('fakultas.nama')->label('Fakultas')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('programStudi.nama')->label('Program Studi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jabatan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }
}
