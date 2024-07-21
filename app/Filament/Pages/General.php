<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class General extends SettingsPage

{
    use HasPageShield;

    protected static ?int $navigationSort = 99;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = GeneralSettings::class;

    protected function fillForm(): void
    {
        $settings = app(static::getSettings());

        $data = $this->mutateFormDataBeforeFill($settings->toArray());

        $this->form->fill($data);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')->tabs([
                    Tab::make('Sites')->schema([
                        Grid::make()->schema([
                            TextInput::make('brand_name')
                                ->label('Brand Name'),
                            Select::make('site_active')
                                ->label('Site Status')
                                ->options([
                                    0 => "Not Active",
                                    1 => "Active",
                                ])
                                ->native(false),
                        ]),
                        Grid::make()->schema([
                            Grid::make()->schema([
                                FileUpload::make('brand_logo')
                                    ->label('Logo')
                                    ->image()
                                    ->directory('sites')
                                    ->visibility('public')
                                    ->moveFiles()

                                    ->columnSpan(2),
                            ])
                                ->columnSpan(2),
                            FileUpload::make('site_favicon')
                                ->label('Favicon')
                                ->image()
                                ->directory('sites')
                                ->visibility('public')
                                ->moveFiles()
                                ->acceptedFileTypes(['image/x-icon', 'image/vnd.microsoft.icon']),
                        ])->columns(4)
                    ]),
                    Tab::make('Visi Misi')->schema([
                        FileUpload::make('vision_and_mission_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('vision_and_mission_description')
                            ->label('Description')
                    ]),
                    Tab::make('Sejarah')->schema([
                        FileUpload::make('history_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('history_description')
                            ->label('Description')
                    ]),
                    Tab::make('Pengantar')->schema([
                        FileUpload::make('introduction_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('introduction_description')
                            ->label('Description')
                    ]),
                    Tab::make('Struktur Organisasi')->schema([
                        FileUpload::make('organizational_structure_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('organizational_structure_description')
                            ->label('Description')
                    ]),
                ]),
            ])
            ->columns(1)
            ->statePath('data');
    }
}
