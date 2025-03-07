<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\artikel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;

class ArtikelResource extends Resource
{
    protected static ?string $model = artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make([
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
                                            ->maxlength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn(string $operation, $state, Set $set)
                                            => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                        TextInput::make('slug')
                                            ->maxlength(255)
                                            ->disabled()
                                            ->required()
                                            ->dehydrated()
                                            ->unique(artikel::class, 'slug', ignoreRecord: true)
                                    ]),

                                    Tab::make('Content Blog')
                                    ->columnSpanFull()
                                    ->schema([
                                        RichEditor::make('content')
                                            ->columnSpanFull()
                                            ->required()
                                            ->toolbarButtons([
                                                'attachFiles',
                                                'blockquote',
                                                'bold',
                                                'bulletList',
                                                'codeBlock',
                                                'h2',
                                                'h3',
                                                'italic',
                                                'link',
                                                'orderedList',
                                                'redo',
                                                'strike',
                                                'underline',
                                                'undo',
                                            ])
                                    ]),
                    ]),
                
                ]),
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
