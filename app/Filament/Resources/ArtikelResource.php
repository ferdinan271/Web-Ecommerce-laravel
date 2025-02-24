<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ArtikelResource extends Resource
{
    protected static ?string $model = artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Tabs::make('Heading')
                ->tabs([
                    Tab::make('Cover Blog')
                        ->columnSpanFull()
                        ->schema([
                            FileUpload::make('image')
                                ->image()
                                ->directory('blogs')
                                
                        ]),
                    Tab::make('Description Blog')
                        ->columnSpanFull()
                        ->schema([
                            TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        
                        TagsInput::make('slug')
                            ->required()
                            ->separator(','),
                        ]),
                    Tab::make('Content Blog')
                        ->columnSpanFull()
                        ->schema([
                            RichEditor::make('description')
                                ->columnSpanFull()
                                ->required()
                                
                        ]),
                    ]),
                Toggle::make('is_active')
                ->required()
                ->default(true),
                ]);
                
       
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
              
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
