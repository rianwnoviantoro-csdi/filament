<?php

namespace App\Filament\Pages;

use App\Settings\CustomerSettings;
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
use League\CommonMark\Input\MarkdownInput;

class Customer extends SettingsPage
{
    use HasPageShield;

    protected static ?int $navigationSort = 99;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = CustomerSettings::class;

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
                    Tab::make('Air Tangki')->schema([
                        FileUpload::make('water_tank_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('water_tank_description')
                            ->label('Description')
                    ]),
                    Tab::make('Pasang Baru')->schema([
                        FileUpload::make('new_installation_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('new_installation_description')
                            ->label('Description')
                    ]),
                    Tab::make('Ganti Nama')->schema([
                        FileUpload::make('change_name_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('change_name_description')
                            ->label('Description')
                    ]),
                    Tab::make('Stop Kran')->schema([
                        FileUpload::make('stop_the_tap_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('stop_the_tap_description')
                            ->label('Description')
                    ]),
                    Tab::make('Ganti / Pindah Meter')->schema([
                        FileUpload::make('move_customer_meters_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('move_customer_meters_description')
                            ->label('Description')
                    ]),
                ]),
            ])
            ->columns(1)
            ->statePath('data');
    }
}
