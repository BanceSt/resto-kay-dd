<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduitResource\Pages;
use App\Filament\Resources\ProduitResource\RelationManagers;
use App\Models\Produit;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProduitResource extends Resource
{
    protected static ?string $model = Produit::class;

    protected static ?string $navigationIcon = 'heroicon-o-cake';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make("name")
                    ->autocapitalize('words')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required()
                    ->label("nom"),

                TextInput::make("description"),

                TextInput::make('price')
                    ->numeric()
                    ->inputMode('decimal')
                    ->label("prix"),

                FileUpload::make("img")
                    ->image()
                    ->label("image")
                    ->disk("public")
                    ->directory("produits"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make("name")
                    ->label("nom"),

                TextColumn::make("description")
                    ->limit(10),

                TextColumn::make("price")
                    ->label("prix")
                    ->money("EUR"),

                TextColumn::make("Categories")
                    ,

                ImageColumn::make("img")
                    ->square()
                    ->state(function ($record) {
                        return asset($record->img);
                    }),
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
            'index' => Pages\ListProduits::route('/'),
            'create' => Pages\CreateProduit::route('/create'),
            'edit' => Pages\EditProduit::route('/{record}/edit'),
        ];
    }
}
