<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul_artikel')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_rilis')
                    ->required(),
                Forms\Components\TextInput::make('copyright_by')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('gambar_1')
                    ->required()
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_2')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_3')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_4')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\Textarea::make('description_1')
                    ->maxLength(1000),
                Forms\Components\Textarea::make('description_2')
                    ->maxLength(1000),
                Forms\Components\Textarea::make('description_3')
                    ->maxLength(1000),
                Forms\Components\Textarea::make('description_4')
                    ->maxLength(1000),
                Forms\Components\Textarea::make('description_5')
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
