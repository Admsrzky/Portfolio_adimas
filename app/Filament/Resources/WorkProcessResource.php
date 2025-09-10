<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkProcessResource\Pages;
use App\Models\WorkProcess;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class WorkProcessResource extends Resource
{
    protected static ?string $model = WorkProcess::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationGroup = 'Data Master';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Mengelompokkan field dalam sebuah card/section
                Forms\Components\Section::make()
                    ->schema([
                        // Input untuk nomor urutan
                        Forms\Components\TextInput::make('step_number')
                            ->label('Step Number')
                            ->numeric()
                            ->required()
                            ->default(1)
                            ->minValue(1),

                        // Input untuk judul
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        // Textarea untuk deskripsi
                        Forms\Components\Textarea::make('description')
                            ->nullable()
                            ->columnSpanFull(), // Memenuhi lebar form

                        // Textarea untuk kode SVG ikon
                        Forms\Components\FileUpload::make('icon_svg')
                            ->label('Icon Image')
                            ->image() // Validasi sebagai gambar & ada pratinjau
                            ->directory('workprocess-icons') // Folder penyimpanan
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2), // Membuat layout 2 kolom
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk nomor urutan, bisa diurutkan
                Tables\Columns\TextColumn::make('step_number')
                    ->label('Step')
                    ->sortable(),

                // Kolom untuk menampilkan ikon SVG secara visual
                ImageColumn::make('icon_svg')
                    ->label('Icon'),

                // Kolom untuk judul, bisa dicari
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                // Kolom untuk deskripsi
                Tables\Columns\TextColumn::make('description')
                    ->limit(60) // Membatasi panjang teks yang tampil
                    ->tooltip(fn(WorkProcess $record): string => $record->description), // Tampilkan full teks saat di-hover

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), // Aksi hapus per baris
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('step_number', 'asc'); // Urutkan berdasarkan nomor langkah secara default
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
            'index' => Pages\ListWorkProcesses::route('/'),
            'create' => Pages\CreateWorkProcess::route('/create'),
            'edit' => Pages\EditWorkProcess::route('/{record}/edit'),
        ];
    }
}
