<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Master';

    protected static ?string $pluralModelLabel = 'Portofolio Projects';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Select::make('category')
                    ->options([
                        'Web Development' => 'Web Development',
                        'Mobile App' => 'Mobile App',
                        'Data Science' => 'Data Science',
                        'Machine Learning' => 'Machine Learning',
                        'DevOps' => 'DevOps',
                        'UI/UX Design' => 'UI/UX Design',
                    ])
                    ->required(),
                TextInput::make('case_study_url')
                    ->label('Case Study URL')
                    ->url()
                    ->nullable(),

                // File upload untuk gambar
                FileUpload::make('image')
                    ->image()
                    ->directory('project-images') // Simpan gambar di folder 'storage/app/public/project-images'
                    ->nullable(),

                // Toggle untuk status publikasi
                Toggle::make('is_published')
                    ->label('Published')
                    ->required()
                    ->default(false),

                // Input angka untuk urutan
                TextInput::make('order')
                    ->numeric()
                    ->required()
                    ->default(0),

                // Rich editor untuk deskripsi
                RichEditor::make('description')
                    ->nullable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),

                // Kolom untuk judul, bisa dicari (searchable)
                TextColumn::make('title')
                    ->searchable(),

                // Kolom untuk kategori, bisa dicari
                TextColumn::make('category')
                    ->searchable(),

                // Kolom toggle untuk mengubah status publikasi langsung dari tabel
                ToggleColumn::make('is_published')
                    ->label('Published'),

                // Kolom untuk urutan, bisa diurutkan (sortable)
                TextColumn::make('order')
                    ->sortable(),

                // Kolom untuk tanggal pembuatan, disembunyikan secara default
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // Kolom untuk tanggal update, disembunyikan secara default
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
