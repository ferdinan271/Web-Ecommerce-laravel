<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Concerns\CanBeSearchable;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use function Laravel\Prompts\select;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxlength(255)
                            ->live(onBlur:true)
                            ->afterStateUpdated(function(string $operation,$state, Set $set){
                                if($operation !== 'create'){
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->maxlength(255)
                            ->disabled()
                            ->required()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('products')
                    ])->columns(2),

                    Section::make('Images')->schema([
                        FileUpload::make('images')
                            ->multiple()
                            ->Directory('products')
                            ->maxFiles(10)
                            ->reorderable()
                    ])
                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Price')
                    ->schema(components: [
                        TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->prefix('IDR')
                        ->type('number')
                    ]),
                    Section::make('Associations')->schema([
                        Select::make('category_id')
                            ->required()
                            ->Searchable()
                            ->preload()
                            ->relationship('category', 'name'),
                        
                        Select::make('brand_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('brand', 'name')
                    ]),
                    Section::make('Status')->schema([
                            Toggle::make('is_active')
                            ->required()
                            ->default(true),
                            Toggle::make('is_featured')
                            ->required(),
                            Toggle::make('in_stock')
                            ->required()
                            ->default(true),

                            Toggle::make('on_sale')
                            ->required()
                    ])

                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\TextColumn::make('category.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('brand.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                ->money('IDR')
                ->sortable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
            Tables\Columns\IconColumn::make('is_featured')
                ->boolean(),
            Tables\Columns\IconColumn::make('in_stock')
                ->boolean(),
            Tables\Columns\IconColumn::make('on_sale')
                ->boolean(),
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
            SelectFilter::make('category')
            ->relationship('category','name'),
            SelectFilter::make('brand')
            ->relationship('brand','name')
        ])
        ->actions([
            ActionGroup::make([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
