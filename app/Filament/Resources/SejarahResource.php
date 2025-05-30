<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SejarahResource\Pages;
use App\Filament\Resources\SejarahResource\RelationManagers;
use App\Models\Sejarah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SejarahResource extends Resource
{
    protected static ?string $model = Sejarah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_sejarah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_sejarah')
                    ->disk('public')
                    ->directory('form-attachments')
                    ->visibility('public')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9'
                    ]),
                Forms\Components\DatePicker::make('date_sejarah')
                ->required(),
                Forms\Components\Textarea::make('description1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description2')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description3')
                    ->maxLength(255),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_sejarah')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image_sejarah')
                    ->disk('public')
                    ->label('Image sejarah'),
                Tables\Columns\TextColumn::make('date_sejarah')->date(),
                Tables\Columns\TextColumn::make('description1')
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
            'index' => Pages\ListSejarahs::route('/'),
            'create' => Pages\CreateSejarah::route('/create'),
            'edit' => Pages\EditSejarah::route('/{record}/edit'),
        ];
    }
}
