<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CustomerSettings extends Settings
{
    public ?string $water_tank_banner;
    public ?string $water_tank_description;

    public ?string $change_name_banner;
    public ?string $change_name_description;

    public ?string $stop_the_tap_banner;
    public ?string $stop_the_tap_description;

    public ?string $move_customer_meters_banner;
    public ?string $move_customer_meters_description;

    public ?string $new_installation_banner;
    public ?string $new_installation_description;

    public static function group(): string
    {
        return 'customers';
    }
}
