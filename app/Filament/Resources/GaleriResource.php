<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_acara')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_acara')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\DatePicker::make('date_acara')
                    ->required(),
                Forms\Components\Textarea::make('description_acara')
                    ->required()
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_acara')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image_acara')
                    ->disk('public')
                    ->label('Image acara'),
                Tables\Columns\TextColumn::make('date_acara')->date(),
                Tables\Columns\TextColumn::make('description_acara')
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
