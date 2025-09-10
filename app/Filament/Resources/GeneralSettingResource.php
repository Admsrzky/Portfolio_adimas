<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralSettingResource\Pages;
use App\Models\Generalsetting;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GeneralSettingResource extends Resource
{
    protected static ?string $model = Generalsetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Pengaturan Website';

    protected static ?string $pluralModelLabel = 'Pengaturan Website';

    // Menonaktifkan tombol "New General Setting"
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Menggunakan Tabs untuk mengelompokkan banyak field
                Tabs::make('Settings')
                    ->tabs([
                        Tabs\Tab::make('Hero Section')
                            ->schema([
                                Forms\Components\TextInput::make('hero_title')
                                    ->required(),
                                Forms\Components\Textarea::make('hero_subtitle')
                                    ->required()
                                    ->rows(3),
                                Forms\Components\FileUpload::make('hero_image')
                                    ->image()
                                    ->directory('settings')
                                    ->required(),
                            ]),

                        Tabs\Tab::make('About Section')
                            ->schema([
                                Forms\Components\TextInput::make('about_title')
                                    ->required(),
                                Forms\Components\RichEditor::make('about_description_1')
                                    ->label('About Description (Paragraph 1)')
                                    ->required(),
                                Forms\Components\RichEditor::make('about_description_2')
                                    ->label('About Description (Paragraph 2)')
                                    ->nullable(),
                                Forms\Components\FileUpload::make('about_image')
                                    ->image()
                                    ->directory('settings')
                                    ->required(),
                                Forms\Components\FileUpload::make('cv_path')
                                    ->label('CV File (PDF)')
                                    ->directory('settings')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->nullable(),
                            ]),

                        Tabs\Tab::make('Statistics')
                            ->schema([
                                Forms\Components\TextInput::make('years_experience')->numeric()->required(),
                                Forms\Components\TextInput::make('projects_completed')->numeric()->required(),
                                Forms\Components\TextInput::make('happy_clients')->numeric()->required(),
                            ]),

                        Tabs\Tab::make('Contact & Footer')
                            ->schema([
                                Forms\Components\Textarea::make('contact_address')->required(),
                                Forms\Components\TextInput::make('contact_email')->email()->required(),
                                Forms\Components\TextInput::make('contact_phone')->tel()->required(),
                                Forms\Components\TextInput::make('footer_copyright')
                                    ->required()
                                    ->placeholder('© ' . date('Y') . ' Your Name. All Rights Reserved.'),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title'),
                Tables\Columns\TextColumn::make('contact_email'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]); // Bulk actions tidak relevan untuk satu item
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGeneralSettings::route('/'),
            // Halaman create tidak diperlukan, jadi kita hapus dari sini
            'edit' => Pages\EditGeneralSetting::route('/{record}/edit'),
        ];
    }
}
