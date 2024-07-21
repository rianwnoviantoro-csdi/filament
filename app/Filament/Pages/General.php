<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms;
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
                Forms\Components\Section::make('Site')
                    ->description('Manage basic settings.')
                    ->schema([
                        Forms\Components\Grid::make()->schema([
                            Forms\Components\TextInput::make('brand_name')
                                ->label('Brand Name'),
                            Forms\Components\Select::make('site_active')
                                ->label('Site Status')
                                ->options([
                                    0 => "Not Active",
                                    1 => "Active",
                                ])
                                ->native(false),
                        ]),
                        Forms\Components\Grid::make()->schema([
                            Forms\Components\Grid::make()->schema([
                                Forms\Components\TextInput::make('brand_logoHeight')
                                    ->label('Logo Height')

                                    ->columnSpan(2),
                                Forms\Components\FileUpload::make('brand_logo')
                                    ->label('Logo')
                                    ->image()
                                    ->directory('sites')
                                    ->visibility('public')
                                    ->moveFiles()

                                    ->columnSpan(2),
                            ])
                                ->columnSpan(2),
                            Forms\Components\FileUpload::make('site_favicon')
                                ->label('Favicon')
                                ->image()
                                ->directory('sites')
                                ->visibility('public')
                                ->moveFiles()
                                ->acceptedFileTypes(['image/x-icon', 'image/vnd.microsoft.icon']),
                        ])->columns(4),
                    ]),
            ])
            ->columns(3)
            ->statePath('data');
    }
}
