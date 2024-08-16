<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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

                TextColumn::make('phone')
                ->sortable()
                ->searchable(),

                TextColumn::make('specials_need')
                ->sortable()
                ->searchable()
                ->limit(10),

                TextColumn::make("numero_table")
                ->label('Party size'),



                TextColumn::make("reserved_at")
                ->label('Réservé le'),
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
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
