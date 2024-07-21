<?php

namespace App\Filament\Pages;

use App\Settings\ServiceSettings;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class Service extends SettingsPage
{
    use HasPageShield;

    protected static ?int $navigationSort = 99;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = ServiceSettings::class;

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
                    Tab::make('Tarif')->schema([
                        FileUpload::make('pricing_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('pricing_description')
                            ->label('Description')
                    ]),
                    Tab::make('Rantai Pasok')->schema([
                        FileUpload::make('supply_chain_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('supply_chain_description')
                            ->label('Description')
                    ]),
                    Tab::make('Pembayaran')->schema([
                        FileUpload::make('payment_banner')
                            ->label('Banner')
                            ->image()
                            ->directory('banner')
                            ->visibility('public')
                            ->moveFiles(),
                        MarkdownEditor::make('payment_description')
                            ->label('Description')
                    ]),
                ]),
            ])
            ->columns(1)
            ->statePath('data');
    }
}
