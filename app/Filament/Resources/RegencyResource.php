<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegencyResource\Pages;
use App\Filament\Resources\RegencyResource\RelationManagers;
use App\Models\Regency;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegencyResource extends Resource
{
    protected static ?string $model = Regency::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alt_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('latitude')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('longitude')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('population')
                    ->numeric()
                    ->label('Population')
                    ->nullable(),
                Forms\Components\TextInput::make('pernikahan')
                    ->numeric()
                    ->label('Pernikahan')
                    ->nullable(),
                Forms\Components\TextInput::make('perceraian')
                    ->numeric()
                    ->label('Perceraian')
                    ->nullable(),
                Forms\Components\TextInput::make('kelahiran')
                    ->numeric()
                    ->label('Kelahiran')
                    ->nullable(),
                Forms\Components\Select::make('type_polygon')
                    ->label('Type Polygon')
                    ->options([
                        'Polygon' => 'Polygon',
                        'MultiPolygon' => 'MultiPolygon',
                    ])
                    ->default('Polygon'),
                Forms\Components\Textarea::make('polygon')
                    ->label('Polygon Data')
                    ->nullable(),
                Forms\Components\Select::make('province_id')
                    ->required()
                    ->options(
                        \App\Models\Province::all()->pluck('name', 'id')
                    ),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alt_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('population')
                    ->numeric()
                    ->label('Population'),
                Tables\Columns\TextColumn::make('pernikahan')
                    ->numeric()
                    ->label('Pernikahan'),
                Tables\Columns\TextColumn::make('perceraian')
                    ->numeric()
                    ->label('Perceraian'),
                Tables\Columns\TextColumn::make('kelahiran')
                    ->numeric()
                    ->label('Kelahiran'),
                Tables\Columns\TextColumn::make('type_polygon')
                    ->label('Type Polygon'),
                Tables\Columns\TextColumn::make('province.name')
                    ->label('Province')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListRegencies::route('/'),
            'create' => Pages\CreateRegency::route('/create'),
            'edit' => Pages\EditRegency::route('/{record}/edit'),
        ];
    }
}
