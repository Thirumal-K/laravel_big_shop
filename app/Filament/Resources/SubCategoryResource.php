<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCategoryResource\Pages;
use App\Filament\Resources\SubCategoryResource\RelationManagers;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Enums\SubCategoryStatus;
class SubCategoryResource extends Resource
{
    protected static ?string $model = SubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Ecommerce';
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('category')
                ->required()
                ->searchable()
                ->preload()
                ->relationship('category','name')
                ->createOptionForm([
                    Forms\Components\TextInput::make('name')
                    ->required()
                ])
                ->editOptionForm([
                    Forms\Components\TextInput::make('name')
                    ->required()                      
                ]),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_path')
                    ->image()
                    ->directory('subcatagory'),
                Forms\Components\TextInput::make('buying_price')
                    ->maxLength(255),
                Forms\Components\TextInput::make('selling_price')
                    ->maxLength(255),
                Forms\Components\TextInput::make('measurement_unit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('eraned_profit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_qty')
                    ->maxLength(255),
                Forms\Components\TextInput::make('reorder_level')
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_id')
                    ->numeric(),
                Forms\Components\TextInput::make('category_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('status')
                    ->options(SubCategoryStatus::class)
                    ->default,(SubCategoryStatus::PUBLISH),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->lable('SubCategory')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('image_path')
                ->getStateUsing(fn (SubCategory $record): string => $record->GetLogoImage())
                ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('buying_price')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('selling_price')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('measurement_unit')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('eraned_profit')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('current_qty')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('reorder_level')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('company_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_id')  
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->badge()
                ->color(fn (string $state): string => match ($state) {
                    SubCategoryStatus::PUBLISH->value => 'success',
                    SubCategoryStatus::DRAFT->value => 'warning',                        
                    SubCategoryStatus::PENDING->value => 'danger',
                }),
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
            'index' => Pages\ListSubCategories::route('/'),
            'create' => Pages\CreateSubCategory::route('/create'),
            'edit' => Pages\EditSubCategory::route('/{record}/edit'),
        ];
    }
}
