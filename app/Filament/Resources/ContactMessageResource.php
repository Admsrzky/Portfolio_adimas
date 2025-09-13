<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Pages\ViewContactMessage;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    // Mengganti ikon dan grup navigasi agar lebih sesuai
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationGroup = 'Manajemen Situs';
    protected static ?string $navigationLabel = 'Pesan Masuk';
    protected static ?int $navigationSort = 3;

    /**
     * Menonaktifkan tombol "Create" karena pesan hanya masuk dari form kontak.
     */
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Pengirim')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->disabled(),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->disabled(),
                        Forms\Components\TextInput::make('location')
                            ->label('Lokasi')
                            ->disabled(),
                        Forms\Components\TextInput::make('budget')
                            ->label('Budget')
                            ->disabled(),
                    ])->columns(2),

                Forms\Components\Section::make('Isi Pesan')
                    ->schema([
                        Forms\Components\TextInput::make('subject')
                            ->label('Subjek')
                            ->required()
                            ->columnSpanFull()
                            ->disabled(),
                        Forms\Components\Textarea::make('message')
                            ->label('Pesan')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull()
                            ->disabled(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->label('Subjek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diterima pada')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                // Filter bisa ditambahkan di sini jika perlu
            ])
            ->actions([
                // Mengganti EditAction dengan ViewAction karena pesan tidak seharusnya diubah
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            // Menampilkan pesan terbaru di atas
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListContactMessages::route('/'),
            // Halaman Create dan Edit tidak diperlukan untuk resource ini
            // 'create' => Pages\CreateContactMessage::route('/create'),
            // 'edit' => Pages\EditContactMessage::route('/{record}/edit'),
            'view' => Pages\ViewContactMessage::route('/{record}'), // <-- Halaman ini
        ];
    }
}
