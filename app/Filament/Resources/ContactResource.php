<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('user_id')
                ->label('client')
                ->badge()
                ->state(function ($record) {
                    return $record->user_id ? "User" : "Invite";
                })
                ->color(fn (string $state): string => match ($state) {
                    'User' => 'success',
                    'Invite' => 'warning',
                }),


                TextColumn::make('name')
                ->label('Prénom')
                ->sortable()
                ->searchable(),

                TextColumn::make('last_name')
                ->label('Nom')
                ->sortable()
                ->searchable(),

                TextColumn::make('email')
                ->sortable()
                ->searchable(),

                TextColumn::make('objet')
                ->sortable()
                ->searchable()
                ->limit(10),

                TextColumn::make('message')
                ->sortable()
                ->searchable()
                ->limit(10),

                TextColumn::make('respond')
                ->sortable()
                ->searchable()
                ->limit(10)
                ->default("aucune"),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'non lu' => 'gray',
                        'en attente' => 'warning',
                        'repondu' => 'success',
                    })
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
