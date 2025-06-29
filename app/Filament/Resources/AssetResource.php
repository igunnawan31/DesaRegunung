<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Filament\Resources\AssetResource\RelationManagers;
use App\Models\Asset;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_asset')
                    ->required()
                    ->maxLength(255),
                Select::make('tipe_asset')
                    ->required()
                    ->options([
                        'draft' => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ]),
                Forms\Components\Textarea::make('description_singkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description_asset')
                    ->required()
                    ->maxLength(1000),
                Forms\Components\FileUpload::make('gambar_asset')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_asset2')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_asset3')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\FileUpload::make('gambar_asset4')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->optimize('webp')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
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
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
