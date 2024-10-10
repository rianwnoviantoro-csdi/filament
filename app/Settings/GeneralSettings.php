<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $brand_name;
    public ?string $brand_logo;
    public bool $site_active;
    public ?string $site_favicon;
    public ?string $banner;

    public ?string $vision_and_mission_banner;
    public ?string $vision_and_mission_description;

    public ?string $history_banner;
    public ?string $history_description;

    public ?string $introduction_banner;
    public ?string $introduction_description;

    public ?string $organizational_structure_banner;
    public ?string $organizational_structure_description;

    public static function group(): string
    {
        return 'general';
    }
}
