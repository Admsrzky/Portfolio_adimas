<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialLinkResource\Pages;
use App\Models\SocialLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SocialLinkResource extends Resource
{
    protected static ?string $model = SocialLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    protected static ?string $navigationGroup = 'Data Master';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        // Dropdown untuk memilih nama platform
                        Forms\Components\Select::make('name')
                            ->options([
                                'GitHub' => 'GitHub',
                                'LinkedIn' => 'LinkedIn',
                                'Whatsaap' => 'WhatsApp',
                                'Instagram' => 'Instagram',
                                'Facebook' => 'Facebook',
                                'Glints' => 'Glints',
                            ])
                            ->required()
                            ->searchable(),

                        // Input untuk URL
                        Forms\Components\TextInput::make('url')
                            ->url() // Validasi sebagai URL
                            ->required()
                            ->maxLength(255),

                        // Input untuk urutan
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->required()
                            ->default(0),

                        // Textarea untuk kode SVG ikon
                        Forms\Components\FileUpload::make('icon_svg')
                            ->label('Icon SVG')
                            ->image() // Validasi sebagai gambar & ada pratinjau
                            ->directory('social-link-icons') // Folder penyimpanan
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk urutan, bisa diurutkan
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),

                // Kolom untuk menampilkan ikon SVG secara visual
                Tables\Columns\ImageColumn::make('icon_svg')
                    ->label('Icon'),

                // Kolom untuk nama
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->badge(),

                // Kolom untuk URL
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
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
            ])
            ->defaultSort('order', 'asc');
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
            'index' => Pages\ListSocialLinks::route('/'),
            'create' => Pages\CreateSocialLink::route('/create'),
            'edit' => Pages\EditSocialLink::route('/{record}/edit'),
        ];
    }
}
