<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ClassModelResource\Pages;
use App\Filament\Admin\Resources\ClassModelResource\RelationManagers;
use App\Models\ClassModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassModelResource extends Resource
{
    protected static ?string $model = ClassModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nama Kelas')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('subject')
                ->label('Mata Pelajaran')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            Tables\Columns\TextColumn::make('name')
                ->label('Nama Kelas')
                ->searchable(),
            Tables\Columns\TextColumn::make('subject')
                ->label('Mata Pelajaran')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListClassModels::route('/'),
            'create' => Pages\CreateClassModel::route('/create'),
            'edit' => Pages\EditClassModel::route('/{record}/edit'),
        ];
    }
}
